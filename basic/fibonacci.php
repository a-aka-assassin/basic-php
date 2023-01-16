<?php
$count = 0;
$num1 = 0;
$num2 = 1;

echo $num1 . "\n";
echo $num2. "\n";

while($count < 10){
    
    $num3 = $num1 + $num2;
    echo $num3. "\n";
    $num1 = $num2;
    $num2 = $num3;
    $count++;

}







?>