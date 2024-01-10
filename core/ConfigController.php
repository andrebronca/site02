<?php
namespace Core;

class ConfigController
{
    private string $url;

    public function __construct()
    {
        echo "controller";
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            var_dump($this->url);
        } else {
            echo "controller";
        }
    }
}

