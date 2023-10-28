<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="RelPesquisa.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <br><br>

            <label>Sexo:</label>

            <br>

            <input type="radio" name="sexo" id="masculino" value="M">
            <label for="masculino">Masculino</label>
               
            <input type="radio" name="sexo" id="feminino" value="F">
            <label for="feminino">Feminino</label>

            <br><br>

            <label for="grau">Grau Inst:</label>
            <select name="grau" id="grau">
                <option value="Fundamental">Ensino Fundamental</option>
                <option value="Médio">Ensino Médio</option>
                <option value="Superior">Ensino Superior</option>
                <option value="Pós-graduação">Pós-graduação</option>
            </select>
                
                <br><br>

            <label>Hobbies</label>

                <br>

                <input type="checkbox" name="check[]" id="check1" value="Natação">
                <label for="check1">Natação</label>

                <br>

                <input type="checkbox" name="check[]" id="check2" value="Séries">
                <label for="check2">Séries</label>

                <br>

                <input type="checkbox" name="check[]" id="check3" value="Video-games">
                <label for="check3">Video-games</label>
                
                <br><br>
        <input type="submit">
    </form>
    
</body>
</html>