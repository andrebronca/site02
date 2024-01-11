<?php
namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    //tentando acessar pelo arquivo diretamente
    header("Location: /site02/");  //redireciona para a raiz do site
}

class Contato{
    //$dados pode ser: array, string ou null
    private array|string|null $dados;
    
    public function index(){
        $this->dados = "Mensagem enviada com sucesso!";
        $loadView = new \Core\ConfigView("contato/contato", $this->dados);
        $loadView->loadView();
    }
}

