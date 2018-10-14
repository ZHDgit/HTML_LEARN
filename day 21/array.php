<?php
header('content-type:text/html;charset=utf-8');
$arr=array('zh','hh','zz');
$arr1=Array('name'=>'上撒','age'=>'21','sex'=>'男');
for($i=0;$i<count($arr);$i++){
    echo $arr[$i].'--';
}
echo '<br>';
  foreach($arr1 as $key=>$value){
echo $key.'-'.$value.'<br>';
}
$a1=array(1,1,1,1,-8,55,12,12,5,5,6,48,6,132,11,3,2,1,1,3,4,8);
echo "array_count_value();统计每项的次数";
print_r(array_count_values($a1));
echo '<hr>';
echo '<hr>';
echo "array_push();追加到末尾";
echo '<hr>';
array_push($a1,100,200);
print_r($a1);
echo "sort排序";
echo '<hr>';
sort($a1,SORT_NUMERIC);
print_r($a1);
?>