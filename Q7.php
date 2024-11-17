<?php

$date = "28-8-2000";
$time = strtotime($date);
$time = strtotime("+1 month", $time);
$newDate = date("d-m-Y", $time);
echo "New date: " . $newDate;

?>