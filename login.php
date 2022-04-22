<?php
include_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $stmt = $connect->prepare("select * from admin where username= :username AND password= :password");
    $stmt->execute(['username' => $username, 'password' => $password]); 
    $data = $stmt->fetch();
    $gevondenRows = $stmt->rowCount();
    
    if ($gevondenRows) {
        session_start();
        $_SESSION['user'] = 'admin';
        header("Location: admin.php");
    } else {
        header("Location: login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="hero">
        <nav>
          <h2 class="logo">pizzaria<span>fity </span></h2>
          <ul>
              <li><a href="index.html">home</a></li>
              <li><a href="menu.html">menu</a></li>
              <li><a href="contact.html">contact</a></li>
              <li><a href="galerie.html">galerie</a></li>
          </ul>
          <a href="login.html" class="loginbutton">Log in</a>
        </nav>
    </div>
  </div>
    <div class="loginbox">
        <img src="img/logoavatar.jpg" class="avatar">
        <h1>Login</h1>
        <div id="error"></div>
        <form id="form" action="#" method="post">
            <p>username</p>
            <input type="text" name="username" placeholder="username">
            <p>wachtwoord</p>
            <input type="password" name="password" placeholder="wachtwoord">
            <input type="submit" name="" value="login">
            <a href="#">wachtwoord vergeten?</a><br>
            <a href="#">geen account?</a>
        </form>
    </div>
    
</body>
</html>


