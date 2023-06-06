<?php

namespace System;

if (!defined('4578S9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class ConfigController
{

    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlMetodo;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlConjunto = explode("/", $this->url);

            if ((isset($this->urlConjunto[0])) and (isset($this->urlConjunto[1]))) {
                $this->urlController = $this->urlConjunto[0];
                $this->urlMetodo = $this->urlConjunto[1];
            } else {
                $this->urlController = "erro";
                $this->urlMetodo = "index";
            }
        } else {
            $this->urlController = "main";
            $this->urlMetodo = "index";
        }
    }

    public function carregar()
    {
        $this->config();
        $valPermissao = new \System\Permissao();
        $valPermissao->index($this->urlController);
        $urlController = ucwords($this->urlController);
        $classe = "\\App\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

    private function config()
    {
        #define('URL', 'http://localhost/adesclajes/');
        define('URL', 'http://localhost/backup/adesclajes.com.br/');
    }

}