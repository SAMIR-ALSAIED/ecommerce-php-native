<?php

$coon= new mysqli("localhost","root","","project_samir");

// echo"<pre>";
// print_r($_POST);

// echo"</pre>";


$name=$_POST['name'];
$price=$_POST['price'];
$count=$_POST['count'];
$image=$_POST['image'];
$catgory=$_POST['catgory'];
$brand=$_POST['brand'];


$insert="INSERT INTO products( name, price, image, cat, brand, count) 
VALUES ('$name','$price','$image','$catgory','$brand','$count')";

$coon -> query($insert);

header("location:../product.php");




?>