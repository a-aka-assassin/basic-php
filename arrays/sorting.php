<?php

//Sorting array to different styles.
$toBeSorted = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

//Ascending sort by value
echo "Ascending sort by value: \n";
$ascSort = $toBeSorted;
asort($ascSort);
foreach($ascSort as $key => $value){
    echo "The value of " . $key . " is " . $value . "\n";
}


//descending sort by value
echo "Descending sort by value: \n";
$dscSort = $toBeSorted;
arsort($dscSort);

foreach($dscSort as $key => $value){
    echo "The value of ". $key . " is ". $value . "\n";
}

//Ascending order by key
echo "Ascending sort by Key: \n";
$ascKey = $toBeSorted;
ksort($ascKey);

foreach($ascKey as $key => $value){
    echo " The value of " . $key . " is " . $value . "\n";
}


//Descneding order by Key
echo "Descending sort by Key: \n";
$dscKey = $toBeSorted;
krsort($dscKey);

foreach($dscKey as $key => $value){
    echo "The value " . $key . " is " . $value . "\n";
}

?>