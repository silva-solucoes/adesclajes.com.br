<?php

class Login extends Controller{
    private $usuarioModel;
    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }

    public function cadastrar()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirma_senha'])) :
                    $dados['confirma_senha_erro'] = 'Confirme a Senha';
                endif;
            else :
                if (Checa::checarNome($formulario['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';
					
                elseif (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                    elseif($this->usuarioModel->checarEmail($formulario['email'])):
                        $dados['email_erro'] = 'O e-mail informado já está cadastrado';
                elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif ($formulario['senha'] != $formulario['confirma_senha']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else :
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                    if($this->usuarioModel->armazenar($dados)):
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');
                        #URL::redirecionar('');
                    else:
                        die('Erro ao cadastrar usuário!');
                    endif;

                endif;

            endif;

        else :
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => '',
            ];

        endif;


        $this->view('user/cadastrar', $dados);
    }

    public function login()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];

            if (in_array("", $formulario)) :


                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

            else :
                if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                    
                else :

                    $autenticarLogin = $this->usuarioModel->autenticarLogin($formulario['email'],$formulario['senha']);

                    if($autenticarLogin):
                        $this->criarSessaoUsuario($autenticarLogin);
                    else:
                        Sessao::mensagem('usuario','E-mail ou senha inválida', 'alert alert-danger');
                        URL::redirecionar('paginas/login');
                    endif;

                endif;

            endif;

        else :
            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => '',
            ];

        endif;


        #$this->view('user/login', $dados);
        header('Location:'.URL.'paginas/login');

    }

    private function criarSessaoUsuario($autenticarLogin){
        $_SESSION['id_user'] = $autenticarLogin->id_usuario;
        $_SESSION['nome_user'] = $autenticarLogin->nome_usuario;
        $_SESSION['email_user'] = $autenticarLogin->email_usuario;
        URL::redirecionar('admin/painel');
    }

    public function sair(){
        unset($_SESSION['id_user']);
        unset($_SESSION['nome_user']);
        unset($_SESSION['email_user']);

        session_destroy();

        URL::redirecionar('pagina/login');
    }
}