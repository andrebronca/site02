<?php
namespace Core;

class ConfigController extends Config
{

    private string $url;

    private array $urlArray;

    private string $urlController;

    private string $urlParameter;

    private string $urlSlugController;

    private array $format;

    public function __construct()
    {
        //instancia a classe herdada para obter as constantes
        $this->config();
        
        $filter = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        if (! empty($filter)) {
            $this->url = $filter;
            $this->clearUrl();
            $this->urlArray = explode("/", $this->url);

            if (isset($this->urlArray[0])) {
                $this->urlController = $this->slugController($this->urlArray[0]); // envio de alguma página na url
            } else {
                //usando a constante herdada
                $this->urlController = $this->slugController(CONTROLLERERRO); // se não for enviada a página acessa a padrão
            }
        } else {
            $this->urlController = $this->slugController(CONTROLLER);
        }
    }
    
    public function loadPage(): void{
        $classLoad = "\\Sts\\Controllers\\". $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }

    private function clearUrl(): void
    {
        // eliminar tag na url
        $this->url = strip_tags($this->url);
        // eliminar espaços
        $this->url = trim($this->url);
        // eliminar a barra no final da url
        $this->url = rtrim($this->url, "/");
        // eliminar caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    private function slugController(string $slugController): string
    {
        // converter para minúsculo
        $this->urlSlugController = strtolower($slugController);
        // converter um (-) para espaço em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        // converter a primeira letra de cada palavra para maiúscula
        $this->urlSlugController = ucwords($this->urlSlugController);
        // retirar espaço em branco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }
}

