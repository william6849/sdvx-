<html>

<head>

<title>2015</title>

</head>

<body align=center background="source/bg00.gif">
<?php include_once("analyticstracking.php"); ?>
<div style="width: 101px; height: 37px;cursor: pointer; background: url(source/top1.png);"
    title="TOP"
    onClick="window.location='main.php';"
    onmouseover="this.style.background ='url(source/top2.png)';"
    onmouseout="this.style.background='url(source/top1.png)';">
</div>
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

	
		$query = "SELECT * FROM `hinabita` WHERE `sub`=1 AND `id`<1086 AND `id`>518 ORDER BY id" ;
  
		$result = mysql_query($query) or die ('Error in query');

		while($row = mysql_fetch_array($result)){
		$output = explode("/", $row['date_a']);
		$temp = new Message2015($output[0],$output[1]);
		
			array_push($this->messages,$temp);

				}
	$m = $this->messages;
 for ($i = 0, $nummess = count($this->messages); $i < $nummess; $i++) 

 {
	
    $m[$i]->show();

 }


		mysql_close($con);
			
	}
}
	echo "<hr>";
echo "<div class=\"div3\">";
	$mb = new MessageBoard();
	echo "</div>";
		echo "<hr>";
	echo "<br>";
?>

<div style="width: 101px; height: 37px;cursor: pointer; background: url(source/top1.png);"
    title="TOP"
    onClick="window.location='main.php';"
    onmouseover="this.style.background ='url(source/top2.png)';"
    onmouseout="this.style.background='url(source/top1.png)';">
</div>


</body>

</html>