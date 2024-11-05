<?php session_start(); ?>
<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META HTTP-EQUIV="refresh" CONTENT="0;URL=panel.php"> 

<title>session</title>



<style fprolloverstyle>A:hover {color: #FF00FF}
</style>


<STYLE> 
<!-- A{text-decoration:none} --> 
</STYLE>

</head>

<body>

<?php include_once("analyticstracking.php"); ?>

<?php

if (!user_checkin())
{
echo "登入失敗....";
header("Refresh:2; url=login.php");
exit(1);
}
else
{
	
}




function user_checkin()
{
$user = $_POST['user'];
$password = $_POST['password'];

$login_result = 0;
$con = mysql_connect("www.com", "acc", "pass");
    mysql_select_db("",$con);



 $query = "SELECT userid, MD5(UNIX_TIMESTAMP() + userid + RAND(UNIX_TIMESTAMP()))
        guid FROM users WHERE `user` = \"$user\" AND `password`= \"$password\"";
   mysql_query("SET NAMES UTF8");     
    $result = mysql_query($query, $con) or die ('Error in query search');
    

    if ($result)
    {
        $row = mysql_fetch_row($result);
        // Update the user record
        $query = "UPDATE users SET guid = \"$row[1]\" WHERE userid = \"$row[0]\"";
		mysql_query($query, $con) or die('Error in query');

		session_start();
		$_SESSION['user']=$row[1];
		$login_result = 1; //登入成功	$login_result設為1
            }

/*
$q1="SELECT * ";
$q2="FROM `users` ";
$q3="WHERE `user` = \"$a\" AND `password`= \"$b\"" ;



$query = $q1.$q2.$q3;

//echo $query; //test point

mysql_query("SET NAMES UTF8");
$result = mysql_query($query);

$check_result = 0; //預設$check_result = 0;如果有找到user=$a的資料，則設為1
if(mysql_fetch_array($result))
{

//$check_result = 1; 代表有找到user=$a的資料
$check_result = 1;
} 
*/
mysql_close($con); //關閉mysql 

return($login_result); //把$check_result回傳給login_member()用

}

?>


<br><br><br><br>

</body>

</html>