<?php
include_once('nav.php');
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


<table class="contain1">
    <tr>
</tr>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["prijs"];?></td>

      </td>
</tr>

            <?php } ?>
</table>
</div>
