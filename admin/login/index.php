<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="../php/check.php" method="POST">




				<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='logout'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Logout Successfull !
</div>
      <?php
  }  
  if($_GET['msg']=='iuser'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  Incorrect Email/Password !
</div>
      <?php
  } } 
?> 





					<span class="login100-form-title">
						Admin Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email Address">
						<input class="input100" type="email" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-50 p-b-5">
						
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>