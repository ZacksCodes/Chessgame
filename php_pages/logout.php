<?php
	include_once("../connectToDB.php");	
	$_db=null;
	session_destroy();
	header("location:login.php");
?>