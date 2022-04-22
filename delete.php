<?php 
include_once('connection.php');


// if($_SESSION['logged in'] ==true){
//     //echo "Welcome " . $_SESSION['username'];
// } else {
//     header("location: admin.php");
// }

$sql ="DELETE FROM menu WHERE ID=:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("location: admin.php");
    ?>