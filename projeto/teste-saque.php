<?php

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca, SaldoInsulficienteException};
use Alura\Banco\Modelo\{Endereco, Cpf};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('12312312390'),
        'Cleuma Diva',
        new Endereco(cidade: 'Embu', bairro: 'São Marcos', rua: 'São Carlos', numero: '45')
    )
);

$conta->depositar(500);

try {
    $conta->sacar(600);    
} catch (SaldoInsulficienteException $exception) {
    echo "Você nõa tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}



echo $conta->recuperaSaldo();