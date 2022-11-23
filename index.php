<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lab 9</title>
	<?php 
		setcookie("user", "Braer Max Alexandrovich 121085");
	?>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['username'])){
	   header("Location:login_digest.php");
	}
    echo 'Вы авторизованы как: ' . $_SESSION['username'] . "<br>";
    include("top.php");
    include("bottom.php");
	?>
</body>
</html> 