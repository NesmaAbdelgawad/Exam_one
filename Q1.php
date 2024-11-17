<?php
//  Question1
echo "<table style:border=1px;>";

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        if (($row + $col) % 2 == 0){
            echo "<td style='width:25px; height:25px; background-color:black;'></td>";
        }else{
            echo "<td style='width:25px; height:25px; background-color:white;'></td>";

        }
    }
    echo "</tr>";
}

echo "</table>";
?>