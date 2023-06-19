<?php

class Admin extends Controller{

    private $usuarioModel;
    private $confirmacaoEmail;
    private $chave;
    public function __construct(){

        if(!Sessao::logado()):
            header("Location:".URL."/paginas/login");
        endif;

        $this->usuarioModel = $this->model('Usuario');
        $this->confirmacaoEmail = $this->model('modelo');
    }
    //Chamada Principal Painel de Controle
    public function index(){

        $dados=[
            'totalUser' => $this->usuarioModel->totalAdms(),
            'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
            'totalAtletas' => $this->usuarioModel->totalAtletas(),
            'infoInscricao' => $this->usuarioModel->lerInscricao(),
        ];
        $this->view('admin/painel', $dados);

    }
    //Chamada para o Gerenciamento de Usuários
    public function usuario(){
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)):

            $dados = [
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => trim($formulario['nomeUser']),
                'cpfUser' => trim($formulario['cpfUser']),
                'telUser' => trim($formulario['telUser']),
                'funcaoUser' => trim($formulario['funcaoUser']),
                'emailUser' => trim($formulario['emailUser']),
                'senhaUser' => trim($formulario['senhaUser']),
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

            if (in_array("", $formulario)):
                if (empty($formulario['nomeUser'])):
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;
    
                if (empty($formulario['telUser'])):
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
    
                if (empty($formulario['funcaoUser'])):
                    $dados['funcaoUser_erro'] = 'Preencha o campo Função';
                endif;
    
                if (empty($formulario['emailUser'])):
                    $dados['emailUser_erro'] = 'Preencha o campo E-mail';
                endif;
    
                if (empty($formulario['senhaUser'])):
                    $dados['senhaUser_erro'] = 'Preencha o campo Senha';
                endif;
            endif;
        else:
            $dados=[
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];
        endif;

        $this->view('admin/usuarios', $dados);

    }
    //Chamada para página de Configurações do Site
    public function config(){
        $this->view('admin/config_site');
    }
    //Chamada para página de Patrocinadores
    public function patrocinio(){
        $this->view('admin/patrocinadores');
    }
    //Chamada para página de Notícia
    public function noticia(){
        $this->view('admin/noticias');
    }
    //Chamada para página de Sobre-nós
    public function sobre(){
        $dados=[
            'infoSobre' => $this->usuarioModel->listarSobre(),
        ];
        $this->view('admin/sobre', $dados);
    }
    //Chamada para página de BID
    public function BID(){
        $this->view('admin/BID');
    }
    //Chamada para página de Fotos
    public function fotos(){
        $this->view('admin/galeria_foto');
    }
    //Chamada para página de Categoria de Esportes
    public function esportes(){
        $this->view('admin/categoria_esportiva');
    }
    //Chamada para página de Diretoria
    public function diretoria(){
        $this->view('admin/diretoria');
    }
    //Chamada para página de Inscrições
    public function inscricao(){
        $dados=[
            'infoInscricao' => $this->usuarioModel->lerInscricao(),
            'nomeUser_erro' => '',
            'cpfUser_erro' => '',
            'telUser_erro' => '',
            'funcaoUser_erro' => '',
            'emailUser_erro' => '',
            'senhaUser_erro' => '',
        ];
        $this->view('admin/inscricoes', $dados);
    }
    public function exibirInscricao($idInscricao){
        $dados=[
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
            'cpfUser_erro' => '',
            'telUser_erro' => '',
            'funcaoUser_erro' => '',
            'emailUser_erro' => '',
            'senhaUser_erro' => '',
        ];
        $this->view('admin/inscricoes', $dados);
    }
    //Cadastro de Novos usuários (ADM)
    public function cadastrarUser(){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)):

            $foto = $_FILES['fotoPerfil']['tmp_name'] ? $_FILES['fotoPerfil'] : null;

            $dados = [
                'nomeUser' => trim($formulario['nomeUser']),
                'cpfUser' => trim($formulario['cpfUser']),
                'telUser' => trim($formulario['telUser']),
                'funcaoUser' => trim($formulario['funcaoUser']),
                'emailUser' => trim($formulario['emailUser']),
                'senhaUser' => trim($formulario['senhaUser']),
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

            if (in_array("", $formulario)):
                if (empty($formulario['nomeUser'])):
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;
    
                if (empty($formulario['telUser'])):
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
    
                if (empty($formulario['funcaoUser'])):
                    $dados['funcaoUser_erro'] = 'Preencha o campo Função';
                endif;
    
                if (empty($formulario['emailUser'])):
                    $dados['emailUser_erro'] = 'Preencha o campo E-mail';
                endif;
    
                if (empty($formulario['senhaUser'])):
                    $dados['senhaUser_erro'] = 'Preencha o campo Senha';
                endif;
            
            else:

                if($foto):
                    $upload = new Upload();
                    $upload->imagem($foto, 'perfil');

                    if($upload->getResultado()):
                        $foto = $upload->getResultado();
                        $dados['foto_user'] = $foto;
                        $dados['senhaCripto'] = password_hash($formulario['senhaUser'], PASSWORD_DEFAULT);
                        $dados['chave_ativar'] = password_hash(date("Y-m-d H:i:s"), PASSWORD_DEFAULT);
                        $dados['dtAtual'] = date('Y-m-d H:i:s');
                        
                        if(!$dados['upload_erro']):
                            if ($this->usuarioModel->armazenar($dados)):
                                $this->confirmacaoEmail->enviarAtivacaoConta($dados);
                                Sessao::mensagem('cadastroUser', 'Cadastro realizado com sucesso. Um e-mail de ativação da conta foi enviado para <b>'.$dados['emailUser'].'.</b>');
                                #URL::redirecionar('');
                            else:
                                Sessao::mensagem('cadastroUser','Erro ao cadastrar usuário!');
                                #die('Erro ao cadastrar usuário!');
                            endif;
                        endif;

                        if (Checa::checarNome($formulario['nomeUser'])):
                            $dados['nomeUser_erro'] = 'O nome informado é inválido';
                        elseif (Checa::checarEmail($formulario['emailUser'])):
                            $dados['emailUser_erro'] = 'O e-mail informado é inválido';
                        elseif ($this->usuarioModel->checarEmail($formulario['emailUser'])):
                            $dados['emailUser_erro'] = 'O e-mail informado já está cadastrado';
                        elseif (strlen($formulario['senhaUser']) < 6):
                            $dados['senhaUser_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                        endif;
                    else:
                        $foto = null;
                        $dados['upload_erro'] = $upload->getErro();
                    endif;
                endif;
            
            endif;
        else:
            $dados=[
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];
        endif;

        $this->view('admin/usuarios', $dados);
    }
    //Ativação da Conta do Novo usuário
    public function ativarConta(){
        $this->chave = filter_input(INPUT_GET, "chave", FILTER_DEFAULT);
        if (!empty($this->chave)):
            $ativarUsuario = new Modelo();
            $ativarUsuario->validarChave($this->chave);
            $urlDestino = URL . "/paginas/login";
            header("Location: ".$urlDestino);
        else:
            $urlDestino = URL . "/paginas/login";
            header("Location: ".$urlDestino);
        endif;
    }
    //Página de erro 404
    public function erro(){

        $this->view('admin/erros/Admerro');
    }
    
}