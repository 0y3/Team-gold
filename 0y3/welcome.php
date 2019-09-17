<?php
	require_once('teamgold.php');
	validateuser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/Login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>TEAM GOLD Login System</title>
</head>
<body>
    <div id="main">
      <div class="caption"TEAM GOLD Login System Demo Page</div>
      <div id="icon">&nbsp;</div>
      <div id="result">
		<h1>Hello <?= $_SESSION['firstName'].' '. $_SESSION['lastName']?> !</h1> <br/>
		<p>This site demonstartes how to use TEAM GOLD Login System.</p>
		<p><a href="logout.php"> To log out click here!</a></p>
	  </div>	
	  <div id="source">TEAM GOLD Login System v 1.0</div>
    </div>
</body>   
