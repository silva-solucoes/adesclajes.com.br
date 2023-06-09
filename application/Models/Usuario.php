<?php

class Usuario{
    private $bd;

    public function __construct(){
        $this->bd = new Conn();
    }

    public function checarEmail($email){
        $this->bd->query("SELECT email_usuario FROM tbl_usuario WHERE email_usuario = :e");
        $this->bd->bind(":e",$email);

        if($this->bd->resultado()): 
            return true;
        else:
            return false;
        endif;
    }

    public function armazenar($dados){
        
        $this->bd->query('INSERT INTO tbl_usuario (email_usuario, telefone_usuario, foto_user, senha_usuario, chave_ativae, dtexpiracao, dt_edicao, dt_criacao, cpf_cnpj, nome_usuario, id_status) VALUES (:email_usuario, :telefone_usuario, :foto_user, :senha_usuario, :chave_ativae, :dtexpiracao, :dt_edicao, :dt_criacao, :cpf_cnpj, :nome_usuario, :id_status)');

        $this->bd->bind('email_usuario', $dados['email']);
        $this->bd->bind('telefone_usuario', $dados['telefone']);
        $this->bd->bind('foto_user', $dados['foto']);
        $this->bd->bind('senha_usuario', $dados['senha']);
        $this->bd->bind('chave_ativae', $dados['chave']);
        $this->bd->bind('dtexpiracao', $dados['dtExpiracao']);
        $this->bd->bind('dt_edicao', $dados['dtEdicao']);
        $this->bd->bind('dt_cricao', $dados['dtCriacao']);
        $this->bd->bind('cpf_cnpj', $dados['cpfCnpj']);
        $this->bd->bind('nome_usuario', $dados['nome']);
        $this->bd->bind('id_status', $dados['status']);

        if($this->bd->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function autenticarLogin($email, $senha){
        $this->bd->query("SELECT * FROM tbl_usuario WHERE email_usuario = :e");
        $this->bd->bind(":e",$email);

        if($this->bd->resultado()): 
            $resultado = $this->bd->resultado();
            if(password_verify($senha, $resultado->senha_usuario)):
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }

}