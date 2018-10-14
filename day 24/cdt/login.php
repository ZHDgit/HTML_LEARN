<?php
	require "conn.php";
	$name=$_POST['name'];
	$pass=md5($_POST['pass']);
	$result=mysql_query("select * from reg where username='$name' and pass='$pass'");
	if(mysql_fetch_array($result)){
		echo true;
	}else{
		echo false;
	}

 ?>