<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Main
{
    
    private $dados;
    
    public function index() {
       $carregarView = new \System\ConfigView("Views/user/home", $this->dados);
       $carregarView->renderizar();
    }
}
