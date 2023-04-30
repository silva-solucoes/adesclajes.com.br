<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './public/vendor/autoload.php';
class Modelo{


		public function enviarEmail($nome, $email, $titulo, $mensagem){


		$mail = new PHPMailer(true);

		try{
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->CharSet = 'UTF-8';
		    $mail->isSMTP();
		    $mail->Host       = 'sandbox.smtp.mailtrap.io';
		    $mail->SMTPAuth   = true;
		    $mail->Username   = 'ccef44a3f5bd8a';
		    $mail->Password   = '7d07425282aead';
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
		    ;
		    $mail->Port       = 2525;

		    $mail->setFrom("$email", "$nome");
		    $mail->addAddress('adesc@example.net', 'Adeilson');

		    $mail->isHTML(true);
		    $mail->Subject = "$titulo";
		    $mail->Body    = "$mensagem";
		    $mail->AltBody = "Olá Pedro, Sua solicitação sobre O projeto adesc.\n vamos ao 100 por cento";

		    $mail->send();

			echo 'Menssagem enviada com sucesso<br>';
			} catch (Exception $e) {
			echo "Erro ao enviar mensagem. PHPMailer Error: {$mail->ErrorInfo}";
			}
		}
	}
?>