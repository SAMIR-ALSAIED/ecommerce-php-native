  <?php

$coon= new mysqli("localhost","root","","project_samir");

  $select="SELECT * FROM products ";

  $result= $coon ->query($select);




  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/t.css">
</head>
<body>

  <!-- table -->

<a href="?action=add" class=" btn btn-primary p-2" style="      margin-bottom: 13px;     padding:12px 30px;      background-color:#9775fa; border:none;

    ">add product</a>    
  
<table class="table  table-bordered text-center table-hover mt-3   ">
 <thead  >
    <tr>
      <th  class=" text-center">id</th>
      <th  class=" text-center">name</th>
      <th  class=" text-center">price</th>
      <th  class=" text-center">image</th>
      <th  class=" text-center">catgorey</th>
      <th  class=" text-center">brand</th>
      <th  class=" text-center">count</th>
      <th  class=" text-center" >control</th>
    </tr>
  </theadstyle=>
  <tbody>
    <?php


while ( $row = $result ->fetch_assoc()) {
   ?> 


    
    <tr>
    

      <td><?= $row ['id'] ?></td>
      <td><?= $row ['name'] ?></td>
      <td><?= $row ['price'] ?></td>
      <td><img src="assets/<?= $row['image']?>" style="width=90px;height:90px"></td>

      <td><?php $cat_id = $row ['cat'];
      
      $select_cat="SELECT * FROM catgory WHERE id='$cat_id'";

      $result_cat= $coon ->query($select_cat);

      $cat=   $result_cat -> fetch_assoc();

      echo $cat['name'];
      
      
      
      
      ?></td>





      <td><?php $brand_id = $row ['brand'] ;
      
      
      $select_brand="SELECT * FROM brand WHERE id='$brand_id'";

      $result_brand= $coon ->query ($select_brand);

      $brand=$result_brand -> fetch_assoc();

      echo $brand ['name'];
      
      
      
      
      ?></td>
      <td><?= $row ['count'] ?></td>
      <td>
        
        <a href="?action=edit&id=<?=$row['id']?>"> <button class=" b" style="   background-color:#9775fa;">edit</button></a>
        <a href="ALLPRO/delete.php ?id= <?= $row['id'] ?>"> <button class="a"  style=" background-color:#f06595">delete</button></a>

      <?php
}
      ?>
    </tr>
 
   
  </tbody>
</table>
			</div> 
  
</body>
</html>
