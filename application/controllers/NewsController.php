<?php

class NewsController
{

    static function index()
    {
        require_once 'application/views/user/noticias.php';
    }
    static function error()
    {
        require_once 'application/views/erros/erro.php';
    }
}
