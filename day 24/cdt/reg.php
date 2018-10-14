<?php
header('content-type:text/html;sharset=utf-8');
require "conn.php";
if(isset($_POST['name'])||isset($_POST['submit'])){
	$name=@$_POST['name'];
}else{
	exit('非法操作');
}
$result=mysql_query("select * from reg where username='$name'");
if(mysql_fetch_array($result)){
	echo true;
}else{
	echo false;
}
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$pass=md5($_POST['pass']);
	$email=$_POST['email'];
	mysql_query("insert reg value(null,'$username','$pass','$email')");
	header('location:login.html');
}
 ?>

