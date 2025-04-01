<?php

$contas = array(
    array(
        'numero_conta' => '12345-6',
        'cpf_proprietario' => '123.456.789-00',
        'saldo' => 1500,75
    ),
    array(
        'numero_conta' => '23456-7',
        'cpf_proprietario' => '987.654.321-00',
        'saldo' => 2500,50
    ),
    array(
        'numero_conta' => '34567-8',
        'cpf_proprietario' => '111.222.333-44',
        'saldo' => 3200,00
    ),
    array(
        'numero_conta' => '45678-9',
        'cpf_proprietario' => '555.666.777-88',
        'saldo' => 100,00
    )
);




echo "Informe o número da conta que deseja consultar: ";
$numeroConta = trim(fgets(STDIN));

$contaEncontrada = false;

foreach ($contas as $conta) {
    if ($conta['numero_conta'] == $numeroConta) {
        $contaEncontrada = true;
       
        echo "Número da Conta: " . $conta['numero_conta'] . "\n";
        echo "CPF do Proprietário: " . $conta['cpf_proprietario'] . "\n";
        echo "Saldo: R$ " . $conta['saldo'] . "\n";
        break;
    }
}
if (!$contaEncontrada) {
    echo "Conta não encontrada.\n";
}
?>

