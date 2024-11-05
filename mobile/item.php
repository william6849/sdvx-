<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<style>
div { 
	margin-top:20px; 
margin-left:5%; 
margin-right:5%; 
margin-bottom:20px;
background:rgba(251,243,118,0.4);
    } 

.div2 { 
	margin-top:20px; 
margin-left:5%; 
margin-right:5%; 
margin-bottom:20px;
background:rgba(251,243,118,0.9);
    } 

.div3 { 
	margin-top:20px; 
margin-left:30%; 
margin-right:30%; 
margin-bottom:20px;
background:rgba(251,243,118,0.8);
    } 

</style>

</head>
<body>
<?php include_once("analyticstracking.php"); ?>
<?php
header("Content-Type:text/html; charset=big5")
?>


<?php
session_start();

		define("_WEB_ROOT_URL","http://{$_SERVER['SERVER_NAME']}/php_advance/");
		$myfiles_url=_WEB_ROOT_URL.'strpic/';
class Message2016{
	
	function __construct($t,$s){
		$this->name = $t;

	}

	function show(){
		$output = explode("/", $this->name);
		echo "<font size=\"5\">";
	echo "<a href=\"show2016.php?id=".$this->name."\">".$output[0]."月".$output[1]."日</a><br>";
echo "</font>";
	}

}

class Message2014{
	
	function __construct($t,$s){
		$this->name = $t;

	}

	function show(){
		$output = explode("/", $this->name);
		echo "<font size=\"5\">";
	echo "<a href=\"show2014.php?id=".$this->name."\">".$output[0]."月".$output[1]."日</a><br>";
echo "</font>";
	}

}

class Message2015{

	function __construct($t,$s){
		$this->mon = $t;
		$this->day = $s;
	}

	function show(){
		

	echo "<font size=\"5\">";
	echo "<a href=\"show2015.php?id=".$this->mon."/".$this->day."\">".$this->mon."月".$this->day."日</a><br>";
	echo "</font>";
	}

}

class MessageCoCo{
	public $name;

	function __construct($t,$s){
		$this->name = $t;

	}

	function show(){
		$output = explode("/", $this->name);
		echo "<font size=\"5\">";
	echo "<a href=\"show_coconatsu.php?id=".$this->name."\">".$output[0]."月".$output[1]."日</a><br>";
	echo "</font>";
	}

}

class MessageCoCo2016{
	public $name;

	function __construct($t,$s){
		$this->name = $t;

	}

	function show(){
		$output = explode("/", $this->name);
		echo "<font size=\"5\">";
	echo "<a href=\"show_coconatsu2016.php?id=".$this->name."\">".$output[0]."月".$output[1]."日</a><br>";
	echo "</font>";
	}

}

class Message2014del{

	function __construct($t,$s,$c,$p,$n){
		$this->name = $t;
		$this->sub = $s;
		$this->cont=$c;
		$this->pic=$p;	
		$this->nzm=$n;
	}

	function show(){

	if($this->pic!=""){
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
		echo "<img name=\"latestnew\" src=\"/strpic/".$this->pic."\">"."<br><br>";

	
	}else{
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
	}
	echo "</div>";
	if ($_SESSION['user']==$this->nzm)
{
			echo "<form action='del2014.php' method='POST' >";
		echo "<input type=\"hidden\" name=\"del\" value=\"".$this->name."\">";
		echo "<input type=\"hidden\" name=\"del2\" value=\"".$this->sub."\">";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
}
			echo "<br><br><br>";

	}

}


class Message2015del{

	function __construct($t,$s,$c,$p,$n){
		$this->name = $t;
		$this->sub = $s;
		$this->cont=$c;
		$this->pic=$p;
		$this->nzm=$n;
	}

	function show(){

	if($this->pic!=""){
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
		echo "<img name=\"latestnew\" src=\"/strpic/".$this->pic."\">"."<br><br>";

	
	}else{
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
	}echo "</div>";

if ($_SESSION['user']==$this->nzm)
{
			echo "<form action='del2015.php' method='POST' >";
		echo "<input type=\"hidden\" name=\"del\" value=\"".$this->name."\">";
		echo "<input type=\"hidden\" name=\"del2\" value=\"".$this->sub."\">";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
}
			echo "<br><br><br>";

	}

}

class Messagecocodel{

	function __construct($t,$s,$c,$p,$n){
		$this->name = $t;
		$this->sub = $s;
		$this->cont=$c;
		$this->pic=$p;	
		$this->nzm=$n;
	}

	function show(){
	
	if($this->pic!=""){
		echo "<div class=\"div2\">";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
		echo "<img name=\"latestnew\" src=\"/strpic/".$this->pic."\">"."<br><br>";

	
	}else{
		echo "<div class=\"div2\">";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
	}echo "</div>";
	if ($_SESSION['user']==$this->nzm)
{
			echo "<form action='delcoconatsu.php' method='POST' >";
		echo "<input type=\"hidden\" name=\"del\" value=\"".$this->name."\">";
		echo "<input type=\"hidden\" name=\"del2\" value=\"".$this->sub."\">";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
}
			echo "<br><br><br>";

	}

}

class Messagecoco2016del{

	function __construct($t,$s,$c,$p,$n){
		$this->name = $t;
		$this->sub = $s;
		$this->cont=$c;
		$this->pic=$p;	
		$this->nzm=$n;
	}

	function show(){
	
	if($this->pic!=""){
		echo "<div class=\"div2\">";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
		echo "<img name=\"latestnew\" src=\"/strpic/".$this->pic."\">"."<br><br>";

	
	}else{
		echo "<div class=\"div2\">";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
	}echo "</div>";
	if ($_SESSION['user']==$this->nzm)
{
			echo "<form action='delcoconatsu2016.php' method='POST' >";
		echo "<input type=\"hidden\" name=\"del\" value=\"".$this->name."\">";
		echo "<input type=\"hidden\" name=\"del2\" value=\"".$this->sub."\">";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
}
			echo "<br><br><br>";

	}

}

class Message2016del{

	function __construct($t,$s,$c,$p,$n){
		$this->name = $t;
		$this->sub = $s;
		$this->cont=$c;
		$this->pic=$p;	
		$this->nzm=$n;
	}

	function show(){

	if($this->pic!=""){
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
		echo "<img name=\"latestnew\" src=\"/strpic/".$this->pic."\">"."<br><br>";

	
	}else{
		echo "<div>";
		echo "<br>";
		$output = explode("/", $this->name);
		echo $output[0]."月".$output[1]."日"."  #".$this->sub."<br>";
		echo "<font size=\"6\">";
		echo $this->cont;
		echo "</font>";
		echo "<br>";
	}
	echo "</div>";
	if ($_SESSION['user']==$this->nzm)
{
			echo "<form action='del2016.php' method='POST' >";
		echo "<input type=\"hidden\" name=\"del\" value=\"".$this->name."\">";
		echo "<input type=\"hidden\" name=\"del2\" value=\"".$this->sub."\">";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
}
			echo "<br><br><br>";

	}

}

//	$m = new Message('NZM',"2014/12/6",'?桧佋');
	//$m -> show();
class DB{
	var $database = null;
	
	function __construct(){
		$host = "sql100.byethost16.com";
		$account = "b16_16538614";
		$password = "zxc35491100";

		$this->database = mysql_connect($host,$account,$password);

		
		mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("b16_16538614_loginsys",$this->database);
		//if($rs){echo "98";}
	}
	function __destruct(){
		mysql_close($this->database);
	}
}
//$db = new DB;







?>



</body>
</html>