<?php

class Admin extends Controller{

    public function __construct(){

        if(!Sessao::logado()):
            URL::redirecionar('paginas/login');
        endif;

    }

    public function index(){


        $this->view('admin/painel');

    }
    
}