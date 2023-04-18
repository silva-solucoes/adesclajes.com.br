<?php
class SobreController{
    static function index()
    {
        require_once 'application/views/user/sobre.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }
}
?>