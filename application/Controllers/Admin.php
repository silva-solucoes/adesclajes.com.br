<?php

class Admin extends Controller
{

    private $usuarioModel;
    private $confirmacaoEmail;
    private $info;
    private $chave;
    private $logoCount;
    public function __construct()
    {

        if (!Sessao::logado()) :
            header("Location:" . URL . "/paginas/login");
        endif;

        $this->usuarioModel = $this->model('Usuario');
        $this->confirmacaoEmail = $this->model('modelo');
        $this->info = $this->model('modelo');
    }
    //Chamada Principal Painel de Controle
    public function index()
    {
        $buscar = '';
        if (empty($buscar)) :
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        endif;
    }
    //Chamada para o Gerenciamento de Usuários
    public function usuario()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $buscar = '';

        if (isset($formulario)) :

            $dados = [
                'user' => $this->usuarioModel->lerUsuario($buscar),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => trim($formulario['nomeUser']),
                'cpfUser' => trim($formulario['cpfUser']),
                'telUser' => trim($formulario['telUser']),
                'funcaoUser' => trim($formulario['funcaoUser']),
                'emailUser' => trim($formulario['emailUser']),
                'senhaUser' => trim($formulario['senhaUser']),
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomeUser'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['telUser'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;

                if (empty($formulario['funcaoUser'])) :
                    $dados['funcaoUser_erro'] = 'Preencha o campo Função';
                endif;

                if (empty($formulario['emailUser'])) :
                    $dados['emailUser_erro'] = 'Preencha o campo E-mail';
                endif;

                if (empty($formulario['senhaUser'])) :
                    $dados['senhaUser_erro'] = 'Preencha o campo Senha';
                endif;
            endif;
        else :
            $dados = [
                'user' => $this->usuarioModel->lerUsuario($buscar),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];
        endif;

        $this->view('admin/usuarios', $dados);
    }
    public function exibirBuscaUser(){

        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);

        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->lerUsuario($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('BuscaMembro', 'Nenhum registro foi encontrado para o atleta <b>' . $buscar . '</b>!', 'alert alert-danger');
            endif;

            $dados = [
                'user' => $resultBusca,
            ];
            $this->view('admin/usuarios', $dados);
        else:
            $resultBusca = $this->usuarioModel->lerUsuario($buscar);
            $dados = [
                'user' => $resultBusca,
            ];
            $this->view('admin/usuarios', $dados);
        endif;
    }
    //Cadastro de Novos usuários (ADM)
    public function cadastrarUser()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :

            $foto = $_FILES['fotoPerfil']['tmp_name'] ? $_FILES['fotoPerfil'] : null;

