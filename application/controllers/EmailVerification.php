<?php

require_once './application/models/modelo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $titulo = $_POST['subject'];
    $mensagem = $_POST['message'];
    

    $modelo = new Modelo();

    $modelo->enviarEmail($nome, $email, $titulo, $mensagem);
      

}