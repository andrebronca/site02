<?php 
//com isso o composer fica encarregado de carregar as classes
//carregar o composer
require './vendor/autoload.php';

//classe responsável por tratar a url e chamar a controller específica
$url = new Core\ConfigController();
//carrega a controller conforme a url
$url->loadPage();

    
