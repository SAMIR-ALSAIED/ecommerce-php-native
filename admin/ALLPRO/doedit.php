<?php


$coon= new mysqli("localhost","root","","project_samir");
$id=$_GET['id'];

$name=$_POST['name'];
$price=$_POST['price'];
$count=$_POST['count'];
$image=$_POST['image'];
$catgory=$_POST['catgory'];
$brand=$_POST['brand'];

$update="

UPDATE products SET name='$name',price='$price',image='$image',cat='$catgory',brand='$brand',count='$count'  WHERE id='$id'";



$coon ->query($update);

header("location:../product.php");



?>