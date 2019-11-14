<?php

declare(strict_types=1);

namespace Alfa\Entity;

class Moeda
{
    private $id;
    protected $descricao;
    protected $valor;

    public function setId(int $id) : Moeda
    {
        $this->id = $id;
        return $this;
    }

    public function setDescricao($descricao) : Moeda 
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function setValor($valor) : Moeda 
    {
        $this->valor = $valor;
        return $this;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function getValor() : float
    {
        return $this->valor;
    }

}