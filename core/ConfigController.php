<?php
namespace Core;

class ConfigController
{

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;

    public function __construct()
    {
        
        $filter = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        if (! empty($filter)) {
            $this->url = $filter;
            $this->clearUrl();
            
            $this->urlArray = explode("/", $this->url);
            
            
            if(isset($this->urlArray[0])){
//                 var_dump($this->urlArray[0]);
                $this->urlController = $this->slugController($this->urlArray[0]); //envio de alguma página na url
            } else {
                $this->urlController = "Home";  //se não for enviada a página acessa a padrão
            }
        } else {
            echo "url vazia <br>";
            $this->urlController = "Home";
        }
        
        echo "Controller: {$this->urlController} <br>";
    }
    
    private function clearUrl() {
        echo "clearUrl: ". $this->url ."<br>";
        //eliminar tag na url
        $this->url = strip_tags($this->url);
        echo "clearUrl: elimina tag ". $this->url ."<br>";
        //eliminar espaços
        $this->url = trim($this->url);
        echo "clearUrl: elimina espaço ". $this->url ."<br>";
        //eliminar a barra no final da url
        $this->url = rtrim($this->url, "/");
        echo "clearUrl: elimina / final ". $this->url ."<br>";
        //eliminar caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
        echo "clearUrl: elimina caracteres especiais ". $this->url ."<br>";
    }
    
    private function slugController($slugController){
        //converter para minúsculo
        $this->urlSlugController = strtolower($slugController);
        echo "slugController converter para minúsculo: ". $this->urlSlugController ."<br>";
        //converter um (-) para espaço em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        echo "slugController converter - para ' ' espaço: ". $this->urlSlugController ."<br>";
        //converter a primeira letra de cada palavra para maiúscula
        $this->urlSlugController = ucwords($this->urlSlugController);
        echo "slugController primeira letra maiúscula: ". $this->urlSlugController ."<br>";
        //retirar espaço em branco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        echo "slugController remover espaço em branco ' ': ". $this->urlSlugController ."<br>";
        return $this->urlSlugController;
    }
}

