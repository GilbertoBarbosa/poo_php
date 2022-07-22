<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        /*$numero = filter_var($numero, filter: FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regex' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        
        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }*/

        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}

