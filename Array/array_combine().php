<?php
$anh = array('green', 'red', 'yellow');
$ray = array('avocado', 'apple', 'banana');

echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($anh);
print_r($ray);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$combine_ray_anh = array_combine( $ray, $anh );
echo "<pre>";
print_r($combine_ray_anh);