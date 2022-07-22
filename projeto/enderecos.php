<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(cidade: 'Embu', bairro: 'Vazame', rua: 'Rua 2', numero: '100');

$outroEndereco = new Endereco(cidade: 'Embu', bairro: 'Vazame', rua: 'Rua São José', numero: '100');

$aquelEndereco = new Endereco(cidade: 'Embu', bairro: 'Vazame', rua: 'Candeias', numero: '100');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $umEndereco->bairro;
