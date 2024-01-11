<?php

namespace Sts\Controllers; 

class Home {
    
    private array|string|null $dados;
    
    public function index(){
        $this->dados = [];
        $loadView = new \Core\ConfigView("home/home", $this->dados);
        $loadView->loadView();
    }
}

