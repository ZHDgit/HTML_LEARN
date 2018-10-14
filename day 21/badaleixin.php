<?php
header('content-type:text/html;charset=utf-8');
 //整形
 $a1=3445;
 echo gettype($a1);//integer
 echo '<hr>';
 //double
 $a2=3.1415;
 echo gettype($a2);
 echo '<hr>';
 //srting
 $a3='zhanghong';
 $a4='hh';
 echo "我的名字是：$a3";//双引号里可放变量
 echo '<hr>';
 echo $a3.$a4.',点是拼接';
 echo '<hr>';
 $a5=false;
 $a6=true;
 echo 'false输出为空啥都没有';
 echo '<hr>';
 echo ($a5);
 echo '<hr>';
 echo ($a6);
 echo '<hr>';
 //array数组
 $a7=array(1,2,34,5);
 $a8=array(1,2,3,4,5,3=>'a',8=>9,9);
 print_r ($a8);
 echo '<hr>';
 //object
 class person{
     public $name='woshinibaba';
 }
 $p1=new person();
 echo $p1->name;
 echo '<hr>';
//两种特殊类型1.resource 2.NULL
$re=fopen("resource.txt","r");//打开这个文件
$sc=fread($re,30);//显示文件中的前30个字符
echo $sc;
echo '<hr>';
//NULL
$b;
echo gettype($b);
echo '<hr>';
echo @gettype($b);//忽略该警告
$a=NULL;
echo gettype($a);




?>