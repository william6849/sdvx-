<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">

<style type="text/css"> 

body {
background-image:url(source/bg2.jpg);
　

background-position:center;　
}
</style> 

</head>
<body align=center>
<?php include_once("analyticstracking.php"); ?>
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

		$query = "SELECT * FROM `coconatsu` WHERE `date_a`=\"$id\" AND `id`>92 ORDER BY id";
		
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			$temp = new Messagecoco2016del($row['date_a'],$row['sub'],$row['context'],$row['pic'],$nzm);
				array_push($this->messages,$temp);
				 $temp = $row['id'];
				}
		foreach($this->messages as $m)
		$m->show();

		$query = "SELECT * FROM `coconatsu` WHERE `id`>\"$temp\" AND `sub`=1 LIMIT 1";
  
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			echo "<input type=\"button\" value=\"下一篇\n(".$row['date_a'].")\" style=\"width:120px;height:70px;font-size:20px;\" onclick=\"location.href='show_coconatsu2016.php?id=".$row['date_a']."'\"><br>";
			echo "<br>";
			 
		}

		mysql_close($con);
			
	}


}
echo "<div style=\"width: 330px; height: 38px;cursor: pointer; background: url(source/top21.png);\"
    title=\"TOP\"
    onClick=\"window.open('coconatsu2016.php','_self');\"
    onmouseover=\"this.style.background ='url(source/top22.png)';\"
    onmouseout=\"this.style.background='url(source/top21.png)';\">
</div><br>";
$mb = new MessageBoard();

?>


<div style="width: 330px; height: 38px;cursor: pointer; background: url(source/top21.png);"
    title="TOP"
    onClick="window.location='coconatsu2016.php';"
    onmouseover="this.style.background ='url(source/top22.png)';"
    onmouseout="this.style.background='url(source/top21.png)';">
</div>

</body>
</html>