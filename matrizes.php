<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<?php

    $c = range(5,20,2); //sai de cingo até 20 de 2 em 2 
    print_r($c);


    foreach($c as $valor){
        echo " $valor"; 
    }


    $v = array(1 => 3, 3 => 2, 4 => 8);
    unset ($v[1]);
    print_r($v);


    $cad = array("nome"=> "ANA",
                 "idade"=> 15,
                 "peso" => 42);

    $cad["fuma"] = true;

    foreach($v as $k => $c){
        echo " O campo $k possui o conteudo $c<br/>";
    }

    print_r($cad);




    $n = array (array(2,3),
                array(3,4),
                array(9,5));

     $n[2][0] = $n[1][1];


     print_r($n);

     #array_push() ele adiciona mais uma possicao do vetor = array_push($n,7)
     #array_pop($n) Ele exclui a ultima posição do vetor 


     #array_unshift($n,7) ele exclui o vetor que conter tal numero dentro do vetor
     #array_shift($n) ele adiciona 


     #ORDENANDO VETOR = Utilizando o sort($n) coloca na  
     #ORDENANDO VETOR = Utilizando o rsort($n) Ordenar vetor de forma reversa 
 

     #Ordenacao Associativa asort($n)
     # arsort($n) Ordem reversa ordem decrecente 

    #ksort($n) ordena por chaves 

?>
</pre>
</body>
</html>