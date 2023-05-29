<?php

namespace App\Controllers;

require_once './application/models/AdmsCadastrar.php';

$cad = new ControllerCadastro();

$cad->index();

class ControllerCadastro{

	
	private $dados;

	public function index(){

		$this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		
		if(!empty($this->dados['CadUsuario'])){
			
			$cadUsuario = new \App\Models\AdmsCadastrar();
			
			if($cadUsuario->cadastrar($this->dados)){
				echo 'Menssagem enviada com sucesso';
				//$urlDestino = URL."login";
				//header("Location: $urlDestino");

			}else{
				//echo 'Menssagem enviada com sucesso';
				$this->dados['form'] = $this->dados;
			}
		}
	}	
}
?>