<?php
header('content-type:text/html;charset=utf-8');
$arr=array(
    array('title'=>'买买买！国庆前4天游客5.02亿人次 花了4169亿元','date'=>'2018-10-4'),
    array('title'=>'美国国务卿蓬佩奥将访华 就中美关系等交换意见','date'=>'2018-10-4'),
    array('title'=>'10月5日北京高速路将迎拥堵高峰 部分路段全天拥堵','date'=>'2018-10-4'),
    array('title'=>'安全第一！多个热门景区应对“人海”模式有妙招','date'=>'2018-10-4'),
    array('title'=>'李明博涉贪案5日将一审宣判 律师：李明博将缺席','date'=>'2018-10-4'),
    array('title'=>'重庆高空项目安全绳突然脱落 系工作人111155员操作不当','date'=>'2018-10-4'),
);
echo json_encode($arr);

?>