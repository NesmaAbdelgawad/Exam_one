<?php
$array = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
for($i = 0 ; $i < count($array) ; $i++){
        $sum += $array[$i];
    }
$average = $sum / count($array) ; 
echo "Average = " . $average;

?>