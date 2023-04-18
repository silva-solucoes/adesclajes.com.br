<?php
class NewsDescriptionController{
    static function index()
    {
        require_once 'application/views/user/detalhe_noticia.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }
}
?>