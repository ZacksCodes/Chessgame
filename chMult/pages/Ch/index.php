<?php
	
	session_start();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<META HTTP-EQUIV=Refresh; >
		<meta charset="utf-8">
		<meta name="keywords" content="Chess, Engine, Javascript, Play Chess, Chess Program, Javascript Chess, Game">
		<link rel="stylesheet" href="styles.css"> 
		<title>JSChess</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
	</head>
	<body>   
		<h2>Welcome <span style="color:green"><?php echo $_SESSION['UserName'];?>! </span>You are playing against <span style="color:red"><?php echo $_SESSION['Opponent'];?>! </span>
		</h2>	
		<div id="ThinkingImageDiv">		
		</div>
		
		</div>
		<div id="CurrentFenDiv" >
			<span id="currentFenSpan" style="display:none;"></span>		
		</div>				
		<div id="ChatMessages">
		</div>


<section class="section1" style="border-radius: 8px;position:absolute;left:30%;top:10%;background-color: #5dbffb;
right: 30%;bottom: 5%;">

	<p style="font-size: 20px; color: rgb(6, 1, 128); text-decoration:underline ;font-weight: bolder;position: relative;top:25px;left: 40%; ">
			<a id="deleteGame-submit"  onclick="parent.location='../../../index.php'">new opponent</a>  
	</p>
	<div style="position:relative;top:3%; left:10%;"id="Board"></div>
	
</section>
		<div id="multiplayer"style="border-radius:6px; position:absolute;top:280px ; left : 530px ; bottom: 210px;  right:540px; background-color:rgb(40, 148, 255); display: none;"><div style=" position: relative;left:33%;top:10%;margin-top; font-size: 30px;" id="AvailablePlayers">  </div>  </div>
		<div id="searchplayer"style="border-radius:6px; position:absolute;top:280px ; left : 530px ; bottom: 210px;  right:540px; background-color:rgb(40, 148, 255);display: none; "><div style="display: block; font-size: 30px;" id="player">  </div> <input type="text" placeholder="player name" id="myTextarea"></input>
			<input type="submit" onclick="searching()" id="button">
			</br><div style="font-size: 25px; position: relative;left:33%;top:5%" id="playername"></div><div id="link" style="font-size: 50px; position: relative;top:15%;left: 29%; "></div></div>

		<span id="GameStatus"></span>
		<div id="EngineOutput"><br/>
			<select id="ThinkTimeChoice" style="display:none;">
			  <option value="1">1s</option>
			  <option value="2">2s</option>
			  <option value="4">4s</option>
			  <option value="6">6s</option>
			  <option value="8">8s</option>
			  <option value="10">10s</option>
			</select><br/><br/><br/>
	
			<span id="BestOut" style="display:none;">BestMove:</span><br/>
			<span id="DepthOut"style="display:none;">Depth:</span><br/>
			<span id="ScoreOut"style="display:none;">Score:</span><br/>
			<span id="NodesOut"style="display:none;">Nodes:</span><br/>
			<span id="OrderingOut"style="display:none;">Ordering:</span><br/>
			<span id="TimeOut"style="display:none;">Time:</span><br/><br/>
			<button type="button" id="SearchButton"style="display:none;">Move Now</button><br/>
			
			<button type="button" id="FlipButton"style="display:none;">Flip Board</button><br/><br/>
			<button type="button" id="TakeButton"style="display:none;">Take Back</button><br/><br/><br/>
			
		</div>

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
		<script src="js/guiMultiPlayer.js"></script>
		<script src="js/main.js"></script>
		<script src="js/deleteDB.js"></script>	
	</body>
</html>