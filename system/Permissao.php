<?php

namespace System;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of Permissao
 *
 * @author Celke
 */
class Permissao
{
    private string $urlController;
    private array $pgPublica;
    private array $pgRestrita;
    private string $resultado;
    
    function getResultado(): string {
        return $this->resultado;
    }

    public function index($urlController): void {
        $this->urlController = $urlController;
        
        $this->pgPublica = ["login", "main", "erro", "recuperar", "bid", "sair", "cadastrar", "ativar"];
        
        if(in_array($this->urlController, $this->pgPublica)){
            $this->resultado = $this->urlController;
        }else{
            $this->pgRestrita();
        }
    }
    
    private function pgRestrita(): void {
        $this->pgRestrita = ["painel", "erro", "sair", "perfil"];
        
        if(in_array($this->urlController, $this->pgRestrita)){
            $this->verificarLogin();
        }else{
            #$_SESSION['msg'] = "<p style='color: #ff0000;'>Erro: Página não encontrada!</p>";
            $urlDestino = URL . 'erro/index';
            header("Location: $urlDestino");
        }
    }
    
    private function verificarLogin(): void {
        if(isset($_SESSION['usuario_id']) AND isset($_SESSION['usuario_nome'])  AND isset($_SESSION['usuario_email']) ){
            $this->resultado = $this->urlController;
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000;'>Erro: Para acessar a página realize o login!</p>";
            $urlDestino = URL . 'login/index';
            header("Location: $urlDestino");
        }
    }
    
}
