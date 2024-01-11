<?php
namespace Sts\Models;

if(!defined('C7E3L8K9E5')){
    //tentando acessar pelo arquivo diretamente
    header("Location: /site02/");  //redireciona para a raiz do site
}

class StsHome {
    private array $dados;
    
    public function index(): array {
        $this->dados = [
            "title" => "topo da página",
            "description" => "Descrição do serviço"
        ];
        return $this->dados;
    }
}

