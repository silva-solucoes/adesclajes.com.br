<?php

namespace System;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class ConfigView
{

    private string $nome;
    private $dados;

    public function __construct($nome, array $dados = null) {
        $this->nome = $nome;
        $this->dados = $dados;
    }

    public function renderizar() {
        if (file_exists('application/' . $this->nome . '.php')) {
            include 'application/' . $this->nome . '.php';
        } else {
            echo "Erro ao carregar a página<br>";
            echo "Erro ao carregar a view: {$this->nome}<br>";
        }
    }

}
