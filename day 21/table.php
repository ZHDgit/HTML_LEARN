<?php 
header('content-type:text/html;charset=utf-8');
function createtable($rows,$cols){//变量都要添加$符号
    $str='<table border="1">';
    for($i=1;$i<=$rows;$i++){
        $str.='<tr>';
        for($j=1;$j<=$cols;$j++){
            if($j==$cols){
                $str.='<td><a href="#">删除</a></td>'; 
            }
            else{
                $str.='<td>111111</td>';
            }
        }
        $str.='</tr>';
    }
    $str.='</table>';
    return $str;
}
echo createtable(5,5);
?>