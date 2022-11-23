<?php 
	session_start();
	$_SESSION['visitor'] = $_SESSION['visitor'] + 1;
	echo $_SESSION['visitor'];
?>