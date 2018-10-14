<?php
header('content-type:text/html;charset=utf-8');
$city=$_GET['city'];
$tianqi=file_get_contents("http://t.weather.sojson.com/api/weather/city/$city");
echo $tianqi;
 ?>