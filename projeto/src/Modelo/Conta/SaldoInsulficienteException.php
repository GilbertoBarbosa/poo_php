<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsulficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent::__construct($mensagem);     
    }
}