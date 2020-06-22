<?php
session_start();
include "user.php";
	$user = new user();
	$user->setUserName($_SESSION['username']);
	$user->setUserPassword($_SESSION['userpassword']);
	if($user->UserLogin()==true){

		$_SESSION['UserId']=$user->getUserId();
		$_SESSION['UserName']=$user->getUserName();
		$_SESSION['GameId']=$user->getUserGameId();
		$_SESSION['Opponent']=$user->getUserGameOpponent();
		$_SESSION['Color']=$user->getGameColor();  
	}
?>