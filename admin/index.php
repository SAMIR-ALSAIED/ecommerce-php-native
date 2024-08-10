<?php

// print_r($_POST);

include("include/coon.php");


if($_SERVER['REQUEST_METHOD']==='POST'){

	$username=$_POST['username'];

	$password=$_POST['password'];
	$submit=$_POST['submit'];






 $select="SELECT * FROM users WHERE username='$username' && password='$password'  ";


 $resault= $coon ->query($select);

 $num= $resault -> num_rows;

 $row =  $resault -> fetch_assoc();

if ( $num > 0  && $row['pr']== '1'  ) {

	$_SESSION['login']===$username;

	header("location:dashbord.php");
	
}

}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body ">
					<form  action="<?= $_SERVER['PHP_SELF']  ?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="user name" name="username" type="text" >
							</div>
							<div class="form-group">
								<input class="form-control " placeholder="Password" name="password" type="password" >
							</div>


							<?php 

				if($_SERVER['REQUEST_METHOD']==='POST'){

			
				if ($num >0 && $row['pr']=='2' ) {

					echo "<div class='alert alert-warning'>انت مسجل ومش مسموح الدخول الادمن</div>";
					
				}

				if(isset($submit)){

					if (empty($username) && empty($password) ) {

						echo "<div class='alert alert-danger'> من فضلك ادخل اسم المستخدم او كلمة المرور </div>";

					}

					elseif (empty($username)) {
						echo "<div class='alert alert-danger'> من فضلك ادخل اسم المستخدم  </div>";

						
					}
					elseif (empty($password)) {
						echo "<div class='alert alert-danger'> من فضلك ادخل  كلمة المرور  </div>";

						
					}

				}
					
				

					
					
				}



							?>
							
					

							<button type="submit"  name="submit"  class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
