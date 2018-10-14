<?php require "conn.php";
$updataid=$_GET['updataid'];
$result=mysql_query("select * from information where sid=$updataid");
$data=mysql_fetch_array($result);
echo json_encode($data);

?>
