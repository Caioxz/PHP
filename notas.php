<?php 

$aluno = readline("Digite o seu nome: ").PHP_EOL;
$nota1 = (double) readline("Digite a sua primeira nota: ").PHP_EOL.PHP_EOL; 
$nota2 = (double) readline("Digite a sua segunda nota: ").PHP_EOL.PHP_EOL;

$media = ($nota1 + $nota2) / 2;
PHP_EOL;
if ($media >= 7) {
    echo "Aprovado.";
} elseif ($media < 7 && $media >=5){
    echo "Recuperação.";
} elseif ($media < 5 ){
    echo "Reprovado.";
}