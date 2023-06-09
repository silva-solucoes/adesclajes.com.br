<?php

class Paginas extends Controller{

    private $info;
    public function __construct(){

        $this->info = $this->model('modelo');

    }
    public function login(){
        $this->view('login');
    }
    public function recuperar(){
        $this->view('recuperar');
    }
    public function index(){
        
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os membros
        $dados['todosMembros']=$this->info->todosMembros();
        //Exibir todas as redes sociais de um membro
        $dados['rsMembros']=$this->info->lerRedesSociaisMembro($dados['info']->id_membro);
        //Exibir perguntas frequentes
        $dados['perguntas']=$this->info->todasPerguntas();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        
        $this->view('user/home', $dados);

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