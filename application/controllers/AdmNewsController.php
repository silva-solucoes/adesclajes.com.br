<?php

class AdmNewsController
{

    static function index()
    {
        require_once 'application/views/admin/noticias.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
