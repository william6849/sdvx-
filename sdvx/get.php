	<?php
		$host = "com";
		$account = "";
		$password = "";


		$database = mysql_connect($host,$account,$password);

		
		mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("b16_16538614_loginsys",$database);
		
		if($_POST['username'==0]){echo "�п�J�m�W";}
		saveData($_POST['username'],date("Y-m-d h:i:s",time()),$_POST['content']);
				
	function saveData($u, $t, $c){
		$query = "INSERT INTO `data`(`a_name`,`a_data`,`time`) VALUE ('".$u."','".$c."','".$t."');";
		mysql_query($query);
	}
	header('Location: messageBoard.php');
    exit;

	?>