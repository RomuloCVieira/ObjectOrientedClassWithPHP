<?php

declare(strict_types=1);

namespace Alfa\Repository;

use Alfa\Entity\Pessoa;
use Alfa\Repository\PessoaRepositoryInterface;

class PessoaRepositoryArray implements PessoaRepositoryInterface
{
    protected $pessoas = [];
    public function add(Pessoa $pessoa) : Pessoa
    {
        $id = count($this->pessoas) + 1;
        $pessoa->setId($id);
        $this->pessoas[] = $pessoa;
        return $pessoa;
    }
    public function remove(Pessoa $pessoa) : void
    {
      $this->pessoas = array_filter($this->pessoas,function($pessoasLine) use ($pessoa){
          return $pessoasLine != $pessoa;
      });
    }
    public function getAll(): array
    {
        return $this->pessoas;
    }
}