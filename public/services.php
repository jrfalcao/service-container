<?php

use Pimple\Container;

$container = new Container();

$container['conexao'] = (function(){
    return new \JRF\Conexao();  
});

$container['cliente'] = (function($c){
    return new JRF\Cliente($c['conexao']);
});
