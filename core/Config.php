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
}

