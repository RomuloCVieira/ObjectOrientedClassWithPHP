<?php

namespace Alfa\Repository;

use Alfa\Entity\Moeda;

interface MoedaRepositoryInterface{

    public function getAll() : array;
    public function getById(string $id) : Moeda;
}
