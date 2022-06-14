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
 $prod = "leite";
 $preco = "2.50";

 echo "O $prod custa R$ " .number_format($preco,2);
 printf("<br/>O %s custa R$ %.2f<br/>", $prod, $preco);

    $v [0] = 4;
    $v [1] = 3;

    print_r($v);

    echo "<br/>";
    $v2 = array (3,4,5,1,2,4);
    print_r($v2);

    echo "<br/>";

    //wordwarp quebra de linha conforme as palabras 
    $txt = "Este é aaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaa aaaa aaaaaaaaaaa  aaaaaaaaa  aaaaa aaaa a aa aaaaaaa aaaa aa aa aaaaa aaa aaaa";
    echo wordwrap($txt,20,"<br/>\n"); 

    //strlen quantidade de caracteres 
    $txt = "Teste de palavra";
    echo strlen($txt);

    //trim dados vindos do formulario formatacao de espaços 
    $nome = "xxxJosexxdDxSolvaxxx";
    echo strlen($nome);
    $novo = trim($nome);
    echo strlen($novo);

    echo "<br/>";

    //funcao ltrim evita somente os espaços da frente
    //funcao rtrim evita somente os espaços apos

    //function str_word_count
    $frase = "Eu vou estudar PHP";
    echo str_word_count($frase,0); // 0 contar , 1 criar um vetor , 2 
    echo "<br/>";
    //funcao explode 
    $site = "Curso em video";
    print_r(explode(" ",$site));//caracter de separacao 
    echo "<br/>";
    //funcao str_split
    $nome3 = "Maria";
    print_r(str_split($nome3));
    echo "<br/>";
    //funcao implode 
   // implode ("#"); //Entre os vetores ele adiciona o caracter pre definido 

    //funcao chr("numero da letra") cada letra possui um codigo 

    //fucao ord letra C quero saber o codigo da letra 
    $letra = "D";
    echo ord($letra);
    echo "<br/>";
    $prop = "Igor Augusto Wolf";
    echo strtolower($prop); //Letras minusculas 
    echo "<br/>";
    //strtoupper Letras maiusculas 


    //funcao ucfirst Coloca a primeira letra em maiusculo 
    //funcao ucwords

    $nome = "Igor Augusto";
    echo strrev($nome); // funcao inverte a ordem das letras
    echo "<br/>";

    $frase = "Estou aprendendo PHP";
    echo strpos($frase , "PHP"); // eNCONTRA A POSSICAO DA PALAVRA DESEJADA # strIpos Ignoara a lowcase ou uppercase
    echo "<br/>";

    $frase = "PHP é uma linguagem, PHP é vida";//CONTA QUANTAS VEZES A PALAVRA APARECE NUMA STRING
    echo substr_count($frase, "PHP");
    echo "<br/>";

    $site = "Curso em Video";
    echo substr($site,0,5); //SUBSTRING ELE PEGA OS PARAMENTROS E CRIA UMA SUBSTRING APARTIR DA STRING
    echo "<br/>";

    $nome = "Igor";
    echo str_pad($nome,15," ",STR_PAD_RIGHT);
    echo "<br/>";

    echo str_repeat("PHP",5);//repede a palavra que esta entre parentes

    echo "<br/>";
    $frase = "Gosto de estudar historias";
    echo str_replace("historias", "PHP", $frase);//substiu as palavras por outras 

    echo "<br/>";


    









?>
    
</body>
</html>