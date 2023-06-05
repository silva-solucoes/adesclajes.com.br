<?php

class AdmUsuarioController
{

    static function index()
    {
        require_once 'application/views/admin/usuarios.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
