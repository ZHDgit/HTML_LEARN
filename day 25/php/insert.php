<?php
require "conn.php";
$title=$_GET['title'];
$question=$_GET['question'];
$solve=$_GET['solve'];
mysql_query("insert information values(null,'$title','$question','$solve',now())");
?>