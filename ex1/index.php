<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Valor A</label>
        <input type="number" name="vlr_A" id="vlr_A">

        <label for="">Valor B</label>
        <input type="number" name="vlr_B" id="vlr_B">

        <label for="">Valor C</label>
        <input type="number" name="vlr_C" id="vlr_C">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 

    $valorA = $_GET['vlr_A'];
    $valorB = $_GET['vlr_B'];
    $valorC = $_GET['vlr_C'];
    
    $valorA = intval($valorA);
    $valorB = intval($valorB);
    $valorC = intval($valorC);

    $soma = ($valorA + $valorB);
    
    if($soma < $valorC){
        echo '<h1"O valor C é maior que a soma de A e B</h1>';
    }else if($soma == $valorC){
        echo '<h1>O valor C e a soma de A e B são iguais</h1>';
    }
    else{
        echo '<h1>A soma de A e B é maior que o valor C</h1>';
    }

    ?>