<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Painel
{
    
    private $dados;
    
    public function index() {
       $carregarView = new \System\ConfigView("Views/admin/painel", $this->dados);
       $carregarView->renderizar();
    }
}
