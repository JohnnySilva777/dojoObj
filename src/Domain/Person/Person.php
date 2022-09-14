<?php

declare(strict_types=1);

namespace Architecture\Domain\Person;

use Architecture\Domain\Cpf;
use Architecture\Domain\Email;

class Person
{
    private int $id;
    private string $name;
    private Cpf $cpf;
    private Email $email;

    public static function buildPerson(string $cpf, string $name, string $email): self
    {
        return new Person(new Cpf($cpf), $name, new Email($email));
    }

    public function __construct(Cpf $cpf, string $name, Email $email)
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Cpf
     */
    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    /**
     * @param Cpf $cpf
     */
    public function setCpf(Cpf $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email): void
    {
        $this->email = $email;
    }
}
