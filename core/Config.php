<?php
namespace Core;

abstract class Config {
    protected function config(): void {
        define('URL','http://localhost/site02/');
        define('URLADM','http://localhost/site02/adm/');
        define('CONTROLLER','Home');
        define('CONTROLLERERRO','Erro');
        define('EMAILADM','bronca.andre@gmail.com');
    }
    
    /*
     * Documentação sobre o .htaccess
     * https://httpd.apache.org/docs/2.4/rewrite/flags.html
     */
}

