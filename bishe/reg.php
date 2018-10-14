<?php
header('content-type:text/html;sharset=utf-8');
require "conn.php";
if(isset($_POST['id'])||isset($_POST['submit'])){
	$id=@$_POST['id'];
}else{
	exit('非法操作');
}
$result=mysql_query("select * from list where id='$id'");
if(mysql_fetch_array($result)){
	echo true;
}else{
	echo false;
}
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$username=$_POST['username'];
	$pass=md5($_POST['pass']);
	mysql_query("insert list value(null,'$id','$username','$pass')");
	header('location:zhuye.html');
}
 ?>

