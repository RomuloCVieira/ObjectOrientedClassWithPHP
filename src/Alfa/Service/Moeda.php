<?php

namespace Alfa\Service;

use Alfa\Repository\MoedaRepositoryInterface;

class Moeda
{

    private $moedaRepository;

    public function __construct(MoedaRepositoryInterface $moedaRepository)
    {
        $this->moedaRepository = $moedaRepository;
    }

    public function getAll()
    {
        return $this->moedaRepository->getAll();
    }
    public function getDolar() : Moeda
    {
       return $this->moedaRepository->getById('dolar');
    }
}