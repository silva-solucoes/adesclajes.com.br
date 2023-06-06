<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Erro
{
    
    private $dados;
    
    public function index() {
        $carregarView = new \System\ConfigView("Views/user/erros/erro", $this->dados);
        $carregarView->renderizar();
    }
}
