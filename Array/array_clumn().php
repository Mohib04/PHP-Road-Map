<?php

$anh = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );


echo "<h2>Befor Apply Function</h2>";
echo "<pre>";
print_r($anh);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$get_last_name_column = array_column( $anh, 'last_name', 'id' );
echo "<pre>";
print_r($get_last_name_column);
echo "<hr>";

echo "<h2>After Apply Function</h2>";
$get_first_name_column = array_column( $anh, 'first_name', 'id' );
echo "<pre>";
print_r($get_first_name_column);