<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    // definir os dados da conta
    private Titular $titular;
    protected float $saldo = 0;
    private static $numeroDeContas = 0;

    // O método construtor é chamado no momento em que a classe é instanciada
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // Acessando um atributo estático
        self::$numeroDeContas++;
    }

    // Método destrutor
    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa!";
        }
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            throw new SaldoInsulficienteException($valorSaque, $this->saldo);
            
            /*echo "Saldo indisponível!";
            return;*/
        } 

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
            
            /*echo "Valor precisa ser positivo!";
            return;*/
        } 

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
    

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;

}
