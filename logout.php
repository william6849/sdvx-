<?php session_start(); //本登錄網頁一進來,要先把seesion_start()寫上來?>
<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META HTTP-EQUIV="refresh" CONTENT="0;URL=login.php"> 

<title>logout</title>



<style fprolloverstyle>A:hover {color: #FF00FF}
</style>


<STYLE> 
<!-- A{text-decoration:none} --> 
</STYLE>
</head>

<body align=center>
<?php include_once("analyticstracking.php"); ?>
<hr>


<?php
session_start();//設定$_SESSION['number']=10,開啟另一網頁時,理應可以取出$_SESSION['number']=10
$_SESSION['user']="";
echo "登出中";

?>


<hr>

</body>

</html>