<?php
	session_start();
	include "../../php_pages/user.php";
	$gId=$_SESSION['GameId'];
	if(isset($_POST['test'])){
		$user = new user();
		$user->DeleteGame($_SESSION['GameId']);
	}
	$output = array("msg"=>$gId, "loggedin"=>"true");
	echo json_encode($output);
?>