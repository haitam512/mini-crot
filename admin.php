<?php 
include_once('connection.php');

session_start();
if ($_SESSION['user'] !== 'admin'){
    header("Location: edit.php");
}
$sql = "SELECT * FROM menu";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<a href="insert.php">insert</a>
<a href="index.php">uitloggen</a>
<table>
    <tr>
</tr>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["prijs"];?></td>
        <td><a href="edit.php?id=<?php echo $re["ID"];?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $re["ID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>

               
