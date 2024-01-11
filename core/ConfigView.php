<?php
namespace Core;

class ConfigView {
//     private string $nome;
//     private array $dados;
    
    //implementando a criação de atributos de forma automática
    public function __construct(private string $nameView, private array|string|null $dados){
//         $this->nome = $nome;
//         $this->dados = $dados;
    }
    
    //renderizar a view
    public function loadView(): void {
        $file = 'app/sts/Views/'.$this->nameView.'.php';
        if(file_exists($file)){
            include 'app/sts/Views/include/header.php';
            include $file;
            include 'app/sts/Views/include/footer.php';
        } else {
            die("Erro01: Entre em contato com o administrador: ". EMAILADM);
        }
    }
}

