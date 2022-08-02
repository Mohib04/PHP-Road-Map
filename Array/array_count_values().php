<?php

$anh = array("A","Cat","Dog","A","Dog");
echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($anh);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$count_array_value = array_count_values( $anh );
echo "<pre>";
print_r($count_array_value);