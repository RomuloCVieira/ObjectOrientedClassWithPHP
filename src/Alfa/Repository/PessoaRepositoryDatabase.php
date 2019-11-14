<?php

declare(strict_types=1);

namespace Alfa\Repository;

use Alfa\Entity\Pessoa;
use Alfa\Repository\PessoaRepositoryInterface;

class PessoaRepositoryDatabase implements PessoaRepositoryInterface
{
    public function add(Pessoa $pessoa) : Pessoa
    {
        return new Pessoa();
    }
   
}