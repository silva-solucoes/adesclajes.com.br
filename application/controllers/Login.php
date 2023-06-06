<?php

namespace App\Controllers;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Login
{
    
    private $dados;
    
    public function index() {          
        
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($this->dados['SendLogin'])){
            $visualizarLogin = new \App\Models\AdmsLogin();
            $visualizarLogin->login($this->dados);
            //Autenticação
            if($visualizarLogin->getResultado()){
                $urlDestino = URL . "painel/index";
                header("Location: $urlDestino");
            }else{
                $this->dados['form'] = $this->dados;
            }            
        }
        
        $carregarView = new \System\ConfigView("Views/login", $this->dados);
        $carregarView->renderizar();        
    }
}
