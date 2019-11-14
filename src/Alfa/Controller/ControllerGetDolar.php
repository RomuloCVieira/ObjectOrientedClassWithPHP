<?php

namespace Alfa\Controller;

use Alfa\Service\Moeda;

class ControllerGetDolar
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
        $dolar = $this->serviceMoeda->getDolar();
        $padding = $this->climate->padding(10);
        $padding->label('Dólar')->result('R$'+$dolar->getValor());
    }

}