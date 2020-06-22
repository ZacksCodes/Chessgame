<?php
session_start();
if (!isset($_SESSION['username'])) 
{
	header('location:php_pages/login.php');
}
include "php_pages/user.php";
	$user = new user();
	if ($_SESSION['GameId']!=0)

	{
		$user->DeleteGame($_SESSION['GameId']);
		$_SESSION['GameId']="";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Chess, Engine, Javascript, Play Chess, Chess Program, Javascript Chess, Game">
		<title>JSChess</title>		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sliderStyle.css">
		<link href="css/stylesChess.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css.style.css">
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
	</head>
	<body>

<header><a style="font-weight: bolder;font-size:30px;position: absolute;top:5%;left:46%;" href="">COPYCAT</a></header>

<h2 style="display: top middle;color: blue;text-decoration:  underline;">welcome <?php echo $_SESSION['username']?> </h2>


<section class="section1" style="border-radius: 8px;position:absolute;left:30%;top:10%;background-color: #5dbffb;
right: 30%;bottom: 5%;">
	<p style="font-size: 19px; color: rgb(6, 1, 128); text-decoration:underline ;font-weight: bolder;position: relative;top:25px;left: 10px; ">
			<a  onclick="new_game()">Home</a> | 
			<a id="NewGame_Button" onclick="NewGame();newGameAjax();" >single player</a> | 
			<a  onclick="multiplayer()">multiplayer</a> | 
			<a onclick="searchplayer()" >search player</a> | 
			<a onclick="ruless()">rules</a> | 
			<a onclick="parent.location='php_pages/logout.php'">Log out </a>  
	</p>
	
	<div style="position:relative;top:5%; left:10%;"id="Board"></div>
</section>
		<div id="multiplayer"style="border-radius:6px; position:absolute;top:280px ; left : 530px ; bottom: 210px;  right:540px; background-color:rgb(40, 148, 255); display: none;"><div style=" position: relative;left:33%;top:10%;margin-top; font-size: 30px;" id="AvailablePlayers">  </div>  </div>
		<div id="searchplayer"style="border-radius:6px; position:absolute;top:280px ; left : 530px ; bottom: 210px;  right:540px; background-color:rgb(40, 148, 255);display: none; "><div style="display: block; font-size: 30px;" id="player">  </div> <input type="text" placeholder="player name" id="myTextarea"></input>
			<input type="submit" onclick="searching()" id="button">
			</br><div style="font-size: 25px; position: relative;left:33%;top:5%" id="playername"></div><div id="link" style="font-size: 50px; position: relative;top:15%;left: 29%; "></div></div>
		
<h1 style="font-size: 30px;text-decoration: underline italic;width: auto; margin-top: 4%; margin-left: 9%;display: none" id="rule1">RULES</h1>
			<ol style="border-style: double;width:20%; margin-top: 1%; margin-left: 3%;display: none;" id="rule2" >
				<li>When one of your pieces attacks another one of your pieces it gains the power of that piece (ex. A knight attacks a queen it now has the power of the queen).</li>
				<li>Once disconnected, the piece then loses that power.</li>
				<li>Your pieces do not get power from your opponent’s pieces or your king and/or pawns.</li>
				<li>The game is won by capturing the opponent’s king.</li>
			</ol>





		<span id="GameStatus"></span>
		<?php include 'php_pages/notOutputted.php'; ?>		
	

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/defs.js"></script>
		<script src="js/io.js"></script>
		<script src="js/board.js"></script>
		<script src="js/movegen.js"></script>
		<script src="js/makemove.js"></script>
		<script src="js/perft.js"></script>
		<script src="js/evaluate.js"></script>
		<script src="js/pvtable.js"></script>
		<script src="js/search.js"></script>
		<script src="js/protocol.js"></script>
		<script src="js/gui.js"></script>
		<script src="js/main.js"></script>
		<script src="chMult/js/jquery.js"></script>	
		<script src="js/menu_functions.js"></script>	
	</body>
</html>

