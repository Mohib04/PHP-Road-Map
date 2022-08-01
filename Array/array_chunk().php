<?php

$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);

echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($fruits);
echo "<hr>";


echo "<h2>After Apply Function</h2>";
$split_fruits = array_chunk($fruits, 3);
echo "<pre>";
print_r($split_fruits);
