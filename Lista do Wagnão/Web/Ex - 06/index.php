<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 4</title>
</head>

<form action="" method="get">
   
    <br/>
    Digite seu Peso:  <input type="peso" name="peso" />
    <br/>
    Digite sua Altura:  <input type="altura" name="altura" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

<?php
 $peso = $_GET['peso'];
 $altura = $_GET['altura'];

 function imc($altura, $peso){
$altura = str_replace(',', '.', $altura);
$result = $altura * $altura / $peso;
return $result;

}

echo " seu imc é: " .imc($altura , $peso);

?>
</body>
</html>