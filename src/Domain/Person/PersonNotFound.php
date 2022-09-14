<?php

declare(strict_types=1);

namespace Architecture\Domain\Person;

use Architecture\Domain\Cpf;
use DomainException;
use JetBrains\PhpStorm\Pure;

class PersonNotFound extends DomainException
{
    #[Pure] public function __construct(Cpf $cpf)
    {
        parent::__construct("Person with this $cpf not found");
    }
}
