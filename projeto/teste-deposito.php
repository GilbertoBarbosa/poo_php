<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new Cpf(numero: '123.456.789-10'),
        'Gilberto Barbosa',
        new Endereco('Embu', 'Jardim São Vicente', 'São Vicente', '258')
    )
);

try {
    $contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo.";
}

