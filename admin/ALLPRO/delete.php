<?php



$coon= new mysqli("localhost","root","","project_samir");
$id = $_GET['id'];


$select=" DELETE FROM products WHERE id='$id'";

$coon -> query($select);

header("location:../product.php");


?>