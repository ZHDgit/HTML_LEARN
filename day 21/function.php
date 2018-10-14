<?php
$GLOBALS ['num']=100;
function hh(){
    $GLOBALS ['num1']=1000;
    echo $GLOBALS ['num'];
}
hh();
echo '<hr>';
echo $GLOBALS ['num1'];

?>