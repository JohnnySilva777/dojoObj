<?php

declare(strict_types=1);

namespace Architecture\Domain;

class Cpf
{
    private string $cpf;

    public function __construct(string $number)
    {
        $this->setCpf($number);
    }

    private function setCpf(string $number): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        if (filter_var($number, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('CPF not valid');
        }

        $this->cpf = $number;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}
