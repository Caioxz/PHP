<?php

$nome = readline("Digite seu nome").PHP_EOL;
$idade = (int) readline("Digite sua idade").PHP_EOL; 

if ($idade < 18){
    echo $nome;
    echo ("Ele é menor de idade.");
} else {
    echo $nome;
    echo ("Ele é maior de idade.");
}