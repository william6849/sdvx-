<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>留言板</title>
</head>
<body>




<?php
header("Content-Type:text/html; charset=big5");
include_once('item.php');

class MessageBoard extends DB{
	var $messages=array();

	function __construct(){
		parent::__construct();
		
		$this->loadData();
		$this->showAllMessage();
		$this->showForm();
	}


	
	
	
	function loadData(){
		$query = "SELECT * FROM data ORDER by id DESC";
		$result = mysql_query($query) or die("sdfsdf");

		while($row = mysql_fetch_array($result)){
		$temp = new Message($row['a_name'],$row['time'],$row['a_data']);
		
		array_push($this->messages,$temp);
		}
	
	}
	
	function showAllMessage(){
		foreach($this->messages as $m)
		$m->show();
	}
	
	function showForm(){
		echo "<form action='get.php' method='POST' onSubmit='return  check_filed(this)'>";
		echo "Name: "."<input type='text' name='username'>"."<br>";
		echo "content: "."<input type='text' name='content'>";
		echo "<input type='submit'>";
		echo "</form>";

	echo "<Script Language='JavaScript'>
	function check_filed(form)
	{

		if(form.username.value=='1'||form.content.value=='1')
	{
		alert('再1我就揍你'); 
		return false;
	}
		if(form.username.value==''&&form.content.value=='')
	{
		alert('請填東西'); 
		return false;
	}
	if(form.username.value=='')
	{
		alert('請填姓名'); 
		return false;
	}
	if(form.content.value=='')
	{
		alert('請填內容'); 
		return false;
	}
	} 
	</script>";

	}


	



}

$mb = new MessageBoard();



?>


</body>
</html>