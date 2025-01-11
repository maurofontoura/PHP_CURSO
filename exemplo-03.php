<?php 
//Tipos básicos 
$nome = "Hcode"; //string
$site = 'wwww.hcode.com.br'; //string com aspas simples  
$ano = 1990; //numero inteiro 
$salario = 5500.99; //ponto flutuante
$bloqueado = false; //boleano 

///////////////////////////////////////
//Tipo composto 
$frutas = array("abacaxi", "laranja", "manga"); //array comeca em zero - tipo composto 

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////////////////
//Tipos especiais resource e o null 

$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = null; // nulo é ausencia de valor e vazio já reservou espaco na memoria para a variável em questão

 ?>