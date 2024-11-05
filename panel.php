<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>日向美後台</title>



<style fprolloverstyle>A:hover {color: #FF00FF}
</style>

  

</head>


<body>

<?php include_once("analyticstracking.php"); ?>


<?php
session_start();//檢查有無seesion['user']
	
if (!$_SESSION['user'])
{
	header("Refresh: 0; url=login.php");
exit(1);
}
else
{
	echo "<body align=center background=\"source/bg00.gif\">";
	include_once('item.php');
header("Content-Type:text/html; charset=big5");

class MessageBoard extends DB{

	var $messages=array();
	function __construct(){
parent::__construct();
		$this->load();
	}	

	}
	echo "<br><a href=\"/2014.php\">2014</a>"."<br>";
	echo "<a href=\"/2015.php\">2015</a>"."<br>";
	echo "<a href=\"/coconatsu.php\">coconatsu</a>"."<br>";





echo "<br>"."hinabita of summit";
		echo "<form action='hinabita_submit.php' method='POST' onSubmit='return  check_filed(this)' enctype='multipart/form-data'>";
		echo "time: "."<input type='text' name='time'>"."<br>";
		echo "sub: "."<input type='text' name='sub'>"."<br>";
		echo "content: <br> "."<textarea cols=\"50\" rows=\"6\" name=\"content\"></textarea>"."<br>";

		echo "<input type='file' name='file5'>"."請傳.jpg或.png"."<br>";
		//echo "pic: "."<input type='text' name='pic'>"."<br>";
		echo "<input type='submit'>";
		echo "</form>";
		//echo $_SERVER['DOCUMENT_ROOT'];
echo "<br><br><br><br>";
echo "<br>"."coconatsu of summit";
		echo "<form action='coconatsu_submit.php' method='POST' onSubmit='return  check_filed(this)' enctype='multipart/form-data'>";
		echo "time: "."<input type='text' name='time'>"."<br>";
		echo "sub: "."<input type='text' name='sub'>"."<br>";
		echo "content: <br> "."<textarea cols=\"50\" rows=\"6\" name=\"content\"></textarea>"."<br>";

		echo "<input type='file' name='file5'>"."請傳.jpg或.png"."<br>";
		//echo "pic: "."<input type='text' name='pic'>"."<br>";
		echo "<input type='submit'>";
		echo "</form>";


$login_user = $_SESSION['user'];
//如果有就顯示歡迎user
echo "歡迎".$login_user."進入本系統<br><hr>";

echo "<INPUT id=\"b1\" TYPE=\"button\" VALUE=\"登出\" onclick=\"window.open('logout.php','_self');\">";

echo "<br><br> <a href=\"sdvx/index.html\">嚎洨側</a>";
echo "<br><br> <a href=\"http://114.35.104.151:14149/\">87</a>";
echo "<br>";
echo "<br><br> <a href=\"http://114.35.104.151:14147/\">後台</a>";
//如果沒有就顯示登入按鈕,連結login.php 
//echo "<INPUT id=\"b1\" TYPE=\"button\" VALUE=\"登入\" onclick=\"window.open('login.php','_self');\">";

echo "<img src=\"gogo/1.jpg\" alt=\"2014！\" border=\"0\">";
echo 	"<img src=\"gogo/2.jpg\"  border=\"0\">";
echo	"<img src=\"gogo/3.jpg\" border=\"0\">";
echo	"<img src=\"gogo/4.jpg\"  border=\"0\">";

}





?>
<hr>



</body>

</html>