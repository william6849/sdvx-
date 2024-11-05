<?php include_once("analyticstracking.php"); ?>
		<?php


session_start();

if ($_SESSION['user'])
{
		$host = "..com";
		$account = "";
		$password = "";


		$database = mysql_connect($host,$account,$password);
		

		mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("",$database);
		
if($_FILES['file5']['tmp_name']!=''){
       $na = uniqid(rand()).".jpg";
        if(move_uploaded_file($_FILES['file5']['tmp_name'],'/home/vol5_5/byethost16.com/b16_16538614/htdocs/strpic/'.$na)){
        }else{die("die");
                  }
   
}
		$result = nl2br($_POST["content"]);

	saveData($_POST['time'],$_POST['sub'],$result,$na);
				
	
	mysql_close($database);

	header('Location:main.php');
   
}else{header("Refresh: 0; url=login.php");
exit(1);}

	function saveData($u,$t,$c,$p){
		$query = "INSERT INTO `hinabita`(`date_a`,`sub`,`context`,`pic`) VALUE ('".$u."','".$t."','".$c."','".$p."');";
		mysql_query($query);
	}
	?>

