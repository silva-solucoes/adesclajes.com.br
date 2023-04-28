<?php

require_once './application/models/modelo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $titulo = $_POST['subject'];
    $mensagem = $_POST['message'];
    

    $modelo = new Modelo();

    if($modelo->enviarEmail($nome, $email, $titulo, $mensagem)){
        echo 'E-mail enviado com sucesso!';
        
    } else {
        echo 'Erro ao enviar e-mail';
    }

}