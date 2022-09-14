<?php


namespace Application\Person;

use Architecture\Application\Person\CreatePerson;
use Architecture\Application\Person\CreatePersonDto;
use Architecture\Domain\Cpf;
use Architecture\Infrastructure\RepositoryMemory;
use Exception;
use JetBrains\PhpStorm\NoReturn;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CreatePersonTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function test_ShouldCreatePerson_WithMemoryRepository(): void
    {
        $personData = new CreatePersonDto($cpf = '583.455.390-76', $name = 'Johnny', $email = 'john@email.com.br');

        $repositoryMemory = new RepositoryMemory();
        $factoryPerson = new CreatePerson($repositoryMemory);

        $factoryPerson->create($personData);
        $person = $repositoryMemory->searchByCpf(new Cpf($cpf));

        Assert::assertSame($person->getName(), $name);
        Assert::assertSame($person->getEmail(), $email);
        Assert::assertSame($person->getCpf(), $cpf);
    }
}
