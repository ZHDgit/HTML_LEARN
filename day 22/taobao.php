<?php
header('content-type:text/html;charset=utf-8');
$conn=@mysql_connect('localhost','root','');
if(!$conn){
    die('数据库连接失败：'.mysql_error());
}
mysql_select_db('taobao');
mysql_query('SET NAMES UTF8');
$ayy=mysql_query("SELECT * FROM taobaopic");
$ayy1=mysql_fetch_array($ayy,MYSQL_ASSOC);
// echo json_encode($ayy1);
mysql_query("INSERT taobaopic VALUES(4,'https://img.alicdn.com/bao/uploaded/i2/2151885546/O1CN011qq72gLimfiOKhk_!!2151885546-0-item_pic.jpg_200x200q90.jpg_.webp','ASSC Anti Social Social Club 男女红白长袖教练夹克外套 AST401',44.44,56),(5,'https://img.alicdn.com/bao/uploaded/i2/TB1dB_ikTnI8KJjy0FfYXIdoVXa_M2.SS2_200x200q90.jpg_.webp','长袖鱼尾晚礼服2018新款春季优雅长款高贵长裙公司年会显瘦主持人',128,101)");
mysql_query("UPDATE taobaopic SET price=100 WHERE sid%2=0");
mysql_query("DELETE FROM taobaopic WHERE sid=1");
mysql_query("INSERT taobaopic VALUES(1,'https://img.alicdn.com/bao/uploaded/i3/1095389647/TB2jCwoXIeGJuJjSZFDXXbIzXXa_!!1095389647.jpg_200x200q90.jpg_.webp','敬酒服新娘2018新款中长款结婚宴会晚礼服女显瘦红色回门连衣裙夏',466,89)");
?>