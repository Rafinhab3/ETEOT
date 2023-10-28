<?php
    echo "<table>";
    for ($i=0; $i <= 10; $i++) {
        echo "<tr>";
        if($i == 0){    
            for ($c=0; $c <= 10 ; $c++) { 
                echo "<td>".$c."</td>";
            }
        }else{
            echo "<td>$i</td>";
            for ($j=1; $j <= 10 ; $j++) { 
                echo "<td>X</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>