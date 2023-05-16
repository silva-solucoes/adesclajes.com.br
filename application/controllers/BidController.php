<?php
class BidController{
    static function index()
    {
        require_once 'application/views/user/bid.php';
    }

    static function error(){
        require_once 'application/views/erros/erro.php';
    }
}
?>