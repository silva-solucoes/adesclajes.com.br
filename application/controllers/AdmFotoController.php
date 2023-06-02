<?php

class AdmFotoController
{

    static function index()
    {
        require_once 'application/views/admin/galeria_foto.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}