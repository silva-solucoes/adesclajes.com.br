<?php

class AdmEsportesController
{

    static function index()
    {
        require_once 'application/views/admin/categoria_esportiva.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
