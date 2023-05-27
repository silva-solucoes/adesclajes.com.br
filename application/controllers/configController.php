<?php
class configController{
    static function index()
    {
        require_once 'application/views/admin/config_site.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }
}
?>