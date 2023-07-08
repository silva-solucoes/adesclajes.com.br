<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
class User extends Controller
{

    public function enviarContato()
    {
        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'name' => trim($formulario['name']),
                'email' => trim($formulario['email']),
                'subject' => trim($formulario['subject']),
                'message' => trim($formulario['message']),
            ];
            if (empty($formulario['name'])) :
                $dados['nome_erro'] = "Preencha o campo Seu nome";
            endif;
        else :
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

    public function enviarInscricao()
    {

        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'foto' => 'semfoto.webp',
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

            if (empty($formulario['nome'])) :
                //$dados['nome_erro'] = "Preencha o campo Seu nome";
                echo "Preencha o campo Seu nome";
            endif;
        else :
            $dados = [
                'nome' => '',
                'foto' => '',
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


        $modelo->cadastrarInscricao($dados['nivel_ensino'], $dados['foto'], $dados['nomeEscola'], $dados['nomeMae'], $dados['nomePai'], $dados['altura'], $dados['telRespon'], $dados['categoria_esportiva'], $dados['posicao'], $dados['nome'], $dados['dataNascimento'], $dados['sexo'], $dados['message']);

        $dataAtual = date('Y-m-d'); // Obtém a data atual no formato 'YYYY-MM-DD'

        // Adiciona 1 dia à data atual
        $primeiroDia = date('d/m/Y', strtotime('+1 day', strtotime($dataAtual)));

        // Adiciona 5 dias à data atual
        $quintoDia = date('d/m/Y', strtotime('+5 days', strtotime($dataAtual)));

        echo '  <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Parabéns ' . $dados['nome'] . '!</h4>
                    <p><i class="bi bi-exclamation-triangle"></i> : Entre <b>' . $primeiroDia . '</b> a <b>' . $quintoDia . '</b>, nossa equipe diretiva entrará em contato com o responsável do atleta, caso seja menor de idade, para agendar um primeiro contato.</p>
                    <hr>
                    <p class="mb-0">Agradecemos seu interesse em se tornar parte do nosso time.</p>
                </div>';

        // header('Location:'.URL);

    }

    public function enviarComentarioNoticia($idNoticia)
    {
        $dataHora = date('Y-m-d H:i:s');
        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nameVisitante' => trim($formulario['nameVisitante']),
                'foto' => 'semfoto.jpg',
                'emailVisitante' => trim($formulario['emailVisitante']),
                'comentarioVisitante' => trim($formulario['comentarioVisitante']),
                'idNoticia' => trim($idNoticia),
                'dtCadastroComent' => $dataHora,
            ];

            if (empty($formulario['nome'])) :
                $dados['nome_erro'] = "Preencha o campo Seu nome";
            endif;
            
            $this->model('modelo');

            $modelo = new Modelo();

            $modelo->cadastrarComentarioNoticia($dados['nameVisitante'], $dados['foto'], $dados['dtCadastroComent'], $dados['comentarioVisitante'], $dados['emailVisitante'], $dados['idNoticia']);

            header('Location:' . URL . '/paginas/detalheNoticias/' . $idNoticia);
        else :
            $dados = [
                'nameVisitante' => '',
                'emailVisitante' => '',
                'comentarioVisitante' => '',
                'dtCadastroComent' => ''
            ];
        endif;
    }
}
