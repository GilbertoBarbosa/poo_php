<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('Kleber Silva', new Cpf ('88855566640'), 10000);

$autenticador->tentaLogin($umDiretor, '10555');

$autenticador->tentaLogin($umDiretor, '1234');
