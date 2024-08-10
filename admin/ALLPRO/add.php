<?php

$coon= new mysqli("localhost","root","","project_samir");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="ALLPRO/do_add.php " method="post"  >

    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
        <input style="height:50px;" type="text" class="form-control  " name="name">
    </div>

    
    <div class="form-group">
        <label for="name" style="font-weight: bold;">price :</label>
        <input style="height:50px;" type="number" class="form-control  " name="price">
    </div>
    <div class="form-group">
        <label for="name" style="font-weight: bold;">count :</label>
        <input style="height:50px;" type="number" class="form-control  " name="count">
    </div>
    <div class="form-group">
        <label for="" style="font-weight: bold;">file :</label>
        <input style="height:50px;" type="file" class="  " name=" image">
    </div>
    
    <div class="form-group">

    <label for="" style="font-weight: bold;">catgores:</label>
     <select name="catgory"  class="form-control ">

     <?php

            
        $select="SELECT * FROM catgory ";

        $result= $coon ->query($select);
   
    while ( $cat=   $result -> fetch_assoc()) {

     ?>
        
  <option value="<?= $cat ['id'] ?>"><?= $cat ['name'] ?></option>
        
        <?php  
        }
        ?>
  
        </select>
    </div>
    <div class="form-group">
    <label for="" style="font-weight: bold;">brand:</label>
     <select name="brand" id="" class="form-control ">


     
     <?php

            
        $select="SELECT * FROM brand ";

        $result= $coon ->query($select);
   
    while ( $brand=   $result -> fetch_assoc()) {

     ?>
        
  <option value="<?= $brand ['id'] ?>"><?= $brand ['name'] ?></option>
        
        <?php  
        }
        ?>




            
        </select>
    </div>

    <button type="submit" class=" form-control btn btn-primary  " style="    height: 49px;   font-size: 17px; background-color:#9775fa; border:none;

"> add product </button>

</from>

<h1></h1>
<h1></h1>
<h1></h1>
    
</body>
</html>