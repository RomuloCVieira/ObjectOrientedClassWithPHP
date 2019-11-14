<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Alfa\Controller\ControllerGetDolar;
use Alfa\Service\Moeda as MoedaService;
use Alfa\Repository\MoedaRepositoryDatabase;
use Alfa\Database\MysqlPDO;
use Alfa\Controller\ControllerListarMoedas;


$climate = new League\CLImate\CLImate;

$conexao = new MysqlPDO();

$progress = $climate->progress()->total(100);

for ($i = 0; $i <= 100; $i++) {
  $progress->current($i);

  // Simulate something happening
  usleep(8000);
}

$controllers = [
    1   => ControllerListarMoedas::class,
    2   => ControllerGetDolar::class
];

$moedaRepository = new MoedaRepositoryDatabase($conexao);
$serviceMoeda = new MoedaService($moedaRepository);

while(true){

    $climate->clear();

    $climate->comment('Sistema de Cambio');

    $padding = $climate->padding(10);

    $padding->label('Listar Moedas')->result('[1]');
    $padding->label('Atualizar Dólar')->result('[2]');
    $padding->label('Atualizar Euro')->result('[3]');
    $padding->label('Dólar x Euro')->result('[4]');

    $input = $climate->input('Selecione opção do menu');
    $input->accept([1,2,3,4]);

    $nameController = $input->prompt();    

    $controller = new $controllers[$nameController]($serviceMoeda, $climate);
    $controller();
   

    $inputMenu = $climate->input('Pressione <Enter> para retornar menu');
    $inputMenu->prompt();

}
//$moedaRepository = new MoedaRepositoryDatabase($conexao);
//$serviceMoeda = new MoedaService($moedaRepository);

//$climate->table($serviceMoeda->getAll());