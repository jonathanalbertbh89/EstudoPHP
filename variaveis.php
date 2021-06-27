<?php

    $nomeCompleto = "Jonathan Albert Santos Carvalho"; //variável definida como uma String
    $anoNascimento = 1989;

    echo $nomeCompleto;

    echo "</br>";

    /**
     * isset() usado para verificar se a variável tem conteúdo
     * unset() usado para apagar a variável
     * 
     */

    echo $nomeCompleto . " " . $anoNascimento; 

    /**
     * Tipos de variável
     * Number
     * String
     * Boolean
     * array
     * object
     * resource
     * null
     */

     $nome = "Jonathan";            //strings 
     $site = 'www.google.com.br';

     $ano = 1989;
     $salario = 5500.99;            // number
     $bloqueado = false;            // boolean
     
     $frutas  = array(
         "abacaxi",
         "laranja",
         "manga"
     );                 // array

    echo "</br>";

    echo $frutas[1];

    echo "</br>";

    $nascimento = new DateTime();
    var_dump($nascimento);

    echo "</br>";

    $arquivo = fopen("index.php", "r"); //resource

    var_dump($arquivo);

    echo "</br>";
    $nulo = NULL;

    var_dump($nulo);

?>