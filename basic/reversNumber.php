<?php 
//reversing the number
$number = 12345;

$reversed = 0;

while($number > 1){

    $remainder = $number % 10;
    $reversed = ($reversed * 10) + $remainder;
    $number = $number / 10;
}

echo "The reversed number is " . $reversed;






?>