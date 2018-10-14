<?php
$sid=$_GET['sid'];
require "conn.php";
mysql_query("delete from taobaopic where sid=$sid");

?>
