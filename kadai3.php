<?php

//課題1

function double($numder){
    $result = $numder * 2;
    return $result;
}

echo double(3)."\n";

//課題2

function f($a,$b){
    $result = $a + $b;
    return $result;
}

echo f(5,9)."\n";

//課題3

$arr = array(1, 3, 5 ,7, 9) ;
echo array_product($arr)."\n";

//課題4

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 
 echo max_array($arr)."\n";
 
 //課題5
 
 //strip_tags
 
 $str = "<h1>HTMLのタグ</h1>"."<p>取り除く</p>";
 echo strip_tags($str)."\n";
 
 //array_push
 
 $array = array("aaaa","bbbb");
 array_push($array,"cccc","dddd");
 print_r($array)."\n";
 
 //array_merge
 
 $items1 = ["item1","item2","item3"];
 $items2 = ["item4","item5"];
 $items3 = ["item6","item7","item7"];
 
 $items_merge = array_merge($items1,$items2,$items3);
 
 print_r($items_merge)."\n";
 
 //time.mktime
 date_default_timezone_set('Asia/Tokyo');
 $timestamp = time();
 echo $timestamp."\n";
 
 $timestamp_2 = mktime(0,0,0,4,20,2020);
 echo $timestamp_2."\n";
 
 //date
 $timestamp_3 = time();
 echo date("Y/m/d",$timestamp_3)."\n";