
<?php

$array=[10,30,20];
if($array[0] > $array[1]){
    if($array[0] > $array[2]){
        echo "Max Number is " . $array[0];
    }else{
        echo "Max Number is " . $array[2];
    }
}else if ($array[1] > $array[2]){
    echo "Max Number is " . $array[1];
}else {
    echo "Max Number is " . $array[2];
}

?>