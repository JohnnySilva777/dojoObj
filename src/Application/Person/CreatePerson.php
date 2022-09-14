<?php

declare(strict_types=1);

namespace Architecture\Application\Person;

use Architecture\Domain\Person\Person;
use Architecture\Domain\Person\PersonRepository;

class CreatePerson
{
    private PersonRepository $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function create(CreatePersonDto $data): void
    {
        $person = Person::buildPerson($data->cpf, $data->name, $data->email);
        $this->personRepository->addPerson($person);
    }
}
