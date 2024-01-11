<?php
namespace Sts\Controllers; 

use Core;

class SobreEmpresa{
    private array|string|null $dados;
    
    public function index(){
        $this->dados = [];
        $loadView = new Core\ConfigView("sobre/sobre-empresa", $this->dados);
        $loadView->loadView();
    }
}

