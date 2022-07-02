<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 4</title>
</head>

<form action="" method="get">
    Digite um número:  <input type="n" name="n" />
    <br/>
    Digite um número:  <input type="n2" name="n2" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

    <?php

        $numero1 = $_GET['n'];
        $numero2 = $_GET['n2'];

        if($numero1 > $numero2){
            echo "$numero1 Foi o maior número digitado";
            echo "<br>";
            echo "$numero2 Foi o menor número digitado";

        } else {
            echo "$numero2 Foi o maior número digitado";
            echo "<br>";
            echo "$numero1 Foi o menor número digitado";
        }
    ?>
</body>
</html>