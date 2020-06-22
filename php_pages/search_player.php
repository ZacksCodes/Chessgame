<?php
include_once("../connectToDB.php"); 
if (isset($_POST['name']))
{	
$name=$_POST['name'];
$sql = $_db->query("SELECT * FROM users WHERE UserName = '$name'  ");
$existCount = $sql->rowCount(); // count the row nums
	if ($existCount == 0)
	{ 
		$output = array('msg'=>"player not found","av"=>"true");
	}

	if ($existCount > 0) 
	{
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	    { 
            $name = $row['UserName'];
			$token = $row['GameId'];
			$nom = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : NULL;
			if($name == $nom)
			{
				$output = array('msg'=>"player not found","av"=>"true");
			}
			else
			{
				if ($row["GameId"] != 0)
					{
						$available = "not available";
					}
				else 
					{
						$available = "available";
					}
				if ($token==0)
					{
						$token=rand(10000, 1000000000);
						$json=json_encode($token);
					}
				if ($row["GameId"] != 0) {
						
						$output = array('msg'=>"player not available","av"=>"true");
					}
					else {
						$output = array('msg'=>$json,"av"=>"false" );
						}
			}
		}
	}
	echo json_encode($output);
}
?>	