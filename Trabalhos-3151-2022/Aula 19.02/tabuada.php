<?php
    $val = $_POST["val"];

    for ($i=1; $i <= 10; $i++) { 
        echo $val." x ".$i." = ".$val * $i."<br>";
    }
?>