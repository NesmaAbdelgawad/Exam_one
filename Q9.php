<?php

$welcome = "Hello! Welcome to our course.";

if(preg_match("/Welcome/" , $welcome)){
    echo "Word exists";
}else {
    echo "Word doesn't exist";
}

?>