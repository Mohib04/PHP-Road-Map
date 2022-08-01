<?php

$anh = array(
    "Main"          => "ANH Enterprise Limited",
    "Toiletries"    => "RAY Bangladesh"
);
echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($anh);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$change_key_case = array_change_key_case( $anh, CASE_UPPER );
echo "<pre>";
print_r($change_key_case);