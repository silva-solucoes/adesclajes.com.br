<?php

namespace App\Models;
use Exception;

if(!defined('4578S9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

class Conn
{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "adesc";
    public int $port = 3306;
    public object $connect;
    
    protected function connect() {
        try {
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador adm@empresa.com');
        }
    }
}
