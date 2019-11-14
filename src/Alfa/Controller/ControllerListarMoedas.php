<?php

namespace Alfa\Controller;

use Alfa\Service\Moeda;

class ControllerListarMoedas
{

    protected $serviceMoeda;
    protected $climate;

    public function __construct(Moeda $serviceMoeda, $climate)
    {
        $this->serviceMoeda = $serviceMoeda;
        $this->climate = $climate;
    }

    public function __invoke()
    {
        $this->climate->table($this->serviceMoeda->getAll());   
    }

}