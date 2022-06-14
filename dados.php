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
    $nome = $_POST["n"];
    $nascimento = $_POST ["d"];

    $anos = date('Y') - $nascimento;

    if ($anos < 18) {
        echo "Não pode dirigir <br/>";
    } else {
        echo "Pode dirigir <br/>";    
    }
    

    echo "$nome tem $anos anos ";
   ?>


</body>
</html>