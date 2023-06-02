<?php

class AdmSobreController
{

    static function index()
    {
        require_once 'application/views/admin/sobre.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
