<html>

<head>

<title>coconatsu</title>
<style  type="text/css">
body {
background-image:url(source/bg2.jpg);
background-repeat:no-repeat;　

background-position:center;　
}
</style>
</head>

<body align=center background="source/bg3.jpg">
<?php include_once("analyticstracking.php"); ?>
<div style="width: 330px; height: 38px;cursor: pointer; background: url(source/top21.png);"
    title="TOP"
    onClick="window.location='main.php';"
    onmouseover="this.style.background ='url(source/top22.png)';"
    onmouseout="this.style.background='url(source/top21.png)';">
</div><br>
<?php

include_once('item.php');
header("Content-Type:text/html; charset=big5");

class MessageBoard extends DB{

	var $messages=array();
	function __construct(){
parent::__construct();
		$this->load();
		
	}


	function load(){

	
		$query = "SELECT * FROM `coconatsu` WHERE `sub`=1 AND `id`>92 ORDER BY id" ;
  
		$result = mysql_query($query) or die ('Error in query');


		while($row = mysql_fetch_array($result)){
			$temp = new MessageCoCo2016($row['date_a'],$row['sub']);
			array_push($this->messages,$temp);
				}
		foreach($this->messages as $m)
		$m->show();
		mysql_close($con);
			
	}
}
	

echo "<div class=\"div3\">";
	$mb = new MessageBoard();
	echo "</div>";
echo "<hr>";
	echo "<br>";
?>

<div style="width: 330px; height: 38px;cursor: pointer; background: url(source/top21.png);"
    title="TOP"
    onClick="window.location='main.php';"
    onmouseover="this.style.background ='url(source/top22.png)';"
    onmouseout="this.style.background='url(source/top21.png)';">
</div><br>


</body>

</html>