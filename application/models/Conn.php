<?php

namespace App\models;

use Exception;
use PDO;


class Conn{

	private string $db = "mysql";
	private string $host = "localhost";
	private string $user = "root";
	private string $pass = "";
	private string $dbname = "adesc";
	public int $port = 3306;
	
	public object $connect;

	public function connect(){
		try{
			$this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
			
			return $this->connect;
		} catch(Exception $ex){
			die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com');
		}
	}

}