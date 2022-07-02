<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 4</title>
</head>

<form action="" method="get">
    Nota 1° Bimestre:  <input type="p" name="p" />
    <br/>
    Nota 2° Bimestre:  <input type="s" name="s" />
    <br/>
    Nota 3° Bimestre:  <input type="t" name="t" />
    <br/>
    Nota 4° Bimestre:  <input type="q" name="q" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

    <?php

        $b1 = $_GET['p'];
        $b2 = $_GET['s'];
        $b3 = $_GET['t'];
        $b4 = $_GET['q'];
        $final = 1;

        $final = ($b1 + $b2 + $b3 + $b4)/4;

        if($final >= 7){
            echo "A média final do Aluno foi : $final";
            echo "</br>";
            echo "Aluno Aprovado :) ";

        } else {
            echo "A média final do Aluno foi : $final";
            echo "<br>";
            echo "Aluno Reprovado";
        }
    ?>
</body>
</html>