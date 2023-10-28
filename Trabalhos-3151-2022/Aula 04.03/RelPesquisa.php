<?php 
$nome = $_POST["nome"];
$grau = $_POST["grau"];
$hobbies = $_POST["check"];

if(isset($_POST["sexo"])){
    if($_POST["sexo"] == "M"){
        $sexo = "Masculino";
    }else{
        $sexo = "Feminino";
    }
}else{
    $sexo = "Opção não foi marcada!";
}

echo "Nome: ".$nome."<br>";
echo "Sexo: ".$sexo."<br>";
echo "Grau de Instrução: ".$grau."<br>";
echo "Hobbies:"."<br>";

foreach ($_POST["check"] as $value) {
    echo "* ".$value."<br>";
}
?>