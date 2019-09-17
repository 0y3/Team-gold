<?php 
	require_once('teamgold.php');
	$login_err = false;

	if(isset($_SESSION['isLogIn']) && $_SESSION['isLogIn'] == TRUE) 
    {
      header('Location:welcome.php');die();
    }
	if (isset($_POST['submitBtn']))
	{
		$login_err=loginvalidation();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/Login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
	<form action="" method="post" id="logForm">
		<div class="container" id="formDiv">
			<center><h3 id="title">Lucid</h3></center>
			<?php if(isset($login_err) ): ?> 
			<center>
				<p class='err'><i class='far fa-stop-circle'></i> <?=$login_err;?></p> 
			</center>
			<?php endif; ?>
			<center><input type="email" name="userEmail" required="" placeholder="Email"></center>
			<center><br><input type="password" name="userPassword" required="" placeholder="Password"></center>
			<center><br><button type="submit" name="submitBtn" id="btn1">Login</button></center>
			<center><br><a href="#" id="fgt">Forgot Password?</a></center>
			<center><div id="orLine"><hr>or<hr></div></center>
			<center><br><a href="" id="btn2">Login with facebook</a></center>
			<center><div id="yy"><br id="yy">Dont have an account? <a href="#">sign up.</a></div></center>
		</div>
	</form>
</body>
</html> 