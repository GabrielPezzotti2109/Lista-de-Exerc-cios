<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 9</title>
</head>

<form action="" method="get">
    Insira um número:  <input type="inserido" name="inserido" />
    <br/>
    <input type="submit" name="submit" value="Executar" />
</form>

<body>
    

    <?php

        $inserido = $_GET['inserido'];

        $num = 100;
		$val = 1;
		for ($i = 1; $i <= $inserido; $i++)
		{
			$val = $val * $i;
		}
		echo $val."<br>";

    ?>
</body>
</html>