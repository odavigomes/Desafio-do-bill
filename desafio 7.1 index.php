<?php
$nome = readline("Digite seu nome: ");
$senha = (int) readline("Digite sua senha: ");


if ($senha = 1234){
    echo "Olá $nome! sua $senha esta correta." .PHP_EOL;
} else {
    echo "Olá $nome! sua $senha esta incorreta." .PHP_EOL;
}

