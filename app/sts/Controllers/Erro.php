<?php
namespace Sts\Controllers;

class Erro{
    private array|string|null $dados;
    
    public function index(): void{
        $this->dados = null;
        $loadView = new \Core\ConfigView("erro/erro", $this->dados);
        $loadView->loadView();
    }
}

