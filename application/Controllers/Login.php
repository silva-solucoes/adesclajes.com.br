<?php

class Login extends Controller
{
    private $usuarioModel;
    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
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

                    $autenticarLogin = $this->usuarioModel->autenticarLogin($formulario['email'], $formulario['senha']);

                    if ($autenticarLogin) :
                        $this->criarSessaoUsuario($autenticarLogin);
                    else :
                        Sessao::mensagem('usuario', 'E-mail ou senha inválida', 'alert alert-danger');
                        header("Location:" . URL . "/paginas/login");
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


        $this->view('user/login', $dados);
    }

    public function recuperarConta(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if (!empty($formulario['email'])) {
                if (Checa::checarEmail($formulario['email'])) {
                    $dados['email_erro'] = 'O e-mail informado é inválido';
                } else {
                    $recuperar = $this->usuarioModel->recuperar($formulario['email']);
                    if ($recuperar) {
                        header("Location:".URL."/paginas/login");
                        exit;
                    } else {
                        header("Location:".URL."/paginas/recuperar");
                        exit;
                    }
                }
            } else {
                $dados['email_erro'] = 'Preencha o campo e-mail';
            }
        } else {
            header("Location:".URL."/paginas/recuperar");
            exit;
        }
    }

    private function criarSessaoUsuario($autenticarLogin)
    {
        $_SESSION['id_user'] = $autenticarLogin->id_usuario;
        $_SESSION['nome_user'] = $autenticarLogin->nome_usuario;
        $_SESSION['email_user'] = $autenticarLogin->email_usuario;
        $_SESSION['foto_user'] = $autenticarLogin->foto_user;
        $_SESSION['funcao_user'] = $autenticarLogin->nome_status;
        header("Location:" . URL . "/admin/index");
        //$this->view('admin/painel');
    }

    public function sair()
    {
        unset($_SESSION['id_user']);
        unset($_SESSION['nome_user']);
        unset($_SESSION['email_user']);
        unset($_SESSION['foto_user']);
        unset($_SESSION['funcao_user']);

        session_destroy();

        header("Location:" . URL . "/paginas/login");
    }
}
