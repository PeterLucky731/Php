<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>
<form action="" method="get">
        <label for="">Digite sua altura:</label>
        <input type="number" name="alt" id="alt">

        <label for="">Digite seu peso:</label>
        <input type="number" name="peso" id="peso">

        <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php
    $alt = $_GET['alt'];
    $alt = intval($alt);

    $peso = $_GET['peso'];
    $peso = intval($peso);

    $imc = $peso / (($alt/100)**2);
    $imc_formatado = number_format($imc, 2, ',','.');

    // printf("IMC: %.2f", $imc);

    echo "<h1>Seu indicie de massa corporal ≈ ". $imc_formatado ."</h1>";
?>
