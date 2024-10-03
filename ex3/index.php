<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
        <label for="">Digite um número qualquer</label>
        <input type="number" name="num" id="num">
</form>

</body>
</html>

<?php 
    $numero = $_GET['num'];
    $num = intval($numero);

        $ant = $num - 1;
        $suc = $num + 1;
        
        echo '<h1>Antecessor:'. $ant .'</h1>';
        echo '<h1>Número:'. $num .'</h1>';
        echo '<h1>Sucessor:'. $suc .'</h1>';
?>
