<?php
class PatroController{
    static function index()
    {
        require_once 'application/views/admin/patrocinadores.php';
    }

    static function error(){
        require_once 'application/views/erros/Admerro.php';
    }
}
?>