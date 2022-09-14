<?php

declare(strict_types=1);

namespace Architecture\Application\Person;

class CreatePersonDto
{
    public string $cpf;
    public string $name;
    public string $email;

    public function __construct(string $cpf, string $name, string $email)
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->email = $email;
    }
}
