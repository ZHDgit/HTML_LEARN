<?php
header('content-type:text/html;charset=utf-8');
require "conn.php";
$name=$_POST['id'];
$pass=md5($_POST['pass']);
	$result=mysql_query("select * from list where id='$name' and pass='$pass'");
	if(mysql_fetch_array($result)){
		echo true;
	}else{
		echo false;
	}
?>