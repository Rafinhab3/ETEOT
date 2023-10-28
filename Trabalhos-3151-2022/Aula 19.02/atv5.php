<?php
    $cont = 1;
    echo "<table>";
    for ($i=1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j=1; $j <= 10 ; $j++) { 
            echo "<td>".$cont++."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>