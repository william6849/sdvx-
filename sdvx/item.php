<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
header("Content-Type:text/html; charset=utf-8")
?>


<?php

class Message{
	public $name;
	public $time;
	public $content;

	function __construct($n,$t,$c){
	$this->name = $n;
	$this->time = $t;
	$this->content = $c;
	}

	function show(){
	echo 'Name: '.$this->name.'<br>';
	
	echo 'Content: '.$this->content.'<br>';
	echo 'Time: '.$this->time.'<br>';
	echo '-----------------'.'<br>';
	}

}

class DB{
	var $database = null;
	
	function __construct(){
		$host = "..com";
		$account = "";
		$password = "";

		$this->database = mysql_connect($host,$account,$password);

		
		mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("",$this->database);
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