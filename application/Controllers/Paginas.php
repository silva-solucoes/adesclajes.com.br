<?php

class Paginas extends Controller{

    public function login(){
        $this->view('login');
    }
    public function recuperar(){
        $this->view('recuperar');
    }
    public function index(){
        
        $this->view('user/home');
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
    
}