            $dados = [
                'nomeUser' => trim($formulario['nomeUser']),
                'cpfUser' => trim($formulario['cpfUser']),
                'telUser' => trim($formulario['telUser']),
                'funcaoUser' => trim($formulario['funcaoUser']),
                'emailUser' => trim($formulario['emailUser']),
                'senhaUser' => trim($formulario['senhaUser']),
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomeUser'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['telUser'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;

                if (empty($formulario['funcaoUser'])) :
                    $dados['funcaoUser_erro'] = 'Preencha o campo Função';
                endif;

                if (empty($formulario['emailUser'])) :
                    $dados['emailUser_erro'] = 'Preencha o campo E-mail';
                endif;

                if (empty($formulario['senhaUser'])) :
                    $dados['senhaUser_erro'] = 'Preencha o campo Senha';
                endif;

            else :
                if (!empty($foto)) :
                    $foto = $_FILES['fotoPerfil']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/adms/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['fotoPerfil']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'user.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'user-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'user-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(300, 300);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 300, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['nomeImagem'] = $novoNome;
                else :
                    $dados['nomeImagem'] = 'semfoto.webp';
                endif;
                $dados['senhaCripto'] = password_hash($formulario['senhaUser'], PASSWORD_DEFAULT);
                        $dados['chave_ativar'] = password_hash(date("Y-m-d H:i:s"), PASSWORD_DEFAULT);
                        $dados['dtAtual'] = date('Y-m-d H:i:s');
            endif;
            
            if($this->usuarioModel->checarEmail($dados['emailUser'])):
            
                if ($this->usuarioModel->armazenar($dados)) :
                    
                    $this->confirmacaoEmail->enviarAtivacaoConta($dados);
                    Sessao::mensagem('cadastroUser', 'Cadastro realizado com sucesso. Um e-mail de ativação da conta foi enviado para <b>' . $dados['emailUser'] . '.</b>');
                    #URL::redirecionar('');
                            
                else :
                    
                    Sessao::mensagem('cadastroUser', 'Erro ao cadastrar usuário!', 'alert alert-danger');
                    #die('Erro ao cadastrar usuário!');
                endif;
            else:
                Sessao::mensagem('cadastroUser', 'O e-mail: <b>' . $dados['emailUser'] . '</b> já é cadastrado!', 'alert alert-danger');
            endif;

            if (Checa::checarNome($formulario['nomeUser'])) :
                $dados['nomeUser_erro'] = 'O nome informado é inválido';
            elseif (Checa::checarEmail($formulario['emailUser'])) :
                $dados['emailUser_erro'] = 'O e-mail informado é inválido';
            elseif ($this->usuarioModel->checarEmail($formulario['emailUser'])) :
                $dados['emailUser_erro'] = 'O e-mail informado já está cadastrado';
            elseif (strlen($formulario['senhaUser']) < 6) :
                $dados['senhaUser_erro'] = 'A senha deve ter no mínimo 6 caracteres';
            endif;
                    
        else :

            $dados = [
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

        endif;

        $this->usuario();
    }
    public function editUser($id){
        $dados = [
            'exibirUser' => $this->usuarioModel->exibirUser($id),
        ];
        $this->view('admin/usuario_editar', $dados);
    }
    public function editarUser($idUser){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $foto = $_FILES['fotoPerfil']['tmp_name'] ?? null;

        if (isset($formulario)) :

            $dados = [
                'nomeUser' => trim($formulario['nomeUser']),
                'cpfUser' => trim($formulario['cpfUser']),
                'telUser' => trim($formulario['telUser']),
                'emailUser' => trim($formulario['emailUser']),
                'senhaUser' => trim($formulario['senhaUser']),
                'idUser' => $idUser,
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['nomeUser'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['telUser'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;

                if (empty($formulario['funcaoUser'])) :
                    $dados['funcaoUser_erro'] = 'Preencha o campo Função';
                endif;

                if (empty($formulario['emailUser'])) :
                    $dados['emailUser_erro'] = 'Preencha o campo E-mail';
                endif;

                if (empty($formulario['senhaUser'])) :
                    $dados['senhaUser_erro'] = 'Preencha o campo Senha';
                endif;

            else :
                $fotoUser = $this->usuarioModel->exibirUser($idUser);
                // Verificar se uma foto foi enviada
                if (!empty($foto)) :

                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/adms/';

                    // Remover a imagem antiga do diretório
                    $caminhoImagemAnterior = $diretorio . $fotoUser->foto_user;
                    if (file_exists($caminhoImagemAnterior)) {
                        unlink($caminhoImagemAnterior);
                    }

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['fotoPerfil']['name'];

                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'user.webp';
                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'user-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'user-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;

                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(300, 300);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 300, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) {
                        unlink($caminhoOriginal);
                    }
                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['fotoPerfil'] = $novoNome;
                else :
                    $dados['fotoPerfil'] = $this->usuarioModel->exibirUser($idUser)->foto_user;
                endif;
                $dados['senhaCripto'] = password_hash($formulario['senhaUser'], PASSWORD_DEFAULT);
                $dados['dtAtual'] = date('Y-m-d H:i:s');

                $this->usuarioModel->editarUser($dados);
                $this->usuario();
                exit;

            endif;

        endif;
    }
    public function reenviarAtivacao(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $membroId = $_POST['user_id'];

            //Consultar Usuário no banco

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->confirmacaoEmail->verificarUser($membroId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function ativarUser(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $membroId = $_POST['user_id'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->ativarUser($membroId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function desligarUser(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $membroId = $_POST['user_id'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->desabilitarUser($membroId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    //Chamada para página de Configurações do Site
    public function config()
    {
        $dados = [
            'info' => $this->info->informacoes(),
            'redes' => $this->info->nossasRedes(),
        ];
        $this->view('admin/config_site', $dados);
    }
    public function editarLogoSite()
    {

        $foto = $_FILES['logoSite']['tmp_name'] ?? null;
        $fotoArmazenada = $this->info->informacoes();

        // Verificar se uma foto foi enviada
        if (!empty($foto)) {
            // Diretório onde as fotos são armazenadas
            $diretorio = 'images/';

            // Remover a imagem antiga do diretório
            $caminhoImagemAnterior = $diretorio . $fotoArmazenada->logoHeaderFooter;
            if (file_exists($caminhoImagemAnterior)) {
                unlink($caminhoImagemAnterior);
            }

            // Nome do arquivo
            $nomeArquivo = 'site.webp';

            // Mover a foto para o diretório especificado
            move_uploaded_file($foto, $diretorio . $nomeArquivo);

            // Caminho completo da imagem original
            $caminhoOriginal = $diretorio . $nomeArquivo;

            // Caminho completo da imagem redimensionada
            $caminhoRedimensionado = $diretorio . 'logo-' . $nomeArquivo;

            // Obter as dimensões da imagem original
            list($larguraOriginal, $alturaOriginal) = getimagesize($caminhoOriginal);

            // Calcular as novas dimensões mantendo a proporção
            $novaLargura = 721;
            $novaAltura = 241;
            $proporcao = $larguraOriginal / $alturaOriginal;

            if ($proporcao > 1) {
                $novaLargura = $novaAltura * $proporcao;
            } else {
                $novaAltura = $novaLargura / $proporcao;
            }

            // Criar uma nova imagem com as dimensões desejadas e fundo transparente
            $imagemRedimensionada = imagecreatetruecolor($novaLargura, $novaAltura);
            imagesavealpha($imagemRedimensionada, true);
            $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
            imagefill($imagemRedimensionada, 0, 0, $transparente);

            // Carregar a imagem original
            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);

            // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
            imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal);

            // Salvar a imagem redimensionada no diretório preservando a transparência
            imagewebp($imagemRedimensionada, $caminhoRedimensionado);

            // Liberar a memória
            imagedestroy($imagemOriginal);
            imagedestroy($imagemRedimensionada);

            // Atualizar o nome da foto redimensionada no banco de dados
            $this->usuarioModel->editarLogoSite($nomeArquivo);
        }

        header('Location: ' . URL . '/admin/config');
    }
    public function editarFavicon()
    {

        $foto = $_FILES['favicon']['tmp_name'] ?? null;
        $fotoArmazenada = $this->info->informacoes();

        // Verificar se uma foto foi enviada
        if (!empty($foto)) {
            // Diretório onde as fotos são armazenadas
            $diretorio = 'images/';

            // Remover a imagem antiga do diretório
            $caminhoImagemAnterior = $diretorio . $fotoArmazenada->favicon;
            if (file_exists($caminhoImagemAnterior)) {
                unlink($caminhoImagemAnterior);
            }

            // Nome do arquivo
            $nomeArquivo = $_FILES['favicon']['name'];

            // Mover a foto para o diretório especificado
            move_uploaded_file($foto, $diretorio . $nomeArquivo);

            // Caminho completo da imagem original
            $caminhoOriginal = $diretorio . $nomeArquivo;
            $novoNome = 'favicon.webp';

            // Caminho completo da imagem redimensionada
            $caminhoRedimensionado = $diretorio . $novoNome;

            // Criar uma nova imagem com as dimensões desejadas e fundo transparente
            $imagemRedimensionada = imagecreatetruecolor(113, 108);
            imagesavealpha($imagemRedimensionada, true);
            $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
            imagefill($imagemRedimensionada, 0, 0, $transparente);

            // Carregar a imagem original com base na sua extensão
            $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));
            switch ($extensao) {
                case 'png':
                    $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                    break;
                case 'jpg':
                case 'jpeg':
                    $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                    break;
                case 'webp':
                    $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                    break;
                default:
                    // Tipo de imagem não suportado
                    exit;
            }

            // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
            imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 113, 108, imagesx($imagemOriginal), imagesy($imagemOriginal));

            // Salvar a imagem redimensionada no diretório preservando a transparência
            imagewebp($imagemRedimensionada, $caminhoRedimensionado);

            // Liberar a memória
            imagedestroy($imagemOriginal);
            imagedestroy($imagemRedimensionada);

            // Remover a imagem antiga do diretório
            if (file_exists($caminhoOriginal)) {
                unlink($caminhoOriginal);
            }

            // Atualizar o nome da foto redimensionada no banco de dados
            $dados['fotoFavicon'] = $novoNome;
        } else {
            $dados['fotoFavicon'] = $this->info->informacoes()->favicon;
        }
        $this->usuarioModel->editarFavicon($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarDestaques()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $foto = $_FILES['destaque']['tmp_name'] ?? null;
        $fotoArmazenada = $this->info->informacoes();

        if (isset($formulario)) :

            $dados = [
                'titulo' => trim($formulario['tituloDestaque']),
                'subTitulo' => trim($formulario['subTituloDestaque']),
                'linkVideo' => trim($formulario['linkVideoDestaque']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['tituloDestaque'])) :
                    $dados['titulo_erro'] = 'Preencha o campo Título';
                endif;

                if (empty($formulario['subTituloDestaque'])) :
                    $dados['subTitulo_erro'] = 'Preencha o campo Sub-Título';
                endif;

                if (empty($formulario['linkVideoDestaque'])) :
                    $dados['link_erro'] = 'Preencha o campo Link do Vídeo';
                endif;
            else :
                // Verificar se uma foto foi enviada
                if (!empty($foto)) :

                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'images/';

                    // Remover a imagem antiga do diretório
                    $caminhoImagemAnterior = $diretorio . $fotoArmazenada->imgDestaque;

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['destaque']['name'];

                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'foto-destaque.webp';
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;

                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(780, 646);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 780, 646, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) {
                        unlink($caminhoOriginal);
                    }
                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['fotoDestaque'] = $novoNome;
                else :
                    $dados['fotoDestaque'] = $this->info->informacoes()->imgDestaque;
                endif;

                $this->usuarioModel->editarDetalhes($dados);
                header('Location: ' . URL . '/admin/config');
                exit;

            endif;

        endif;
    }
    public function editarUltimas()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'descricao' => trim($formulario['descricao']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_pgUltimas,
                'descricao' => $this->info->informacoes()->sub_tlPgUltimas,
            ];
        endif;

        $this->usuarioModel->editarUltima($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarSobre()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'descricao' => trim($formulario['descricao']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_pgSobre,
                'descricao' => $this->info->informacoes()->sub_tlSobre,
            ];
        endif;

        $this->usuarioModel->editarSobre($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarEscolha()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'descricao' => trim($formulario['descricao']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_pgSobre,
                'descricao' => $this->info->informacoes()->sub_tlSobre,
            ];
        endif;

        $this->usuarioModel->editarEscolha($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarAcao()
    {

        $foto = $_FILES['acao']['tmp_name'] ?? null;
        $fotoArmazenada = $this->info->informacoes();

        $dados = [
            'fotoAcao' => '',
        ];

        if (!empty($foto)) :
            // Diretório onde as fotos são armazenadas
            $diretorio = 'images/';

            // Remover a imagem antiga do diretório
            $caminhoImagemAnterior = $diretorio . $fotoArmazenada->imgDestaque;

            // Nome do arquivo
            $nomeArquivo = $_FILES['acao']['name'];

            // Mover a foto para o diretório especificado
            move_uploaded_file($foto, $diretorio . $nomeArquivo);

            // Caminho completo da imagem original
            $caminhoOriginal = $diretorio . $nomeArquivo;
            $novoNome = 'foto-chamada-acao.webp';
            // Caminho completo da imagem redimensionada
            $caminhoRedimensionado = $diretorio . $novoNome;

            // Criar uma nova imagem com as dimensões desejadas e fundo transparente
            $imagemRedimensionada = imagecreatetruecolor(960, 300);
            imagesavealpha($imagemRedimensionada, true);
            $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
            imagefill($imagemRedimensionada, 0, 0, $transparente);

            // Carregar a imagem original com base na sua extensão
            $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

            switch ($extensao):
                case 'png':
                    $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                    break;
                case 'jpg':
                case 'jpeg':
                    $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                    break;
                case 'webp':
                    $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                    break;
                default:
                    // Tipo de imagem não suportado
                    exit;
            endswitch;

            // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
            imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 960, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

            // Salvar a imagem redimensionada no diretório preservando a transparência
            imagewebp($imagemRedimensionada, $caminhoRedimensionado);

            // Liberar a memória
            imagedestroy($imagemOriginal);
            imagedestroy($imagemRedimensionada);

            // Remover a imagem antiga do diretório
            if (file_exists($caminhoOriginal)) {
                unlink($caminhoOriginal);
            }

            // Atualizar o nome da foto redimensionada no banco de dados
            $dados['fotoAcao'] = $novoNome;
        else :
            $dados['fotoAcao'] = $this->info->informacoes()->logoAcao;
        endif;

        $this->usuarioModel->editarAcao($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarDiretoria()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['tituloDiretoria']),
                'descricao' => trim($formulario['descDiretoria']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_pgEquipe,
                'descricao' => $this->info->informacoes()->sub_tlEquipe,
            ];
        endif;

        $this->usuarioModel->editarDiretoria($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarPF()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'descricao' => trim($formulario['descricao']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_pagPerguntas,
                'descricao' => $this->info->informacoes()->sub_tlPerguntas,
            ];
        endif;

        $this->usuarioModel->editarPF($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarContato()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'descricao' => trim($formulario['descricao']),
            ];
        else :
            $dados = [
                'titulo' => $this->info->informacoes()->tl_contato,
                'descricao' => $this->info->informacoes()->sub_tlContato,
            ];
        endif;

        $this->usuarioModel->editarContato($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarRodape()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'endereco' => trim($formulario['endereco']),
                'numero' => trim($formulario['numero']),
                'bairro' => trim($formulario['bairro']),
                'cidade' => trim($formulario['cidade']),
                'uf' => trim($formulario['uf']),
                'cep' => trim($formulario['cep']),
                'telefone' => trim($formulario['telefone']),
                'facebook' => trim($formulario['facebook']),
                'instagram' => trim($formulario['instagram']),
                'youtube' => trim($formulario['youtube']),
                'whatsapp' => trim($formulario['whatsapp']),
                'linkedin' => trim($formulario['linkedin']),
                'tiktok' => trim($formulario['tiktok']),
                'twitter' => trim($formulario['twitter']),
                'email' => trim($formulario['email']),
                'mapa' => trim($formulario['mapa']),
            ];
        else :
            foreach ($this->info->informacoes() as $rede) :
                if ($rede->nomeRede == 'Facebook') :
                    $facebook = $rede->link_acesso;
                elseif ($rede->nomeRede == 'Instagram') :
                    $instagram = $rede->link_acesso;
                elseif ($rede->nomeRede == 'Youube') :
                    $youtube = $rede->link_acesso;
                elseif ($rede->nomeRede == 'Whatsapp') :
                    $whatsapp = $rede->link_acesso;
                elseif ($rede->nomeRede == 'Linkedin') :
                    $linkedin = $rede->link_acesso;
                elseif ($rede->nomeRede == 'TikTok') :
                    $tiktok = $rede->link_acesso;
                elseif ($rede->nomeRede == 'Twitter') :
                    $twitter = $rede->link_acesso;
                endif;
            endforeach;
            $dados = [
                'endereco' => $this->info->informacoes()->logradouro,
                'numero' => $this->info->informacoes()->numero,
                'bairro' => $this->info->informacoes()->bairro,
                'cidade' => $this->info->informacoes()->cidade,
                'uf' => $this->info->informacoes()->uf,
                'cep' => $this->info->informacoes()->cep,
                'telefone' => $this->info->informacoes()->telefone,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'youtube' => $youtube,
                'whatsapp' => $whatsapp,
                'linkedin' => $linkedin,
                'tiktok' => $tiktok,
                'twitter' => $twitter,
                'email' => $this->info->informacoes()->email,
                'mapa' => $this->info->informacoes()->localizaçãoIFRAM,
            ];
        endif;

        $this->usuarioModel->editarRodape($dados);
        header('Location: ' . URL . '/admin/config');
    }
    public function editarInfoInscricao()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :

            $dados = [
                'dataInicio' => trim($formulario['dataInicio']),
                'dataEncerramento' => trim($formulario['dataEncerramento']),
                'data_erro' => '',
                'dataInicio_erro' => '',
                'dataFim' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['dataInicio'])) :
                    $dados['dataInicio_erro'] = 'Preencha o campo Data Início';
                endif;
                if (empty($formulario['dataEncerramento'])) :
                    $dados['dataFim_erro'] = 'Preencha o campo Data Encerramento';
                endif;
            else :

                $this->usuarioModel->editarInfoInscricao($dados);
                header('Location: ' . URL . '/admin/config');

            endif;
        else :
            $dados = [
                'dataInicio' => $this->info->informacoes()->dt_abe_inscricao,
                'dataEncerramento' => $this->info->informacoes()->dt_enc_Inscricao,
                'data_erro' => '',
                'dataInicio_erro' => '',
                'dataFim' => '',
            ];
        endif;
    }
    //Chamada para página de Patrocinadores
    public function patrocinio()
    {
        $dados = [
            'info' => $this->usuarioModel->exibirPatrocinadores(),
        ];
        $this->view('admin/patrocinadores', $dados);
    }
    public function patrocinioEditar()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idPatro = end($parts);
        $dados = [
            'info' => $this->usuarioModel->exibirPatrocinadores(),
            'patrocinador' => $this->usuarioModel->lerPatrocinador($idPatro),
        ];
        $this->view('admin/patrocinador_editar', $dados);
    }

    public function cadastrarPatrocinador()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) {

            $foto = $_FILES['fotoPatrocinador']['tmp_name'] ? $_FILES['fotoPatrocinador'] : null;

            $dados = [
                'nomePatro' => trim($formulario['nomePatrocinador']),
                'linkPatro' => trim($formulario['linkPatrocinador']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) {
                if (empty($formulario['nomePatrocinador'])) {
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                }

                if (empty($formulario['linkPatrocinador'])) {
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                }
            } else {
                if (!empty($foto)) {
                    $upload = new Upload_Patro();
                    $upload->imagem($foto, 'client');

                    if ($upload->getResultado()) {
                        $foto = $upload->getResultado();
                        $dados['fotoPatrocinador'] = $foto;

                        if (!$dados['upload_erro']) {
                            #header('Location: ' . URL . '/admin/patrocinioEditar/' . $idPatro);
                        }
                    } else {
                        $foto = null; // Mantém a imagem existente
                        $dados['upload_erro'] = $upload->getErro();
                    }
                } else {
                    $foto = null; // Mantém a imagem existente
                    $dados['fotoPatrocinador'] = $foto;
                }
            }
            $this->usuarioModel->cadastrarPatrocinador($dados);
            header('Location: ' . URL . '/admin/patrocinio');
        } else {
            $dados = [
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];
        }
    }

    public function excluirPatrocinador()
    {
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $patrocinadorId = $_POST['user_id'];
            $nomeFoto = $_POST['user_name'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->excluirPatrocinador($nomeFoto, $patrocinadorId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function editarPatrocinador()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idPatro = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) {
            $fotoArmazenada = $this->usuarioModel->lerPatrocinador($idPatro);
            $foto = $_FILES['fotoPatrocinador']['tmp_name'] ? $_FILES['fotoPatrocinador'] : null;

            $dados = [
                'nomePatro' => trim($formulario['nomePatrocinador']),
                'linkPatro' => trim($formulario['linkPatrocinador']),
                'idPatro' => $idPatro,
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) {
                if (empty($formulario['nomePatrocinador'])) {
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                }

                if (empty($formulario['linkPatrocinador'])) {
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                }
            } else {
                if (!empty($foto)) {
                    $upload = new Upload_Patro();
                    $upload->imagem($foto, 'client');

                    if ($upload->getResultado()) {
                        $foto = $upload->getResultado();
                        $dados['fotoPatrocinador'] = $foto;


                        if (!$dados['upload_erro']) {
                            // Atualizar apenas se não houver erro de upload
                            $this->usuarioModel->editarPatrocinador($dados);
                            // Atualizar o nome da imagem no diretório
                            $caminhoImagemAnterior = 'images/patrocinadores/' . $fotoArmazenada->img_patrocinio;
                            $novoCaminhoImagem = 'images/patrocinadores/' . $dados['fotoPatrocinador'];
                            rename($caminhoImagemAnterior, $novoCaminhoImagem);
                        }

                        if (Checa::checarNome($formulario['nomeUser'])) {
                            $dados['nomeUser_erro'] = 'O nome informado é inválido';
                        } elseif (Checa::checarEmail($formulario['emailUser'])) {
                            $dados['emailUser_erro'] = 'O e-mail informado é inválido';
                        } elseif ($this->usuarioModel->checarEmail($formulario['emailUser'])) {
                            $dados['emailUser_erro'] = 'O e-mail informado já está cadastrado';
                        } elseif (strlen($formulario['senhaUser']) < 6) {
                            $dados['senhaUser_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                        }
                    } else {
                        $foto = $fotoArmazenada->img_patrocinio; // Mantém a imagem existente
                        $dados['upload_erro'] = $upload->getErro();
                    }
                } else {
                    $foto = $fotoArmazenada->img_patrocinio; // Mantém a imagem existente
                    $dados['fotoPatrocinador'] = $foto;
                }

                // Atualizar o patrocinador mesmo se não houver erro de upload
                $this->usuarioModel->editarPatrocinador($dados);
            }

            header('Location: ' . URL . '/admin/patrocinioEditar/' . $idPatro);
        } else {
            $dados = [
                'user' => $this->usuarioModel->lerUsuario(),
                'funcao' => $this->usuarioModel->lerFuncoes(),
                'nomeUser' => '',
                'cpfUser' => '',
                'telUser' => '',
                'funcaoUser' => '',
                'emailUser' => '',
                'senhaUser' => '',
                'upload_erro' => '',
                'nomeUser_erro' => '',
                'cpfUser_erro' => '',
                'telUser_erro' => '',
                'funcaoUser_erro' => '',
                'emailUser_erro' => '',
                'senhaUser_erro' => '',
            ];
        }
    }
    public function editarContSobre()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :
            $dados = [
                'conteudo1' => trim($formulario['conteudo1']),
                'conteudo2' => trim($formulario['conteudo2']),
            ];

        else :
            $dados = [
                'conteudo1' => $this->info->informacoes()->resumo,
                'conteudo2' => $this->info->informacoes()->historia,
            ];
        endif;

        $this->usuarioModel->editarContSobre($dados);
        header('Location: ' . URL . '/admin/sobre');
    }
    public function cadastrarNoticias()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['fotoDestaque']['tmp_name'] ? $_FILES['fotoDestaque'] : null;

            $dados = [
                'titulo' => trim($formulario['tituloNoticia']),
                'conteudo' => trim($formulario['editor1']),
                'descricao' => trim($formulario['descricao']),
                'autor' => trim($_SESSION['id_user']),
                'dataPublic' => trim($formulario['dataPublica']),
                'categoria' => trim($formulario['categoria']),
                'metaTitulo' => trim($formulario['tituloNoticia']),
                'metaDescricao' => trim($formulario['descricao']),
                'metaChave' => trim($formulario['metaChave']),
                'membro' => trim($formulario['membro']),
                'comentarioTec' => trim($formulario['comentarioTec']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    $foto = $_FILES['fotoDestaque']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/noticias/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['fotoDestaque']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'noticia.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'noticia-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'noticia-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(600, 400);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 600, 400, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['fotoDestaque'] = $novoNome;
                else :
                    $dados['fotoDestaque'] = $this->info->informacoes()->img_Noticia;
                endif;
            endif;
            $this->usuarioModel->cadastrarNoticias($dados);
            header('Location: ' . URL . '/admin/noticia');
        else :
            $dados = [
                'titulo' => '',
                'conteudo' => '',
                'descricao' => '',
                'autor' => '',
                'dataPublic' => '',
                'categoria' => '',
                'metaTitulo' => '',
                'metaDescricao' => '',
                'metaChave' => '',
                'membro' => '',
                'comentarioTec' => '',
                'upload_erro' => '',
            ];
        endif;
    }
    public function editarNoticia()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $id = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['fotoDestaque']['tmp_name'] ? $_FILES['fotoDestaque'] : null;

            $dados = [
                'titulo' => trim($formulario['tituloNoticia']),
                'conteudo' => trim($formulario['editor1']),
                'descricao' => trim($formulario['descricao']),
                'autor' => trim($_SESSION['id_user']),
                'dataPublic' => trim($formulario['dataAtualiza']),
                'categoria' => trim($formulario['categoria']),
                'metaTitulo' => trim($formulario['tituloNoticia']),
                'metaDescricao' => trim($formulario['descricao']),
                'metaChave' => trim($formulario['metaChave']),
                'membro' => trim($formulario['membro']),
                'comentarioTec' => trim($formulario['comentarioTec']),
                'upload_erro' => '',
                'idNoticia' => $id,
            ];
            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    $foto = $_FILES['fotoDestaque']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/noticias/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['fotoDestaque']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'noticia.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'noticia-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'noticia-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(600, 400);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));
                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 600, 400, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['fotoDestaque'] = $novoNome;
                else :
                    $resultado = $this->usuarioModel->exibirNoticia($id);
                    $dados['fotoDestaque'] = $resultado->img_Noticia;
                endif;
            endif;
            // Realizar as operações necessárias para editar
            $this->usuarioModel->editarNoticias($dados);
        else :
            $dados = [
                'titulo' => '',
                'conteudo' => '',
                'descricao' => '',
                'autor' => '',
                'dataPublic' => '',
                'categoria' => '',
                'metaTitulo' => '',
                'metaDescricao' => '',
                'metaChave' => '',
                'membro' => '',
                'comentarioTec' => '',
                'upload_erro' => '',
            ];
        endif;
        $this->noticia();
        //header('Location: '.URL.'/admin/noticia_editr');
    }
    public function editarDadosNoticia()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $id = end($parts);
        $dados = [
            'exibirNoticias' => $this->usuarioModel->exibirNoticias($id),
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
            'exibirDirecao' => $this->usuarioModel->exibirDirecao(),
            'exibirNoticia' => $this->usuarioModel->exibirNoticia($id),
        ];
        $this->view('admin/noticia_editar', $dados);
    }
    public function excluirNoticia()
    {
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $noticiaId = $_POST['user_id'];
            $nomeFoto = $_POST['user_name'];

            // Realizar as operações necessárias para excluir notícia com o ID fornecido
            $this->usuarioModel->excluirNoticia($nomeFoto, $noticiaId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function exibirNoticia()
    {
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resultado = '';
            // Obter o ID do patrocinador a ser excluído
            $noticiaId = $_POST['user_id'];
            $noticia = $this->usuarioModel->exibirNoticia($noticiaId);
            $dados = $this->usuarioModel->exibirCategorias();
            $membros = $this->usuarioModel->exibirDirecao();

            $resultado .= '<div class="col-md-12 mb-3">';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<input type="text" name="tituloNoticia" class="form-control" id="editarTitulo" placeholder="Título da Notícia" value="' . $noticia->tl_noticia . '" required>';
            $resultado .= '<label for="floatingName">Título da Notícia*:</label>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<div class="col-md-12 mb-3">';
            $resultado .= '<label for="floatingPassword">Conteúdo da Notícia*:</label>';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<textarea id="editarConteudoNoticia" name="editor1" required>' . $noticia->conteudo . '</textarea>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<div class="col-md-12 mb-3">';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<textarea class="form-control" name="descricao" placeholder="Address" id="descricao" style="height: 100px;" required>' . $noticia->descricao . '</textarea>';
            $resultado .= '<label for="floatingTextarea">Conteúdo curto da Notícia (Breve descrição)*:</label>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<div class="row mb-3">';
            $resultado .= '<div class="col-md-6">';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<input type="text" name="autor" class="form-control" id="floatingCity" placeholder="Autor" value="' . $noticia->nome_usuario . '" disabled required>';
            $resultado .= '<label for="floatingCity">Autor*:</label>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<div class="col-md-6">';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<input type="datetime-local" name="dataAtualiza" class="form-control" id="floatingCity" placeholder="Data e Hora" value="' . $noticia->dtCadastro . '" required>';
            $resultado .= '<label for="floatingCity">Data de Atualização*:</label>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<div class="row mb-3">';
            $resultado .= '<div class="col-md-6">';
            $resultado .= '<div class="form-floating">';
            $resultado .= '<select class="form-select" id="floatingSelect" aria-label="State" name="categoria" required>';
            $resultado .= '<option value="' . $noticia->id_categoria . '" selected disabled>' . $noticia->nome . '</option>';
            foreach ($dados as $lerCategoria) :
                $resultado .= '<option value="' . $lerCategoria->id_categoria . '">' . $lerCategoria->nome . '</option>';
            endforeach;
            $resultado .= '</select>';
            $resultado .= '<label for="floatingSelect">Categoria da Notícia*:</label>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '</div>';
            $resultado .= '<hr>';
            $resultado .= '<div class="row">
                            <div class="col-6">
                                <label for="floatingSelect">Foto de Destaque*:</label>
                                <div class="form-floating">
                                    <input class="form-control" type="file" name="fotoDestaque" accept=".jpg, .jpeg, .png" id="destaqueInput" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <img id="destaqueImg" src="' . URL . '/public/uploads/noticias/' . $noticia->img_Noticia . '" alt="Imagem Destaque" width="50%">
                                </div>
                            </div>
                            </div>';
            $resultado .= '<hr>';
            $resultado .= '<div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="State" name="membro" required>
                                        <option value="' . $noticia->id_membro . '" selected disabled>' . $noticia->nome_membro . '</option>';
            foreach ($membros as $lerMembro) :
                $resultado .= '<option value="' . $lerMembro->id_membro . '">' . $lerMembro->nome_membro . '</option>';
            endforeach;
            $resultado .= '     </select>
                            <label for="floatingSelect">Membro da Direção*:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Título" style="height: 100px;" name="comentarioTec" required>' . $noticia->comentario . '</textarea>
                                        <label for="floatingCity">Comentário Técnico*:</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Título" id="meta-titulo" style="height: 100px;" name="metaTitulo" disabled></textarea>
                                        <label for="floatingCity">Meta-Título*:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Meta-Keywords" id="floatingTextarea"
                                            style="height: 100px;" name="metaChave" required>' . $noticia->metaKey . '</textarea>
                                    <label for="floatingZip">Meta-Keywords (palavras-chave)*:</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Meta-Decrição" id="meta-descricao"
                                            style="height: 100px;" name="metaDescricao" disabled></textarea>
                                    <label for="floatingZip">Meta-Descrição*:</label>
                                </div>
                            </div>
                            </div>
                            <div class="alert alert-warning mb-3" role="alert">
                                As <strong>palavras-chave</strong> devem ser separadas por ",". Exemplo: notícia,Adesc,online
                            </div>';

            echo $resultado;
        }
    }
    //Chamada para página de Notícia
    public function noticia()
    {
        $buscar = ' ';
        $resultBusca = $this->usuarioModel->exibirNoticias($buscar);

        $dados = [
            'buscar' => $resultBusca,
            'exibirNoticias' => $this->usuarioModel->exibirNoticias($buscar),
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
            'exibirDirecao' => $this->usuarioModel->exibirDirecao(),
        ];

        $this->view('admin/noticias', $dados);
    }
    //Chamada para página de Sobre-nós
    public function sobre()
    {
        $dados = [
            'infoSobre' => $this->usuarioModel->listarSobre(),
        ];
        $this->view('admin/sobre', $dados);
    }
    //Chamada para página de BID
    public function BID()
    {
        $buscar = ' ';
        $resultBusca = $this->usuarioModel->exibirAtletas($buscar);
        $dados = [
            'buscar' => $resultBusca,
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
        ];

        $this->view('admin/BID', $dados);
    }

    public function editarEstatisticas()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $dados = [

                'id' => trim($formulario['ano']),

                'qtdJogos' => trim($formulario['quantidadeJogos']),
                'qtdGols' => trim($formulario['golsMarcados']),
                'vitorias' => trim($formulario['vitorias']),
                'empates' => trim($formulario['empates']),
                'derrotas' => trim($formulario['derrotas']),
                'faltas' => trim($formulario['faltas']),
                'cartoesV' => trim($formulario['cartoesVermelhos']),
                'cartoesA' => trim($formulario['cartoesAmarelos']),
                'torneios' => trim($formulario['torneios']),
                'amistosos' => trim($formulario['amistosos']),
                'upload_erro' => '',
            ];        
        endif;  
        //echo $dados['derrotas'];
        $this->usuarioModel->editarEstatistica($dados);       
    }
    public function detalheAtleta($idInscricao)
    {
        $dados = [
            'exibirJogador' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];

        // Obtém a data de nascimento do atleta
        $dataNascimento = $dados['exibirJogador']->dtNascimento_atleta;

        // Calcula a idade com base na data de nascimento
        function calcularIdade($dataNascimento)
        {
            $dataAtual = new DateTime();
            $dataNascimento = new DateTime($dataNascimento);
            $diferenca = $dataAtual->diff($dataNascimento);
            return $diferenca->y; // Retorna apenas os anos de diferença
        }

        // Exibe a idade do atleta
        $idade = calcularIdade($dataNascimento);
        $dados['idade'] = $idade . ' anos';

        $this->view('admin/BID_visualizar', $dados);
    }

    public function editarAtleta($idInscricao)
    {
        $dados = [
            'exibirJogador' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];

        // Obtém a data de nascimento do atleta
        $dataNascimento = $dados['exibirJogador']->dtNascimento_atleta;
        $anoEstatistica = $dados['exibirJogador']->anoAtual;
        $ano = date("Y", strtotime($anoEstatistica));

        // Calcula a idade com base na data de nascimento
        function calcularI($dataNascimento)
        {
            $dataAtual = new DateTime();
            $dataNascimento = new DateTime($dataNascimento);
            $diferenca = $dataAtual->diff($dataNascimento);
            return $diferenca->y; // Retorna apenas os anos de diferença
        }

        // Exibe a idade do atleta
        $idade = calcularI($dataNascimento);
        $dados['idade'] = $idade;

        // Aqui você pode adicionar a lógica para buscar os anos do banco de dados e exibi-los como opções no select
        $anos = $this->usuarioModel->buscarAnoEstatistica($ano); // Função hipotética para buscar os anos do banco de dados
        $dados['anos'] = $anos;

        $this->view('admin/BID_editar', $dados);
    }
    public function editarDadosAtleta()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idAtleta = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['fotoPerfil']['tmp_name'] ? $_FILES['fotoPerfil'] : null;

            $dados = [
                'nomeAtleta' => trim($formulario['nomeUser']),
                'dtNascimento' => trim($formulario['dataNascimento']),
                'genero' => trim($formulario['genero']),
                'nomeEscola' => trim($formulario['nomeEscola']),
                'nivelEscolar' => trim($formulario['nivel']),
                'turmaEscolar' => trim($formulario['turma']),
                'turnoEscolar' => trim($formulario['turno']),
                'enderecoEscola' => trim($formulario['enderecoEcola']),
                'numeroEscola' => trim($formulario['numero']),
                'nomeMae' => trim($formulario['nomeMae']),
                'telMae' => trim($formulario['telMae']),
                'nomePai' => trim($formulario['nomePai']),
                'telPai' => trim($formulario['telPai']),
                'idAtleta' => $idAtleta,
                'upload_erro' => '',
            ];

        

            if (!empty($foto)) :
                $foto = $_FILES['fotoPerfil']['tmp_name'];

                // Diretório onde as fotos são armazenadas
                $diretorio = 'uploads/atletas/';

                // Nome do arquivo
                $nomeArquivo = $_FILES['fotoPerfil']['name'];
                // Mover a foto para o diretório especificado
                move_uploaded_file($foto, $diretorio . $nomeArquivo);

                // Caminho completo da imagem original
                $caminhoOriginal = $diretorio . $nomeArquivo;
                $novoNome = 'atleta.webp';

                $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                // Verificar se a extensão é suportada (por exemplo, 'webp')
                if ($extensao == 'webp') :
                    // Obter o número da sequência
                    $sequencia = 1;

                    // Verificar se já existem arquivos com a sequência atual
                    while (file_exists($diretorio . 'atleta-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                        // Incrementar a sequência
                        $sequencia++;
                    }

                    // Criar o novo nome de arquivo com base na sequência
                    $novoNome = 'atleta-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                endif;
                // Caminho completo da imagem redimensionada
                $caminhoRedimensionado = $diretorio . $novoNome;
                // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                $imagemRedimensionada = imagecreatetruecolor(300, 300);
                imagesavealpha($imagemRedimensionada, true);
                $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                imagefill($imagemRedimensionada, 0, 0, $transparente);

                // Carregar a imagem original com base na sua extensão
                $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));
                switch ($extensao):
                    case 'png':
                        $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                        break;
                    case 'jpg':
                    case 'jpeg':
                        $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                        break;
                    case 'webp':
                        $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                        break;
                    default:
                        // Tipo de imagem não suportado
                        exit;
                endswitch;

                // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 300, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

                // Salvar a imagem redimensionada no diretório preservando a transparência
                imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                // Liberar a memória
                imagedestroy($imagemOriginal);
                imagedestroy($imagemRedimensionada);

                // Remover a imagem antiga do diretório
                if (file_exists($caminhoOriginal)) :
                    unlink($caminhoOriginal);
                endif;

                // Atualizar o nome da foto redimensionada no banco de dados
                $dados['fotoPerfil'] = $novoNome;
            else :
                $resultado = $this->usuarioModel->exibirAtleta($idAtleta);
                $dados['fotoPerfil'] = $resultado->foto_atleta;
            endif;
            // Realizar as operações necessárias para editar
            $this->usuarioModel->editarAtleta($dados);
        else :
            $dados = [
                'nomeAtleta' => '',
                'dtNascimento' => '',
                'genero' => '',
                'nomeEscola' => '',
                'nivelEscolar' => '',
                'turmaEscolar' => '',
                'turnoEscolar' => '',
                'enderecoEscola' => '',
                'numeroEscola' => '',
                'nomeMae' => '',
                'telMae' => '',
                'nomePai' => '',
                'telPai' => '',
                'upload_erro' => '',
                'idAtleta' => '',
            ];
        endif;
        $this->BID();
    }
    public function editarResponsavel($idAtleta)
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $dados = [
                'nR' => trim($formulario['nomeResponsavel']),
                'gP' => trim($formulario['grauParentesco']),
                'tR' => trim($formulario['telResponsavel']),
                'eR' => trim($formulario['enderecoResponsavel']),
                'numR' => trim($formulario['numeroResponsavel']),
                'bR' => trim($formulario['bairroResponsavel']),
                'uR' => trim($formulario['ufResponsavel']),
                'cR' => trim($formulario['cepResponsavel']),
                'cidR' => trim($formulario['cidade']),
                'idAtleta' => $idAtleta,
                'upload_erro' => '',
            ];

            // Realizar as operações necessárias para editar
            $this->usuarioModel->editarResponsavel($dados);
        else :
            $dados = [
                'nR' => '',
                'gP' => '',
                'tR' => '',
                'eR' => '',
                'numR' => '',
                'bR' => '',
                'uR' => '',
                'cR' => '',
                'upload_erro' => '',
                'idAtleta' => '',
            ];
        endif;
        $this->BID();
    }
    public function editarTecnico($idAtleta)
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $dados = [
                'catTec' => trim($formulario['categoria']),
                'nivTec' => trim($formulario['nivelEsportivo']),
                'posPTec' => trim($formulario['posicaoP']),
                'posSTec' => trim($formulario['posicaoS']),
                'altTec' => trim($formulario['altura']),
                'pesoTec' => trim($formulario['peso']),
                'uniTec' => trim($formulario['tamanhoUniforme']),
                'numTec' => trim($formulario['numCalcado']),
                'idAtleta' => $idAtleta,
                'upload_erro' => '',
            ];

            // Realizar as operações necessárias para editar
            $this->usuarioModel->editarTecnico($dados);
        else :
            $dados = [
                'catTec' => '',
                'nivTec' => '',
                'posPTec' => '',
                'posSTec' => '',
                'altTec' => '',
                'pesoTec' => '',
                'uniTec' => '',
                'numTec' => '',
                'upload_erro' => '',
                'idAtleta' => '',
            ];
        endif;
        $this->BID();
    }
    public function dadosEstatistica()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $id = end($parts);
        // Verificar se o ano foi enviado na requisição
        if (isset($_GET['ano'])) {
            $anoSelecionado = $_GET['ano'];

            // Aqui você deve fazer a lógica para obter os dados correspondentes ao ano selecionado
            // Pode ser uma consulta ao banco de dados ou qualquer outra fonte de dados
            $resultBusca = $this->usuarioModel->dadosEstatistica($anoSelecionado, $id);
            $golsPartida = ($resultBusca->quantJogos != 0) ? ($resultBusca->quantGols / $resultBusca->quantJogos) : 0;
            $aproveitamento = $resultBusca->quantVitorias+(0.5*$resultBusca->quantEmpates)*($resultBusca->quantJogos*100);
            $aproveitamentoFormatado = number_format($aproveitamento, 2, ',', '.');
            // Exemplo fictício de dados
            $dados = array(
                'quantidadeJogos' => $resultBusca->quantJogos,
                'golsMarcados' => $resultBusca->quantGols,
                'golsPorPartida' => $golsPartida,
                'vitorias' => $resultBusca->quantVitorias,
                'empates' => $resultBusca->quantEmpates,
                'derrotas' => $resultBusca->quantDerrotas,
                'faltas' => $resultBusca->quantFaltas,
                'cartoesVermelhos' => $resultBusca->quantCartVermelho,
                'cartoesAmarelos' => $resultBusca->quantCartAmarelo,
                'torneios' => $resultBusca->quantTorneio,
                'amistosos' => $resultBusca->quantAmistosos,
                'aproveitamento' => $aproveitamentoFormatado
            );

            // Converter os dados para o formato JSON
            $dadosJson = json_encode($dados);

            // Definir o cabeçalho da resposta como JSON
            header('Content-Type: application/json');

            // Retornar os dados como resposta
            echo $dadosJson;
        }
        $this->editarAtleta($id);
    }
    public function enviarInscricao()
    {

        //Capta os dados do formulário
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $foto = $_FILES['logoPerfil']['tmp_name'];
            $dados = [
                'nome' => trim($formulario['nomeAtleta']),
                'dataNascimento' => trim($formulario['dataAtleta']),
                'sexo' => trim($formulario['genero']),
                'nivel_ensino' => trim($formulario['nivelEscolar']),
                'nomeEscola' => trim($formulario['nomeEscola']),
                'nomeMae' => trim($formulario['nomeMae']),
                'nomePai' => trim($formulario['nomePai']),
                'telRespon' => trim($formulario['telResponsavel']),
                'categoria_esportiva' => trim($formulario['categoria_esportiva']),
                'posicao' => trim($formulario['posicao']),
                'altura' => trim($formulario['alturaAtleta']),
                'message' => trim($formulario['message']),
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nome'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    $foto = $_FILES['logoPerfil']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/atletas/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['logoPerfil']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'atleta.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'atleta-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'atleta-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(300, 300);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 300, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['fotoPerfil'] = $novoNome;
                else :
                    $dados['fotoPerfil'] = 'semfoto.webp';
                endif;

                $this->model('modelo');
                $modelo = new Modelo();

                $modelo->cadastrarInscricao($dados['nivel_ensino'], $dados['fotoPerfil'], $dados['nomeEscola'], $dados['nomeMae'], $dados['nomePai'], $dados['altura'], $dados['telRespon'], $dados['categoria_esportiva'], $dados['posicao'], $dados['nome'], $dados['dataNascimento'], $dados['sexo'], $dados['message']);
                header('Location: ' . URL . '/admin/BID');

            endif;
        else :

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

        // header('Location:'.URL);

    }
    //Chamada para página de Fotos
    public function fotos()
    {
        $buscar = '';
        $resultBusca = $this->usuarioModel->buscarFoto($buscar);
        $dados = [
            'exibirFotos' => $resultBusca,
        ];
        $this->view('admin/galeria_foto', $dados);
    }
    public function exibirBuscaFoto()
    {
        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->buscarFoto($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('Busca', 'Nenhum registro foi encontrado para o atleta <b>' . $buscar . '</b>!', 'alert alert-danger');
            endif;

            $dados = [
                'exibirFotos' => $resultBusca,
            ];

            $this->view('admin/galeria_foto', $dados);

        endif;

    }
    public function cadastrarImagem(){
        
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['nomeImagem']['tmp_name'] ? $_FILES['nomeImagem'] : null;

            $dados = [
                'tituloImg' => trim($formulario['tituloImg']),
                'descricaoImg' => trim($formulario['descricaoImg']),
                'exibirImg' => trim($formulario['exibirImg']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    $foto = $_FILES['nomeImagem']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/fotos/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['nomeImagem']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'galeria-foto.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'galeria-foto-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'galeria-foto-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(1200, 800);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 1200, 800, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['nomeImagem'] = $novoNome;
                else :
                    $dados['nomeImagem'] = $this->usuarioModel->exibirFotos()->foto_galeria;
                endif;
            endif;
            $this->usuarioModel->cadastrarFoto($dados);
            $this->fotos();
        else :
            $dados = [
                'tituloImg' => '',
                'descricaoImg' => '',
                'exibirImg' => '',
                'upload_erro' => '',
            ];
        endif;
    }
    public function editFoto($idFoto){

        $dados = [
            'exibirFoto' => $this->usuarioModel->exibirFoto($idFoto),
        ];
        $this->view('admin/galeria_foto_editar', $dados);

    }
    public function excluirFoto(){

        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $fotoId = $_POST['user_id'];
            $nomeFoto = $_POST['user_name'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->excluirFoto($nomeFoto, $fotoId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }

    }
    public function editarFoto(){

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idFoto = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['nomeImagem']['tmp_name'] ? $_FILES['nomeImagem'] : null;

            $dados = [
                'tituloImg' => trim($formulario['tituloImg']),
                'descricaoImg' => trim($formulario['descricaoImg']),
                'exibirImg' => trim($formulario['exibirImg']),
                'idFoto' => $idFoto,
                'upload_erro' => '',
            ];

            if (!empty($foto)) :
                $foto = $_FILES['nomeImagem']['tmp_name'];

                // Diretório onde as fotos são armazenadas
                $diretorio = 'uploads/fotos/';

                // Nome do arquivo
                $nomeArquivo = $_FILES['nomeImagem']['name'];
                // Mover a foto para o diretório especificado
                move_uploaded_file($foto, $diretorio . $nomeArquivo);

                // Caminho completo da imagem original
                $caminhoOriginal = $diretorio . $nomeArquivo;
                $novoNome = 'galeria-foto.webp';

                $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                // Verificar se a extensão é suportada (por exemplo, 'webp')
                if ($extensao == 'webp') :
                    // Obter o número da sequência
                    $sequencia = 1;

                    // Verificar se já existem arquivos com a sequência atual
                    while (file_exists($diretorio . 'galeria-foto-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                        // Incrementar a sequência
                        $sequencia++;
                    }

                    // Criar o novo nome de arquivo com base na sequência
                    $novoNome = 'galeria-foto-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                endif;
                // Caminho completo da imagem redimensionada
                $caminhoRedimensionado = $diretorio . $novoNome;
                // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                $imagemRedimensionada = imagecreatetruecolor(1200, 800);
                imagesavealpha($imagemRedimensionada, true);
                $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                imagefill($imagemRedimensionada, 0, 0, $transparente);

                // Carregar a imagem original com base na sua extensão
                $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));
                switch ($extensao):
                    case 'png':
                        $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                        break;
                    case 'jpg':
                    case 'jpeg':
                        $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                        break;
                    case 'webp':
                        $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                        break;
                    default:
                        // Tipo de imagem não suportado
                        exit;
                endswitch;

                // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 1200, 800, imagesx($imagemOriginal), imagesy($imagemOriginal));

                // Salvar a imagem redimensionada no diretório preservando a transparência
                imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                // Liberar a memória
                imagedestroy($imagemOriginal);
                imagedestroy($imagemRedimensionada);

                // Remover a imagem antiga do diretório
                if (file_exists($caminhoOriginal)) :
                    unlink($caminhoOriginal);
                endif;

                // Atualizar o nome da foto redimensionada no banco de dados
                $dados['nomeImagem'] = $novoNome;
            else :
                $resultado = $this->usuarioModel->exibirFoto($idFoto);
                $dados['nomeImagem'] = $resultado->foto_galeria;
            endif;
            // Realizar as operações necessárias para editar
            $this->usuarioModel->editarFoto($dados);

        else :
            $dados = [
                'tituloImg' => '',
                'descricaoImg' => '',
                'exibirImg' => '',
                'upload_erro' => '',
            ];
        endif;
        $this->fotos();
    }
    //Chamada para página de Categoria de Esportes
    public function esportes()
    {
        $dados = [
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
        ];
        $this->view('admin/categoria_esportiva', $dados);
    }
    public function cadastrarCategoria(){

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $dados = [
                'categoria' => trim($formulario['categoria']),
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                $this->usuarioModel->cadastrarCategoria($dados);
            endif;
        endif;
        $this->esportes();

    }
    public function editCategoria($id){
        $dados = [
            'exibirCategorias' => $this->usuarioModel->exibirCategoria($id),
        ];
        $this->view('admin/categoria_esportiva_editar', $dados);
    }
    public function editarCategoria($id){

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $dados = [
                'categoria' => trim($formulario['categoria']),
                'id' => $id,
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                $this->usuarioModel->editarCategoria($dados);
            endif;
        endif;
        $this->esportes();

    }
    public function excluirCategoria(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $fotoId = $_POST['user_id'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->excluirCategoria($fotoId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    //Chamada para página de Diretoria
    public function diretoria()
    {
        $buscar = '';
        $resultBusca = $this->usuarioModel->buscarMembro($buscar);
        $dados = [
            'exibirDirecao' => $resultBusca,
        ];
        $this->view('admin/diretoria', $dados);
    }
    public function exibirBuscaMembro(){

        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->buscarMembro($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('BuscaMembro', 'Nenhum registro foi encontrado para o atleta <b>' . $buscar . '</b>!', 'alert alert-danger');
            endif;

            $dados = [
                'exibirDirecao' => $resultBusca,
            ];
            $this->view('admin/diretoria', $dados);
        else:
            $resultBusca = $this->usuarioModel->buscarMembro($buscar);
            $dados = [
                'exibirDirecao' => $resultBusca,
            ];
            $this->view('admin/diretoria', $dados);
        endif;

    }
    public function cadastrarMembro(){
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['nomeImagem']['tmp_name'] ? $_FILES['nomeImagem'] : null;

            $dados = [
                'nomeMembro' => trim($formulario['nomeMembro']),
                'funcao' => trim($formulario['funcao']),
                'descricao' => trim($formulario['descricao']),
                'linkFacebook' => trim($formulario['linkFacebook']),
                'linkInstagram' => trim($formulario['linkInstagram']),
                'linkLinkedin' => trim($formulario['linkLinkedin']),
                'linkTikTok' => trim($formulario['linkTikTok']),
                'linkTwitter' => trim($formulario['linkTwitter']),
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    $foto = $_FILES['nomeImagem']['tmp_name'];
                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/direcao/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['nomeImagem']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'membro.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'membro-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'membro-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(300, 300);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));

                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 300, 300, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['nomeImagem'] = $novoNome;
                else :
                    $dados['nomeImagem'] = 'semfoto.webp';
                endif;
            endif;
            $this->usuarioModel->cadastrarMembro($dados);
            $this->diretoria();
        else :
            $dados = [
                'nomeMembro' => '',
                'funcao' => '',
                'descricao' => '',
                'linkFacebook' => '',
                'linkInstagram' => '',
                'linkLinkedin' => '',
                'linkTikTok' => '',
                'linkTwitter' => '',
                'upload_erro' => '',
            ];
        endif;
    }
    public function editMembro($id){
        $dados = [
            'exibirDirecao' => $this->usuarioModel->exibirMembro($id),
        ];
        $this->view('admin/diretoria_editar', $dados);
    }
    public function editarMembro(){

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $id = end($parts);

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($formulario)) :

            $foto = $_FILES['nomeImagem']['tmp_name'] ? $_FILES['nomeImagem'] : null;

            $dados = [
                'nomeMembro' => trim($formulario['nomeMembro']),
                'funcao' => trim($formulario['funcao']),
                'descricao' => trim($formulario['descricao']),
                'linkFacebook' => trim($formulario['linkFacebook']),
                'linkInstagram' => trim($formulario['linkInstagram']),
                'linkLinkedin' => trim($formulario['linkLinkedin']),
                'linkTikTok' => trim($formulario['linkTikTok']),
                'linkTwitter' => trim($formulario['linkTwitter']),
                'idMembro' => $id,
                'upload_erro' => '',
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nomePatrocinador'])) :
                    $dados['nomeUser_erro'] = 'Preencha o campo Nome Completo';
                endif;

                if (empty($formulario['linkPatrocinador'])) :
                    $dados['telUser_erro'] = 'Preencha o campo Telefone';
                endif;
            else :
                if (!empty($foto)) :
                    
                    $foto = $_FILES['nomeImagem']['tmp_name'];

                    // Diretório onde as fotos são armazenadas
                    $diretorio = 'uploads/direcao/';

                    // Nome do arquivo
                    $nomeArquivo = $_FILES['nomeImagem']['name'];
                    // Mover a foto para o diretório especificado
                    move_uploaded_file($foto, $diretorio . $nomeArquivo);

                    // Caminho completo da imagem original
                    $caminhoOriginal = $diretorio . $nomeArquivo;
                    $novoNome = 'membro.webp';

                    $extensao = strtolower(pathinfo($novoNome, PATHINFO_EXTENSION));
                    // Verificar se a extensão é suportada (por exemplo, 'webp')
                    if ($extensao == 'webp') :
                        // Obter o número da sequência
                        $sequencia = 1;

                        // Verificar se já existem arquivos com a sequência atual
                        while (file_exists($diretorio . 'membro-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp')) {
                            // Incrementar a sequência
                            $sequencia++;
                        }

                        // Criar o novo nome de arquivo com base na sequência
                        $novoNome = 'membro-' . str_pad($sequencia, 2, '0', STR_PAD_LEFT) . '.webp';
                    endif;
                    // Caminho completo da imagem redimensionada
                    $caminhoRedimensionado = $diretorio . $novoNome;
                    // Criar uma nova imagem com as dimensões desejadas e fundo transparente
                    $imagemRedimensionada = imagecreatetruecolor(225, 225);
                    imagesavealpha($imagemRedimensionada, true);
                    $transparente = imagecolorallocatealpha($imagemRedimensionada, 0, 0, 0, 127);
                    imagefill($imagemRedimensionada, 0, 0, $transparente);

                    // Carregar a imagem original com base na sua extensão
                    $extensao = strtolower(pathinfo($caminhoOriginal, PATHINFO_EXTENSION));
                    switch ($extensao):
                        case 'png':
                            $imagemOriginal = imagecreatefrompng($caminhoOriginal);
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $imagemOriginal = imagecreatefromjpeg($caminhoOriginal);
                            break;
                        case 'webp':
                            $imagemOriginal = imagecreatefromwebp($caminhoOriginal);
                            break;
                        default:
                            // Tipo de imagem não suportado
                            exit;
                    endswitch;

                    // Redimensionar a imagem original para a nova imagem mantendo o fundo transparente
                    imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 225, 225, imagesx($imagemOriginal), imagesy($imagemOriginal));

                    // Salvar a imagem redimensionada no diretório preservando a transparência
                    imagewebp($imagemRedimensionada, $caminhoRedimensionado);

                    // Liberar a memória
                    imagedestroy($imagemOriginal);
                    imagedestroy($imagemRedimensionada);

                    // Remover a imagem antiga do diretório
                    if (file_exists($caminhoOriginal)) :
                        unlink($caminhoOriginal);
                    endif;

                    // Atualizar o nome da foto redimensionada no banco de dados
                    $dados['nomeImagem'] = $novoNome;
                else :
                    $resultado = $this->usuarioModel->exibirMembro($id);
                    $dados['nomeImagem'] = $resultado->fotoMembro;

                endif;
            endif;
            $this->usuarioModel->editarMembro($dados);
            $this->diretoria();
        else :
            $dados = [
                'nomeMembro' => '',
                'funcao' => '',
                'descricao' => '',
                'linkFacebook' => '',
                'linkInstagram' => '',
                'linkLinkedin' => '',
                'linkTikTok' => '',
                'linkTwitter' => '',
                'upload_erro' => '',
            ];
        endif;
    }
    public function desligarMembro(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $membroId = $_POST['user_id'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->desabilitarMembro($membroId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    public function ativarMembro(){
        // Verificar se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter o ID do patrocinador a ser excluído
            $membroId = $_POST['user_id'];

            // Realizar as operações necessárias para excluir o patrocinador com o ID fornecido
            $this->usuarioModel->ativarMembro($membroId);

            // Simular uma resposta de sucesso (você deve ajustar isso de acordo com a sua lógica de exclusão)
            $response = array(
                'success' => true
            );

            // Enviar a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // Responder com um erro se a requisição não for do tipo POST
            header('HTTP/1.1 405 Method Not Allowed');
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Método não permitido'));
        }
    }
    //Chamada para página de Inscrições
    public function inscricao()
    {
        $dados = [
            'infoInscricao' => $this->usuarioModel->lerInscricao(),
            'nomeUser_erro' => '',
            'cpfUser_erro' => '',
            'telUser_erro' => '',
            'funcaoUser_erro' => '',
            'emailUser_erro' => '',
            'senhaUser_erro' => '',
        ];
        $this->view('admin/inscricoes', $dados);
    }
    public function buscar()
    {
        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('Busca', 'Nenhum registro foi encontrado para ' . $buscar . '!', 'alert alert-danger');
            endif;

            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        else :
            $resultBusca = $this->usuarioModel->busInscNome($buscar);
            $dados = [
                'buscar' => $resultBusca,
                'totalInscri' => $this->usuarioModel->contagemInscri(),
                'totalUser' => $this->usuarioModel->totalAdms(),
                'totalFunc' => $this->usuarioModel->totalFuncionarios('tbl_membro'),
                'totalAtletas' => $this->usuarioModel->totalAtletas(),
                'infoInscricao' => $this->usuarioModel->lerInscricao(),
            ];

            $this->view('admin/painel', $dados);
        endif;
    }
    public function buscarNoticias()
    {
        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->exibirNoticias($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('Busca', 'Nenhum registro foi encontrado para notícia <b>' . $buscar . '</b>!', 'alert alert-danger');
            endif;

            $dados = [
                'buscar' => $resultBusca,
                'exibirNoticias' => $this->usuarioModel->exibirNoticias($buscar),
                'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
                'exibirDirecao' => $this->usuarioModel->exibirDirecao(),
            ];

            $this->view('admin/noticias', $dados);

        endif;
    }
    public function buscarBID()
    {
        $buscar = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
        if (!empty($buscar)) :
            $resultBusca = $this->usuarioModel->exibirAtletas($buscar);
            if ($resultBusca == Null) :
                Sessao::mensagem('Busca', 'Nenhum registro foi encontrado para o atleta <b>' . $buscar . '</b>!', 'alert alert-danger');
            endif;

            $dados = [
                'buscar' => $resultBusca,
                'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
            ];

            $this->view('admin/BID', $dados);

        endif;
    }
    public function aceitarSolicitacao($idInscricao)
    {
        $dados = [
            'editarStatus' => $this->usuarioModel->statusAtivo($idInscricao),
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
        Url::redirecionar('admin/detalheInscricao/' . $idInscricao);
        #header("Location: ".URL."/admin/detalhe_inscricao");
    }
    public function rejeitarSolicitacao($idInscricao)
    {
        $dados = [
            'editarStatus' => $this->usuarioModel->statusRejeitado($idInscricao),
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
        Url::redirecionar('admin/detalheInscricao/' . $idInscricao);
        #header("Location: ".URL."/admin/detalhe_inscricao");
    }
    public function desligamentoSolicitacao($idInscricao)
    {
        $dados = [
            'editarStatus' => $this->usuarioModel->statusDesligado($idInscricao),
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
        Url::redirecionar('admin/detalheInscricao/' . $idInscricao);
    }
    public function detalheInscricao($idInscricao)
    {
        $dados = [
            'individualInsc' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
            'cpfUser_erro' => '',
            'telUser_erro' => '',
            'funcaoUser_erro' => '',
            'emailUser_erro' => '',
            'senhaUser_erro' => '',
        ];
        $this->view('admin/detalhe_inscricao', $dados);
    }
    public function perfil(){
        $dados=[
            'usuario' => $this->usuarioModel->exibirUser($_SESSION['id_user']),
        ];
        $this->view('admin/perfil', $dados);
    }
    //Ativação da Conta do Novo usuário
    public function ativarConta()
    {
        $this->chave = filter_input(INPUT_GET, "chave", FILTER_DEFAULT);
        if (!empty($this->chave)) :
            $ativarUsuario = new Modelo();
            $ativarUsuario->validarChave($this->chave);
            $urlDestino = URL . "/paginas/login";
            header("Location: " . $urlDestino);
        else :
            $urlDestino = URL . "/paginas/login";
            header("Location: " . $urlDestino);
        endif;
    }
    //Página de erro 404
    public function erro()
    {

        $this->view('admin/erros/Admerro');
    }
}
