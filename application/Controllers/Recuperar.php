<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Recuperar
{
    
    private $dados;
    
    public function index() {
       $carregarView = new \System\ConfigView("Views/recuperar-senha", $this->dados);
       $carregarView->renderizar();
    }
}
