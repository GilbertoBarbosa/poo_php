<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};


$umFuncionario = new Desenvolvedor(
    'Tiago Nunes', 
    new Cpf(numero: '44585865555'),
    salario: 1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Sofia Nunes', 
    new Cpf(numero: '85896914562'),  
    salario: 3000
);

$umDiretor = new Diretor(
    'Cleuma Nunes', 
    new Cpf(numero: '85896914562'),
    salario: 3500
);

$umEditor = new EditorVideo(
    'Jose santos', 
    new Cpf(numero: '85478565890'),
    salario: 5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
