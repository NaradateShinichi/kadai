<?php
echo 'hello php!'."\n";

$arr = array(1, 3, 5 ,7, 9) ;
function mp($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}

echo mp($arr)."\n";