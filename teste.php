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
   $preco = $_GET["a"];
    echo "o preço do produto é R$ " .number_format($preco,2);
    $desc  =  $_GET["b"];
    echo "<br/> Valor do desconto em porcemtagem $desc";

    $precodesc =  ($desc/100) ; //0.2
    $valor = $preco * $precodesc; 
    $pf = $preco - $valor;
    echo "<br/> Valor do produto com desconto R$" .number_format($pf,2);

?>
    
</body>
</html>