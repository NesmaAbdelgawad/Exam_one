<?php
for($i = 1 ; $i <= 5 ; $i++){
    if($i %2 != 0){
        echo str_repeat("*",$i);
        echo "<br>";
    }
}
for($i = 4 ; $i >= 1 ; $i--){
    if($i %2 != 0){
        echo str_repeat("*",$i);
        echo "<br>";
    }
}
?>