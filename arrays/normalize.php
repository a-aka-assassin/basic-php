<?php 
$x = array(1, 2, 3,7, 4, 5);

var_dump($x);

unset($x[3]);

var_dump($x);

//Normalizing

$x = array_values($x);

var_dump($x);






?>