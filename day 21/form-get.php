<?php
    header('content-type:text/html;charset=utf-8');
    $name=$_GET['uesername'];
    $pass=$_GET['password'];
    $email=$_GET['email'];
    echo "我的名字：$name,我的密码：$pass,我的邮箱：$email";
?>