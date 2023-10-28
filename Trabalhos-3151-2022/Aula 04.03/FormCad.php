<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            height:222px;
            margin:auto;
            margin-top:100px;
        }
    </style>
</head>
<body>
        <form action="cadastro.php" method="post">
            <table>
                <tr>
                    <td><label for="nome">Nome: </label></td>
                    <td><input type="text" name="nome" id="nome"></td>
                </tr>

                <tr>
                    <td><label for="CPF">CPF: </label></td>
                    <td><input type="text" name="CPF" id="CPF"></td>
                </tr>

                <tr>
                    <td><label for="NomeP">Nome do Pai: </label></td>
                    <td><input type="text" name="NomeP" id="NomeP"></td>
                </tr>

                <tr>
                    <td><label for="NomeM">Nome da Mãe: </label></td>
                    <td><input type="text" name="NomeM" id="NomeM"></td>
                </tr>
                
                <tr>
                    <td><label for="nasc">Data_Nasc: </label></td>
                    <td><input type="date" name="nasc" id="nasc"></td>
                </tr>

                <tr>
                    <td><label for="sexo">Sexo:</label></td>
                    <td>
                        <input type="radio" name="sexo" value="M" id="M">
                        <label for="M">Masculino</label>
                        <input type="radio" name="sexo" value="F" id="F">
                        <label for="F">Feminino</label>
                    </td>
                </tr>

                <tr>
                    <td><label for="escolaridade">Escolaridade</label></td>

                    <td>
                        <select name="escolaridade" id="escolaridade">
                            <option value="Fundamental">Ensino Fundamental</option>
                            <option value="Médio">Ensino Médio</option>
                            <option value="Superior">Ensino Superior</option>
                            <option value="Pós-graduação">Pós-graduação</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="nacionalidade">Nacionalidade</label>
                    </td>
                    <td>
                        <select name="nacionalidade" id="nacionalidade">
                                <option value="Brasileiro">Brasileiro</option>
                                <option value="Estadunidense">Estadunidense</option>
                                <option value="Colombiano">Colombiano</option>
                                <option value="Argentino">Argentino</option>
                                <option value="Russo">Russo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Interesses</label></td>
                    <tr><td><input value="Cinema" type="checkbox" name="check[]" id="check1"><label for="check1">Cinema</label></td></tr>
                    <tr><td><input value="Poesia" type="checkbox" name="check[]" id="check2"><label for="check2">Poesia</label></td></tr>
                    <tr><td><input value="MMA" type="checkbox" name="check[]" id="check3"><label for="check3">MMA</label></td></tr>
                    <tr><td><input value="Xadrez" type="checkbox" name="check[]" id="check4"><label for="check4">Xadrez</label></td></tr>
                    <tr><td><input value="Surf" type="checkbox" name="check[]" id="check5"><label for="check5">Surf</label></td></tr>
                    <tr><td><input value="Patinação no gelo" type="checkbox" name="check[]" id="check6"><label for="check6">Patinação no gelo</label></td></tr>
                    <tr><td><input value="Ginástica" type="checkbox" name="check[]" id="check7"><label for="check7">Ginástica</label></td></tr>
                    <tr><td><input value="Capoeira" type="checkbox" name="check[]" id="check8"><label for="check8">Capoeira</label></td></tr>
                    <tr><td><input value="Dança" type="checkbox" name="check[]" id="check9"><label for="check9">Dança</label></td></tr>
                    <tr><td><input value="Música" type="checkbox" name="check[]" id="check10"><label for="check10">Música</label></td></tr>
                </tr>
                <tr>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </form>
    
</body>
</html>