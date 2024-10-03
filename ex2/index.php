<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>
<form action="" method="get">
        <label for="">Digite um número qualquer</label>
        <input type="number" name="num" id="num">

<?php 
    $numero = $_GET['num'];
    $num = intval($numero);

    if($num % 2 == 0){
        echo "<h1>Par!</h1>";
    }else if($num == 0){
        echo "<h1>Nulo!</h1>";
    }
    else{
        echo "<h1>Impar!</h1>";
    }
?>
</body>
</html><h1></h1>