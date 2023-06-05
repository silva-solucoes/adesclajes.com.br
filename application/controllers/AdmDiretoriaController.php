<?php

class AdmDiretoriaController
{

    static function index()
    {
        require_once 'application/views/admin/diretoria.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
