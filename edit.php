<?php 
    include_once('connection.php');

    if(isset($_GET['id'])) {
        $stmt = $connect->prepare("SELECT * FROM menu where id = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
    }

    if(isset($_POST["toevoegen"])){
        $sql = "UPDATE menu SET naam = :naam, prijs = :prijs WHERE ID =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':prijs', $_POST['prijs']);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();

        $stmt = $connect->prepare("SELECT * FROM menu where id = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
    }
?>

<form action="#" method="post">
    naam<input type= "text" name="naam" id="" value="<?php echo $data["naam"];?>"><br /> 
    prijs<input type= "text" name="prijs" id="" value="<?php echo $data["prijs"];?>"><br /> 
    <input type="submit" value="toevoegen" name="toevoegen">
</form>