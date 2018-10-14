<?php
    header('content-type:text/html;charset=utf-8');
    $name=$_POST['uesername'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    echo "我的名字：$name,我的密码：$pass,我的邮箱：$email";
?>