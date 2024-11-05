<?php include_once("analyticstracking.php"); ?><?php
session_start();//ÀË¬d¦³µLseesion['user']

if ($_SESSION['user'])
{

		$del = $_POST['del'];
		$del2 = $_POST['del2'];
			if($del){
			$con = mysql_connect("sql100.byethost16.com", "b16_16538614", "zxc35491100");
			mysql_query("SET NAMES 'UTF8'");
			mysql_select_db("b16_16538614_loginsys",$con);
			$query = "DELETE FROM `hinabita` WHERE `id`<519 AND `sub`=\"$del2\" AND `date_a`=\"$del\"";
			$result = mysql_query($query) or die ('Error in query');
			header('Location:main.php');
			}else{header('Location:main.php');}
}
else
{

header("Refresh: 0; url=main.php");
exit(1);

}

	?>