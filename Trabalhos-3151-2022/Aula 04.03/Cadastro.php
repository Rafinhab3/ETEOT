<?php
$nome = $_POST["nome"];
$cpf = $_POST["CPF"];
$nomep = $_POST["NomeP"];
$nomem = $_POST["NomeM"];
$nasc = $_POST["nasc"];
$datnasc = date('d/m/y',strtotime($nasc));
$escolaridade = $_POST["escolaridade"];
$nacionalidade = $_POST["nacionalidade"];

if(isset($_POST["sexo"])){
    if($_POST["sexo"] == "M"){
        $sexo = "Masculino";
    }else{
        $sexo = "Feminino";
    }
}else{
    $sexo = "Opção não foi marcada!";
}
echo "<table>";
echo "<tr><td>Nome: </td><td>".$nome."</td></tr>";
echo "<tr><td>CPF: </td><td>".$cpf."</td></tr>";
echo "<tr><td>Nome do pai: </td><td>".$nomep."</td></tr>";
echo "<tr><td>Nome da mãe: </td><td>".$nomem."</td></tr>";
echo "<tr><td>Data de nascimento: </td><td>".$datnasc."</td></tr>";
echo "<tr><td>Sexo: </td><td>".$sexo."</td></tr>";
echo "<tr><td>Escolaridade: </td><td>".$escolaridade."</td></tr>";
echo "<tr><td>Nacionalidade: </td><td>".$nacionalidade."</td></tr>";
echo "<tr><td>Interesses:<td></tr>";

foreach ($_POST["check"] as $value) {
    echo "<tr><td>*".$value."</td></tr>";
}
echo "</table>"
?>