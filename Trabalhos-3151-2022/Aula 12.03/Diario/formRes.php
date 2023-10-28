<?php 

for ($i=0; $i < 100;  $i++) {
    if(isset($_POST['presenca'.$i])){
    $n = $i + 1;
    echo $n." - ".$_POST['presenca'.$i]."<br>";
    }else{
        return false;
    }
}


/*$cont = 1;

foreach($_POST['aluno'] as $value){
    if($value == "P"){
        echo $cont++." - PRESENTE</br>";
    }else{
        echo $cont++." - FALTOU</br>";
    }
} */
?>