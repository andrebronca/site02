<?php
namespace Sts\Controllers; 

if(!defined('C7E3L8K9E5')){
    //tentando acessar pelo arquivo diretamente
    header("Location: /site02/");  //redireciona para a raiz do site
}

class SobreEmpresa{
    private array|string|null $dados;
    
    public function index(){
        $this->dados = [];
        $loadView = new \Core\ConfigView("sobre/sobre-empresa", $this->dados);
        $loadView->loadView();
    }
}

