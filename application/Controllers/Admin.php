<?php

class Admin extends Controller{

    private $usuarioModel;
    public function __construct(){

        if(!Sessao::logado()):
            URL::redirecionar('paginas/login');
        endif;

        $this->usuarioModel = $this->model('Usuario');
    }

    public function index(){


        $this->view('admin/painel');

    }

    public function usuario(){
        $dados=[
            'user' => $this->usuarioModel->lerUsuario()
        ];
        $this->view('admin/usuarios', $dados);

    }
    
}