<?php
require "conn.php";
$title1=$_GET['title2'];
$question1=$_GET['question2'];
$solve1=$_GET['solve2'];
$dataindex=$_GET['dataindex'];
mysql_query("update information set title='$title1',question='$question1',solve='$solve1',time=now() where sid='$dataindex' ");

?>