<?php

    
        for ($i=1; $i <= 10; $i++) { 
            echo "<div style='float:left; padding:20px;margin:20px;border-style:solid;'>";

            for ($j=1; $j <= 10; $j++) { 
                echo $i." x ".$j." = ".$i*$j."<br>";
            }

            echo "</div>";
        }
    

?>