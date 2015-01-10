<?php
require_once '../vendor/autoload.php';
require_once './services.php';


$cliente = $container['cliente'];

$lista = $cliente->listar();
var_dump($lista);
foreach($lista as $cliente){
    echo $cliente['nome'].'<br>';
}
