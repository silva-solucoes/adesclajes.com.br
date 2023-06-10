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
        //Exibir Porque Escolher
        $dados['escolher']=$this->info->todasOpcaoEscolher();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();
        
        $this->view('user/home', $dados);

    }
    public function noticias(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/noticias', $dados);
    }
    public function detalheNoticias($idNoticia){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //exibir notícia
        $dados['noticia']=$this->info->exibirNoticia($idNoticia);
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/detalhe_noticia', $dados);
    }
    public function bid(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/bid', $dados);
    }
    public function catEsportiva(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/detalhe_esporte', $dados);
    }
    public function galeriaFoto(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/galeria_fotos', $dados);
    }
    
}