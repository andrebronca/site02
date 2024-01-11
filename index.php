<?php 
//constante que define que o usuário está acessando páginas internas através da
//página index.php
//evitar que acessem a página pelo caminho completo.
define('C7E3L8K9E5', true);

//com isso o composer fica encarregado de carregar as classes
//carregar o composer
require './vendor/autoload.php';

//classe responsável por tratar a url e chamar a controller específica
$url = new Core\ConfigController();
//carrega a controller conforme a url
$url->loadPage();

    
