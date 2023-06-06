<?php

namespace App\Models;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

class AdmsLogin extends Conn
{

    private $dados;
    private bool $resultado = false;
    private $resultadoBd;
    private object $conn;

    function getResultado(): bool {
        return $this->resultado;
    }

    public function login(array $dados = null) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_val_login = "SELECT *
                FROM tbl_usuario JOIN tbl_status ON tbl_status.id_status = tbl_usuario.id_status
                WHERE email_usuario =:email LIMIT 1";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(":email", $this->dados['email'], PDO::PARAM_STR);
        $result_val_login->execute();
        $this->resultadoBd = $result_val_login->fetch();
        if ($this->resultadoBd) {
            if($this->validarStatus()){
                $this->validarSenha();
            }else{
                $this->resultado = false;
            }
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
                <b>Erro:</b> Página não encontrada!
            </div>";
            $this->resultado = false;
        }
    }

    private function validarStatus() {
        if ($this->resultadoBd['id_status'] != 1) {
            $_SESSION['msg'] = "<p style='color: #ff0000;'>Erro: Usuário não ativado, necessário ativar o usuário, caso não tenha recebido o e-mail solicite novo e-mail!</p>";
            return false;
        } else {
            return true;
        }
    }

    private function validarSenha() {
        if (password_verify($this->dados['senha'], $this->resultadoBd['senha_usuario'])) {
            $_SESSION['usuario_id'] = $this->resultadoBd['id_usuario'];
            $_SESSION['usuario_foto'] = $this->resultadoBd['foto_user'];
            $_SESSION['usuario_nome'] = $this->resultadoBd['nome_usuario'];
            $_SESSION['usuario_email'] = $this->resultadoBd['email_usuario'];
            $_SESSION['usuario_funcao'] = $this->resultadoBd['nome_status'];
            $this->resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
                <b>Erro:</b> Usuário ou a senha incorreta!
            </div>";
            $this->resultado = false;
        }
    }

}
