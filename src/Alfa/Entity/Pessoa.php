<?php 
declare(strict_types=1);
namespace Alfa\Entity;
class Pessoa
{
    protected $id;
    protected $cpf;
    protected $nome;

    public function setId(int $id) : Pessoa
    {
        $this->id = $id;
        return $this;
    }
    public function setCpf(string $cpf) : Pessoa
    {
        $this->cpf = $cpf;
        return $this;
    }
    public function setNome(string $nome) : Pessoa
    {
        $this->nome = $nome;
        return $this;
    }
    public function getId() : int
    {
        return $this->id;
    }
    public function getCpf() : string
    {
        return $this->cpf;
    }
    public function getNome() : string
    {
        return $this->nome;
    }
}