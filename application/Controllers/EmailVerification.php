<?php

require_once URL.'public/vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $titulo = $_POST['subject'];
    $mensagem = $_POST['message'];
    

    $modelo = new Modelo();

    $modelo->enviarEmail($nome, $email, $titulo, $mensagem);
      

}