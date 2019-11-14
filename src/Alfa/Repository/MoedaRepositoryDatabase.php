<?php

declare(strict_types=1);

namespace Alfa\Repository;

use PDO;

use Alfa\Entity\Moeda;

class MoedaRepositoryDatabase implements MoedaRepositoryInterface
{

    protected $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function add(Moeda $pessoa) : Moeda
    {
        return new Moeda();
    }

    public function getAll() : array
    {
        $stmt = $this->conexao->prepare("select * from moeda");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById(string $id) : Moeda
    {
        $stmt = $this->conexao->prepare("select * from moeda where id = '?'");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Moeda::class);
        $stmt->execute();
        var_dump($stmt->fetch());
        return $stmt->fetch();
    }

}