<?php

class MainController {


    static function home(){
        require_once 'application/views/user/home.php';
    }

    static function cadastrar(){
        require_once 'ControllerCadastro.php';
    }

    static function AdmsCadastrar(){
        require_once 'AdmsCadastrar.php';
    }

    static function envioEmail(){
        
        require_once 'EmailVerification.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }

}

?>