<?php
namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    //tentando acessar pelo arquivo diretamente
    header("Location: /site02/");  //redireciona para a raiz do site
}

class Erro{
    private array|string|null $dados;
    
    public function index(): void{
        $this->dados = null;
        $loadView = new \Core\ConfigView("erro/erro", $this->dados);
        $loadView->loadView();
    }
}

