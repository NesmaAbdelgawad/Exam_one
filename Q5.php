<?php


$array = [1,2,3,4,5,6,7,8,9,10];
foreach($array as $i){
    if($i % 2 != 0){
        $new_array[] = $i;
    }
}
echo "Array after filtering and deleting even numbers: " . implode(' ' , $new_array);




?>