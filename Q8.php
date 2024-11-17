<?php

$date = "Jan";
$time = strtotime($date);
$time = strtotime("-1 month", $time);
$prev_month = date("M", $time);
echo "This Month is: " . $date;
echo "<br>Previous Month is: " . $prev_month;

?>