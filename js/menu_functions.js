function multiplayer(){
				var rules=$("#ruless");
				var multiplayer=$("#multiplayer");
				var searchplayer=$("#searchplayer");
				multiplayer.show();	
				searchplayer.hide();
				rules.hide();	
				$("#AvailablePlayers").load("php_pages/DisplayPlayers.php");
				
				
			}
function searchplayer(){
			var rules=$("#ruless");
			var multiplayer=$("#multiplayer");
			var playername=$("#playername");
			var searchplayer=$("#searchplayer");
			searchplayer.show();	
			rules.hide();
			multiplayer.hide();
			var  name=document.getElementById("myTextarea").value ;
			playername=name;
			}

function searching() {
	var playername=$("#playername");
	var name=$("#myTextarea").val();
 	var str = "join here";
	$.post('php_pages/search_player.php',{name: name}, function(data)
{	
if (data.av==="true"){
	  $('#playername').text("player is not available");
}
if (data.av==="false") {
	var lien="php_pages/redirect.php?id="+data.msg+"&name="+name;	
 	var result = str.link(lien);
	$('#playername').text("player is found");
	document.getElementById("link").innerHTML = result;
}

},"json");
}
function new_game(){
	var rules=$("#ruless");
	var multiplayer=$("#multiplayer");
	var searchplayer=$("#searchplayer");
	multiplayer.hide();	
	searchplayer.hide();var element1=$("#rule1");
	element1.hide();
	var element2=$("#rule2");
	element2.hide();
}
function ruless(){
	var rules=$("#ruless");
	var multiplayer=$("#multiplayer");
	var searchplayer=$("#searchplayer");
	multiplayer.hide();	
	searchplayer.hide();
	var element1=$("#rule1");
	element1.show();
	var element2=$("#rule2");
	element2.show();
}