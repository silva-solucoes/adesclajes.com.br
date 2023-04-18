<?php

class MainController {


    static function home(){
        require_once 'application/views/user/home.php';
    }

    static function envioEmail(){
        
        require_once 'application/views/user/forms/contact.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }

}

?>