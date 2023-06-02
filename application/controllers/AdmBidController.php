<?php

class AdmBidController
{

    static function index()
    {
        require_once 'application/views/admin/BID.php';
    }
    static function error()
    {
        require_once 'application/views/erros/Admerro.php';
    }
}
