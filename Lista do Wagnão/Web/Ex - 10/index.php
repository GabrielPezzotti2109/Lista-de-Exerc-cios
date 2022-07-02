<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 10</title>
</head>

<form action="" method="get">
    Insira um número menor:  <input type="n1" name="n1" />
    <br/>
    Insira um número maior:  <input type="n2" name="n2" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

    <?php

        $menor = $_GET['n1'];
        $maior = $_GET['n2'];

        function inter($n1,$n2){
            for($i = $n1; $i<$n2; $i++){
                echo $i;
            }
        }
 
        echo inter($menor, $maior);

        #for ($i=0; $i <= $inserido1; $i++) {
            #echo $i."<br>";
        #}

    ?>
</body>
</html>