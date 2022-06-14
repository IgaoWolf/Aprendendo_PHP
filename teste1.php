<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $n1 = $_GET["a"];
    $n2  =  $_GET["b"];
    $operador = $_GET["s"];

 
    echo "Valores passados foram $n1 e $n2 <br/>";

    $r = ($operador == "s") ? $n1 + $n2: "Operação de soma não selecionada";
    
    
    echo "$r"
?>
    
</body>
</html>