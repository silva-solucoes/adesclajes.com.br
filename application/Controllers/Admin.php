<?php

class Admin extends Controller{

    private $usuarioModel;
    private $confirmacaoEmail;
    private $info;
    private $chave;
    public function __construct(){

        if(!Sessao::logado()):
            header("Location:".URL."/paginas/login");
        endif;

        $this->usuarioModel = $this->model('Usuario');
        $this->confirmacaoEmail = $this->model('modelo');
        $this->info = $this->model('modelo');
    }
    //Chamada Principal Painel de Controle
    public function index(){
        $buscar = '';
        if(empty($buscar)):
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        endif;

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
        $dados = [
            'info' => $this->info->informacoes(),
            'redes' => $this->info->nossasRedes(),
        ];
        $this->view('admin/config_site', $dados);
    }
    //Chamada para página de Patrocinadores
    public function patrocinio(){
        $dados = [
            'info' => $this->usuarioModel->exibirPatrocinadores(),
        ];
        $this->view('admin/patrocinadores', $dados);
    }
    public function patrocinioEditar(){
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idPatro = end($parts);
        $dados = [
            'info' => $this->usuarioModel->exibirPatrocinadores(),
            'patrocinador' => $this->usuarioModel->lerPatrocinador($idPatro),
        ];
        $this->view('admin/patrocinador_editar', $dados);

    }

    public function cadastrarPatrocinador(){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) {

            $foto = $_FILES['fotoPatrocinador']['tmp_name'] ? $_FILES['fotoPatrocinador'] : null;

            $dados = [
                'nomePatro' => trim($formulario['nomePatrocinador']),
                'linkPatro' => trim($formulario['linkPatrocinador']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) {
                if (empty($formulario['nomePatrocinador'])) {
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                }

                if (empty($formulario['linkPatrocinador'])) {
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                }
            } else {
                if (!empty($foto)) {
                    $upload = new Upload_Patro();
                    $upload->imagem($foto, 'client');

                    if ($upload->getResultado()) {
                        $foto = $upload->getResultado();
                        $dados['fotoPatrocinador'] = $foto;

                        if (!$dados['upload_erro']) {
                            #header('Location: ' . URL . '/admin/patrocinioEditar/' . $idPatro);
                        }

                    } else {
                        $foto = null; // Mantém a imagem existente
                        $dados['upload_erro'] = $upload->getErro();
                    }
                } else {
                    $foto = null; // Mantém a imagem existente
                    $dados['fotoPatrocinador'] = $foto;
                }
            }
            $this->usuarioModel->cadastrarPatrocinador($dados);
            header('Location: ' . URL . '/admin/patrocinio');
        } else {
            $dados = [
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
        }
    }

    public function excluirPatrocinador(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $patrocinadorId = $_POST['user_id'];
            $nomeFoto = $_POST['user_name'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->excluirPatrocinador($nomeFoto, $patrocinadorId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function editarPatrocinador(){

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idPatro = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) {
            $fotoArmazenada = $this->usuarioModel->lerPatrocinador($idPatro);
            $foto = $_FILES['fotoPatrocinador']['tmp_name'] ? $_FILES['fotoPatrocinador'] : null;

            $dados = [
                'nomePatro' => trim($formulario['nomePatrocinador']),
                'linkPatro' => trim($formulario['linkPatrocinador']),
                'idPatro' => $idPatro,
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) {
                if (empty($formulario['nomePatrocinador'])) {
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                }

                if (empty($formulario['linkPatrocinador'])) {
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                }
            } else {
                if (!empty($foto)) {
                    $upload = new Upload_Patro();
                    $upload->imagem($foto, 'client');

                    if ($upload->getResultado()) {
                        $foto = $upload->getResultado();
                        $dados['fotoPatrocinador'] = $foto;

                        if (!$dados['upload_erro']) {
                            #header('Location: ' . URL . '/admin/patrocinioEditar/' . $idPatro);
                        }

                        if (Checa::checarNome($formulario['nomeUser'])) {
                            $dados['nomeUser_erro'] = 'O nome informado é inválido';
                        } elseif (Checa::checarEmail($formulario['emailUser'])) {
                            $dados['emailUser_erro'] = 'O e-mail informado é inválido';
                        } elseif ($this->usuarioModel->checarEmail($formulario['emailUser'])) {
                            $dados['emailUser_erro'] = 'O e-mail informado já está cadastrado';
                        } elseif (strlen($formulario['senhaUser']) < 6) {
                            $dados['senhaUser_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                        }
                    } else {
                        $foto = $fotoArmazenada->img_patrocinio; // Mantém a imagem existente
                        $dados['upload_erro'] = $upload->getErro();
                    }
                } else {
                    $foto = $fotoArmazenada->img_patrocinio; // Mantém a imagem existente
                    $dados['fotoPatrocinador'] = $foto;
                }
            }
            $this->usuarioModel->editarPatrocinador($dados);
            header('Location: ' . URL . '/admin/patrocinioEditar/' . $idPatro);
        } else {
            $dados = [
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
        }
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
    public function buscar(){
        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if(!empty($buscar)):
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            if($resultBusca == Null):
                Sessao::mensagem('Busca', 'Nenhum registro foi encontrado para '.$buscar.'!', 'alert alert-danger');
            endif;
            
            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        else:
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        endif;
    }
    public function aceitarSolicitacao($idInscricao){
        $dados=[
            'editarStatus' => $this->usuarioModel->statusAtivo($idInscricao),
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
        Url::redirecionar('admin/detalheInscricao/'.$idInscricao);
        #header("Location: ".URL."/admin/detalhe_inscricao");
    }
    public function rejeitarSolicitacao($idInscricao){
        $dados=[
            'editarStatus' => $this->usuarioModel->statusRejeitado($idInscricao),
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
        Url::redirecionar('admin/detalheInscricao/'.$idInscricao);
        #header("Location: ".URL."/admin/detalhe_inscricao");
    }
    public function detalheInscricao($idInscricao){
        $dados=[
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
            'cpfUser_erro' => '',
            'telUser_erro' => '',
            'funcaoUser_erro' => '',
            'emailUser_erro' => '',
            'senhaUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
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