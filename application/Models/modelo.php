<?php
class Modelo {

    public function enviarEmail($nome, $email, $titulo, $mensagem) {

		$headers = "From: $nome <$email>\r\n";
    	$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    	$host = 'sandbox.smtp.mailtrap.io';
    	$port = 2525;
    	$username = 'ccef44a3f5bd8a';
    	$password = '7d07425282aead';

    	$assunto = "$titulo";
    	$corpo = "$mensagem";

    	$smtp = fsockopen($host, $port, $errno, $errstr, 10);
    	if ($smtp) {
        	fwrite($smtp, "EHLO localhost\r\n");
        	fwrite($smtp, "AUTH LOGIN\r\n");
        	fwrite($smtp, base64_encode($username) . "\r\n");
        	fwrite($smtp, base64_encode($password) . "\r\n");
        	fwrite($smtp, "MAIL FROM: <$email>\r\n");
        	fwrite($smtp, "RCPT TO: <adesc@example.net>\r\n");
        	fwrite($smtp, "DATA\r\n");
        	fwrite($smtp, "Subject: $assunto\r\n");
        	fwrite($smtp, "To: adesc@example.net\r\n");
        	fwrite($smtp, "$headers\r\n");
        	fwrite($smtp, "$corpo\r\n");
        	fwrite($smtp, ".\r\n");
        	fwrite($smtp, "QUIT\r\n");
        	fclose($smtp);
        
        	echo 'Mensagem enviada com sucesso';
    	} else {
        	echo 'Erro ao enviar mensagem';
   		}
	}

	public function enviarInscricao($nome, $dataNascimento, $sexo, $nivel_ensino, $nomeEscola, $nomeMae, $nomePai, $telRespon, $categoria_esportiva, $posicao, $altura, $message, $dtRegistro){
		
    	$bd = new Conn;

		$bd->query('INSERT INTO tbl_incricao (nome, dtNascimento, genero, ensino, nome_escola, nome_mae, nome_pai, telefoneR, categoriaE, posicao, altura, frase, dtRegistro) VALUES (:nome, :dtNascimento, :genero, :ensino, :nome_escola, :nome_mae, :nome_pai, :telefoneR, :categoriaE, :posicao, :altura, :frase, :dtRegistro)');
		
		$bd->bind(':nome', $nome);
		$bd->bind(':dtNascimento', $dataNascimento);
		$bd->bind(':genero', $sexo);
		$bd->bind(':ensino', $nivel_ensino);
		$bd->bind(':nome_escola', $nomeEscola);
		$bd->bind(':nome_mae', $nomeMae);
		$bd->bind(':nome_pai', $nomePai);
		$bd->bind(':telefoneR', $telRespon);
		$bd->bind(':categoriaE', $categoria_esportiva);
		$bd->bind(':posicao', $posicao);
		$bd->bind(':altura', $altura);
		$bd->bind(':frase', $message);
		$bd->bind(':dtRegistro', $dtRegistro);

		if($bd->executa()):
			$_SESSION['msg'] = "cadastrado com sucesso, confirme o cadastro via e-mail";
		else:
			$_SESSION['msg'] = "não foi possivel realizar o cadastrado";
		endif;

	}

	public function informacoes(){
        
		$bd = new Conn;

		$bd->query('SELECT * FROM tbl_config ORDER BY tbl_config.id_config DESC LIMIT 1;');

		$bd->resultado();

		return $bd->resultado();
    }
}
