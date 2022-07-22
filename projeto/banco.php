<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

require_once 'autoload.php';


$endereco = new Endereco(cidade: 'Embu', bairro: 'São Vicente', rua: 'dois', numero: '90');
$gilberto = new Titular(new Cpf(numero: '12345678910'), nome: 'Gilberto Barbosa', endereco: $endereco);
$primeiraConta = new Conta($gilberto);
$primeiraConta->depositar(valorADepositar: 500);
$primeiraConta->sacar(valorASacar: 300); 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$maria = new Titular(new Cpf(numero: '98765432177'), nome: 'Maria', endereco: $endereco);
$segundaConta = new Conta($maria);

echo Conta::recuperaNumeroDeContas();
