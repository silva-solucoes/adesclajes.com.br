<?php

class Paginas extends Controller{

    private $info;
    public function __construct(){

        $this->info = $this->model('modelo');

    }
    public function login(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'email' => trim($formulario['email']),
            ];
            if(empty($formulario['email'])):
                $dados['nome_erro'] = "Preencha o campo com seu e-mail";
            endif;
        else:
            $dados=[
                'email' => '',
            ];
        endif;
        $this->view('login', $dados);
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
        //exibir notícia
        $dados['noticias']=$this->info->listar4Noticias();
        //Exibir categorias
        $dados['categorias']=$this->info->exibirCategorias();
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
            'info' => $this->info->lerInformacao(),
        ];
        //exibir notícia
        $dados['noticia']=$this->info->exibirNoticia($idNoticia);
        //exibir até 5 comentários
        $dados['comentarios']=$this->info->exibir5ComentariosNoticia($idNoticia);
        //exibir Todos os comentários
        $dados['todosComentarios']=$this->info->exibirTodosComentariosNoticia($idNoticia);
        //Controle dos Comentários
        $dados['controleComentarios']=$this->info->resultadoTodosComentarios($idNoticia);
        //Contagem de comentários
        $dados['contagemComentarios']=$this->info->contagemComentarios($idNoticia);
        //Exibir categorias
        $dados['categorias']=$this->info->exibirCategorias();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais de um membro
        $dados['rsMembros']=$this->info->lerRedesSociaisMembro($dados['info']->id_membro);
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

    public function erro(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/erros/erro', $dados);
    }
    public function erro404(){

        $this->view('erro');
    }
    
}