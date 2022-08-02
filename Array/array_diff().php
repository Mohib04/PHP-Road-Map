<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($a1);
print_r($a2);
print_r($a3);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$compare_values = array_diff( $a1, $a2, $a3 );
echo "<pre>";
print_r($compare_values);