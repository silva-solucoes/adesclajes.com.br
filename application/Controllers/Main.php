<?php

class Main extends Controller{

    public function index(){
        $this->view('main/home');
    }
    public function noticias(){
        $this->view('user/noticias');
    }
    public function detalheNoticias(){
        $this->view('user/detalhe_noticia');
    }
    public function bid(){
        $this->view('user/bid');
    }
    public function catEsportiva(){
        $this->view('user/detalhe_esporte');
    }
    public function galeriaFoto(){
        $this->view('user/galeria_fotos');
    }

    public function enviarContato(){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'name' => trim($formulario['name']),
                'email' => trim($formulario['email']),
                'subject' => trim($formulario['subject']),
                'message' => trim($formulario['message']),
            ];

            if(empty($formulario['name'])):
                $dados['nome_erro'] = "Preencha o campo Seu nome";
            endif;

        else:
            $dados = [
                'name' => '',
                'email' => '',
                'subject' => '',
                'message' => '',
            ];
        endif;

        $this->view('paginas/index', $dados);
    }
    
}