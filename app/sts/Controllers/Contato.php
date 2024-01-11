<?php
namespace Sts\Controllers;

class Contato{
    //$dados pode ser: array, string ou null
    private array|string|null $dados;
    
    public function index(){
        $this->dados = "Mensagem enviada com sucesso!";
        $loadView = new \Core\ConfigView("contato/contato", $this->dados);
        $loadView->loadView();
    }
}

