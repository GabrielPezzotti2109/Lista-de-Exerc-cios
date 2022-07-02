<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">

    Digite um Número:  <input type="n1" name="n1" />
    <br/>
    Digite outro Número:  <input type="n2" name="n2" />
    <br/>
    <input type="submit" name="submit" value="Executar" />

</form>

<?php
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];

for($num2; $num2 > 0; $num2--){
    echo $num1;
    if($num2 != 1) echo " + ";
}
?>
</body>
</html>