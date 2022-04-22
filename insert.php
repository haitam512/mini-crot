<?php 
include_once('connection.php');

if(isset($_POST["naam"])){

    $sql = "INSERT INTO menu
  
              (naam, prijs)
  
              VALUES
  
              (:naam,  :prijs )";
  
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':naam', $_POST['naam']);
  
      $stmt->bindParam(':prijs', $_POST['prijs']);
     
      $stmt->execute();
  
      header("Location: admin.php");
  }
?>
 <form action="#" method="post">
    naam<input type= "text" name="naam" id=""><br /> 
    prijs<input type= "text" name="prijs" id=""><br /> 
    <input type="submit" value="toevoegen" name="toevoegen">
</form>