<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formRes.php" method="post">
        <table border="1">
            <tr>
                <th>NR</th>
                <th>NOME DO ALUNO</th>
                <th>PRESENÇA</th>
            </tr>
            <?php
           /*  $turma = array(
                array("1","ANA"),
                array("2","BOB"),
                array("3","MAX"),
                array("4","TED"),
                array("5","WIL"),
                array("6","Ola")
            );

                for ($i=0; $i <= 4; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j <= 1 ; $j++) { 
                        echo "<td>".$turma[$i][$j]."</td>";
                    }
                    echo "
                    
                    <td><center>
                     <div>
                     <label for='presente$i'>Presente</label>
                     <input type='radio' value='P' name='aluno[]$i' id='presente$i' checked> 

                     <label for='vagabundo$i'>Vagabundo</label> 
                     <input type='radio' value='F' name='aluno[]$i' id='vagabundo$i'>
                     </div>

                     </td></center></tr>
                    ";
                }*/




             $nome = array("ANA","BOB","MAX","TED","WIL","OLA","teste");

             

                for ($i=0; $i < count($nome); $i++) { 
                    $n = $i+1;
                    echo "<tr>

                    <td>
                        $n
                    </td>

                    <td>
                        $nome[$i]
                    </td>

                    <td>
                        <label for='presente$i'>Presente</label>
                        <input type='radio' value='Presente' name='presenca$i' id='presente$i' checked> 

                        <label for='vagabundo$i'>Vagabundo</label> 
                        <input type='radio' value='Vagabundo' name='presenca$i' id='vagabundo$i'>
                    </td>

                    </tr>";
                }
            ?>
            <tr><td><input type="submit"></td></tr>
        </table>
    </form>
</body>
</html>