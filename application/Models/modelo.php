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

	public function enviarInscricao($nome, $dataNascimento, $sexo, $nivel_ensino, $nomeEscola, $nomeMae, $nomePai, $telRespon, $categoria_esportiva, $posicao, $altura, $message){
		
    	$db = new Conn;
		
		$dataHora = date('dd/mm/yyyy H:i:s');


	}
}
