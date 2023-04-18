<?php

class php_email_from
{
    private $to;
    private $subject;
    private $message;
    private $headers;

    public function __construct($to, $subject, $message)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = "From: webmaster@example.com" . "\r\n" .
            "Reply-To: webmaster@example.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
    }

    public function enviarEmail()
    {
        if (mail($this->to, $this->subject, $this->message, $this->headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function limparFormulario()
    {
        // Limpa os campos do formulário após o envio do e-mail
        // Coloque aqui o código necessário para resetar os campos do formulário
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $to = "seu-email@example.com"; // Substitua pelo e-mail de destino
    $subject = "Assunto do e-mail"; // Substitua pelo assunto do e-mail
    $message = "Mensagem do e-mail"; // Substitua pela mensagem do e-mail

    // Cria uma instância da classe EmailForm
    $emailForm = new php_email_from($to, $subject, $message);

    // Envia o e-mail
    if ($emailForm->enviarEmail()) {
        echo '<script>alert("Seu e-mail foi enviado com sucesso.");</script>';
    } else {
        echo '<script>alert("Falha ao enviar o e-mail.");</script>';
    }

    // Limpa os campos do formulário
    $emailForm->limparFormulario();
}
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function() {
        $(‘#submit’).click(function() {
            $.post("contact.php", $("#form").serialize(), function() {
                $(‘#success’).html(alert("Seu E-Mail foi enviado com sucesso."));
                $("#form")[0].reset();
            });
            return false;
        });
    });