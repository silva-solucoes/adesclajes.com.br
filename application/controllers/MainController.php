<?php

class MainController {


    static function home(){
        require_once 'application/views/user/home.php';
    }
    static function error(){
        require_once 'application/views/errors/error.php';
    }

}

?>