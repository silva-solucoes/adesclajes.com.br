<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Sair
{
    public function index() {
        unset($_SESSION['usuario_id'], $_SESSION['usuario_foto'], $_SESSION['usuario_nome'], $_SESSION['usuario_email'], $_SESSION['usuario_funcao']);
        $urlDestino = URL . 'login/index';
        header("Location: $urlDestino");
    }
}
