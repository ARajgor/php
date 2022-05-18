<?php
$numbers = array(1, 6, 9, 45, 23, 4, 6, 2, 22, 11);
sort($numbers);
echo "Sorted array:    ";
print_r($numbers);
echo '<br>';
echo '<br>';

echo "Reverse array:   ";
rsort($numbers);
print_r($numbers);
echo '<br>';
echo '<br>';

$per = array("Ayush"=>"92", "Krish"=>"85", "Nirav"=>"80");

echo "according to value sort array:   ";
asort($per);
print_r($per);
echo '<br>';
echo '<br>';

echo "according to key sort array:   ";
ksort($per);
print_r($per);
echo '<br>';
echo '<br>';
echo '<br>';

$img = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");
echo "Normal Array:   ";
sort($img);
print_r($img);
echo '<br>';
echo '<br>';

echo "Natural(NAT) sort array:   ";
natsort($img);
print_r($img);
echo '<br>';
echo '<br>';
