<?php
    echo "<table border='1' style='text-align:center;'>";
    for ($i=0; $i <= 10; $i++) {
        echo "<tr>";
        if($i == 0){    
            for ($l=0; $l <= 10 ; $l++) { 
                echo "<td>".$l."</td>";
            }
        }else{
            echo "<td>$i</td>";
            for ($j=1; $j <= 10 ; $j++) { 
                if($j == 5 && $i == 5){
                    echo "<td bgcolor='yellow'>0</td>";
                }
                else if(($j == 5) || ($i == 5)){ //dependendo da versão(versão antiga) precisa colocar () em cada condição
                    echo "<td>X</td>";
                }
                else{
                    echo "<td>&nbsp;</td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>