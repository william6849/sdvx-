<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>
<body align=center  background="source/bg00.gif">
<div style="width: 101px; height: 37px;cursor: pointer; background: url(source/top1.png);"
    title="TOP"
    onClick="window.location='2014.php';"
    onmouseover="this.style.background ='url(source/top2.png)';"
    onmouseout="this.style.background='url(source/top1.png)';">
</div><br>
<?php
include_once('item.php');
header("Content-Type:text/html; charset=big5");
session_start();
class MessageBoard extends DB{

	var $messages=array();
	function __construct(){
parent::__construct();
		$this->load();
		

	}


	function load(){

		$query = "SELECT * FROM `users` WHERE `userid`=0";
  
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			 $nzm=$row['guid'];
		}


	$id = $_GET['id'];

		$query = "SELECT * FROM `hinabita` WHERE `id`<519 AND `date_a`=\"$id\"";
		
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			$temp = new Message2014del($row['date_a'],$row['sub'],$row['context'],$row['pic'],$nzm);
				array_push($this->messages,$temp);
				$temp = $row['id'];
				}
		foreach($this->messages as $m)
		$m->show();
				$query = "SELECT * FROM `hinabita` WHERE `id`>\"$temp\" AND `sub`=1 LIMIT 1";
  
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			echo "<input type=\"button\" value=\"下一篇\n(".$row['date_a'].")\" style=\"width:360px;height:200px;font-size:60px;\" onclick=\"location.href='show2014.php?id=".$row['date_a']."'\"><br>";
			echo "<br>";
			}
		mysql_close($con);
			
	}


}




$mb = new MessageBoard();


?>


<div style="width: 101px; height: 37px;cursor: pointer; background: url(source/top1.png);"
    title="TOP"
    onClick="window.location='2014.php';"
    onmouseover="this.style.background ='url(source/top2.png)';"
    onmouseout="this.style.background='url(source/top1.png)';">
</div>
</body>
</html>