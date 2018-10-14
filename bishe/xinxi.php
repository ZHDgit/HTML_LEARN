<?php
header('content-type:text/html;charset=utf-8');
require "conn.php";
$arr=mysql_query("SELECT * FROM xinxi");
for($i=0;$i<mysql_num_rows($arr);$i++){
    $arr1[$i]=mysql_fetch_array($arr,MYSQL_ASSOC);
}
echo json_encode($arr1);

?>