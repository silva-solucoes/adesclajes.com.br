<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'application/Models/Conn.php';

class AdmsCadastrar extends Conn{

    private $dados;
	private object $conn;
    
    public function cadastrar(array $dados = null){
		$dataHora = date('dd/mm/yyyy H:i:s');
		$this->dados = $dados;
		$this->conn = $this->connect();

		$query_cad_usuario = "INSERT INTO tbl_incricao (nome, dtNascimento, genero, ensino, nome_escola, nome_mae, nome_pai, telefoneR, categoriaE, posicao, altura, frase, dtRegistro) VALUES (:nome, :dtNascimento, :genero, :ensino, :nome_escola, :nome_mae, :nome_pai, :telefoneR, :categoriaE, :posicao, :altura, :frase, :dtRegistro)";

		$cad_usuario = $this->conn->prepare($query_cad_usuario);
		$cad_usuario->bindParam(':nome', $this->dados['name']);
		$cad_usuario->bindParam(':dtNascimento', $this->dados['dataNascimento']);
		$cad_usuario->bindParam(':genero', $this->dados['sexo']);
		$cad_usuario->bindParam(':ensino', $this->dados['nivel_ensino']);
		$cad_usuario->bindParam(':nome_escola', $this->dados['nomeEscola']);
		$cad_usuario->bindParam(':nome_mae', $this->dados['nomeMae']);
		$cad_usuario->bindParam(':nome_pai', $this->dados['nomePai']);
		$cad_usuario->bindParam(':telefoneR', $this->dados['telRespon']);
		$cad_usuario->bindParam(':categoriaE', $this->dados['categoria_esportiva']);
		$cad_usuario->bindParam(':posicao', $this->dados['posicao']);
		$cad_usuario->bindParam(':altura', $this->dados['altura']);
		$cad_usuario->bindParam(':frase', $this->dados['message']);
		$cad_usuario->bindParam(':dtRegistro', $this->dados[$dataHora]);

		$cad_usuario->execute();

		if($cad_usuario->rowCount()){

			$_SESSION['msg'] = "cadastrado com sucesso, confirme o cadastro via e-mail";
			//$this->enviarEmail();
			return true;
		}else{

			$_SESSION['msg'] = "não foi possivel realizar o cadastrado";
			return true;
		}
	}
}