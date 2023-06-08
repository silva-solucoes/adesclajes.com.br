<?php

class User extends Controller{

    public function enviarContato(){
        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'name' => trim($formulario['name']),
                'email' => trim($formulario['email']),
                'subject' => trim($formulario['subject']),
                'message' => trim($formulario['message']),
            ];
            if(empty($formulario['name'])):
                $dados['nome_erro'] = "Preencha o campo Seu nome";
            endif;
        else:
            $dados = [
                'name' => '',
                'email' => '',
                'subject' => '',
                'message' => '',
            ];
        endif;

        $this->model('modelo');
        
        $modelo = new Modelo();

        $modelo->enviarEmail($dados['name'], $dados['email'], $dados['subject'], $dados['message']);
    }

    public function enviarInscricao(){
        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'dataNascimento' => trim($formulario['dataNascimento']),
                'sexo' => trim($formulario['sexo']),
                'nivel_ensino' => trim($formulario['nivel_ensino']),
                'nomeEscola' => trim($formulario['nomeEscola']),
                'nomeMae' => trim($formulario['nomeMae']),
                'nomePai' => trim($formulario['nomePai']),
                'telRespon' => trim($formulario['telRespon']),
                'categoria_esportiva' => trim($formulario['categoria_esportiva']),
                'posicao' => trim($formulario['posicao']),
                'altura' => trim($formulario['altura']),
                'message' => trim($formulario['message']),
            ];
            if(empty($formulario['nome'])):
                $dados['nome_erro'] = "Preencha o campo Seu nome";
            endif;
        else:
            $dados = [
                'nome' => '',
                'dataNascimento' => '',
                'sexo' => '',
                'nivel_ensino' => '',
                'nomeEscola' => '',
                'nomeMae' => '',
                'nomePai' => '',
                'telRespon' => '',
                'categoria_esportiva' => '',
                'posicao' => '',
                'altura' => '',
                'message' => '',
            ];
        endif;

        $this->model('modelo');

        $modelo = new Modelo();

        $modelo->enviarInscricao($dados['nome'], $dados['dataNascimento'], $dados['sexo'], $dados['nivel_ensino'], $dados['nomeEscola'], $dados['nomeMae'], $dados['nomePai'], $dados['telRespon'], $dados['categoria_esportiva'], $dados['posicao'], $dados['altura'], $dados['message']);
    }
}