<?php
header('content-type:text/html;charset=utf-8');
$conn=@mysql_connect('localhost','root','');
if(!$conn){
    die('数据库连接失败：'.mysql_error());
}
mysql_select_db('taobao');
mysql_query('SET NAMES UTF8');
$arr=mysql_query("SELECT * FROM taobaopic");
for($i=0;$i<mysql_num_rows($arr);$i++){
    $arr1[$i]=mysql_fetch_array($arr,MYSQL_ASSOC);
}
echo json_encode($arr1);

?>