<?php
$array =[2,4,3,1,6,7,5,8,0,9] ;
for ($a = 0; $a < count($array); $a++) {
    for ($b = $a + 1; $b < count($array); $b++) {
        if ($array[$a] > $array[$b]) {
            $temp = $array[$a];
            $array[$a] = $array[$b];
            $array[$b] = $temp;
        }
    }
}
echo "Array in ascending order: " . implode(" ", $array);
echo '<br>';

for ($a = 0; $a < count($array); $a++) {
    for ($b = $a + 1; $b < count($array); $b++) {
        if ($array[$a] < $array[$b]) {
            $temp = $array[$a];
            $array[$a] = $array[$b];
            $array[$b] = $temp;
        }
    }
}
echo "Array in descending order: " . implode(" ", $array);

?>