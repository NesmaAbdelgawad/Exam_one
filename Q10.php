<?php

function primeNumber($x){
    if ($x <= 1 ){
        return "Number ".$x . " is not a Prime Number";
    }
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return "Number $x is NOT a Prime Number";
        }
    }
    return "Number $x is a Prime Number";
}
echo primeNumber(7);

?>