<?php

declare(strict_types=1);

namespace Alfa\Repository;

use Alfa\Entity\Pessoa;

interface PessoaRepositoryInterface
{
    public function add(Pessoa $pessoa) : Pessoa;
    public function getAll() : array;
    public function remove(Pessoa $pessoa) : void;
}