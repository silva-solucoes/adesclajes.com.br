<?php

class LoginController {

    static function login(){
        require_once 'application/views/login.php';
    }

    static function recuperar_senha(){
        require_once 'application/views/recuperar-senha.php';
    }

    static function painel(){
        require_once 'application/views/admin/painel.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }
}
?>