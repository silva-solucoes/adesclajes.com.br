<?php
include_once('src/PHPMailer.php');
include_once('src/SMTP.php');
include_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Usuario
{
    private $bd;
    private $resultado;
    public function __construct()
    {
        $this->bd = new Conn();
    }

    public function lerUsuario($nome)
    {
        $this->bd->query("SELECT *
        FROM tbl_usuario
        INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao
        WHERE (tbl_usuario.nome_usuario LIKE CONCAT('%', :nome, '%'))
        ORDER BY CASE WHEN tbl_usuario.status = 1 THEN 0 ELSE 1 END, tbl_usuario.id_usuario DESC");
        $this->bd->bind('nome', $nome);

        return $this->bd->resultados();
    }
    public function exibirUser($id){
        $this->bd->query("SELECT *
        FROM tbl_usuario
        INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao
        WHERE tbl_usuario.id_usuario = :id
        ORDER BY tbl_usuario.id_usuario DESC");
        $this->bd->bind('id', $id);

        return $this->bd->resultado();
    }
    public function totalAdms()
    {
        $this->bd->query("SELECT COUNT(*) AS quantidade
        FROM tbl_usuario
        INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao
        WHERE tbl_funcao.nome_status = 'Admin' AND tbl_usuario.status = 1");
        return $this->bd->resultado();
    }
    public function totalFuncionarios($tabela)
    {
        return $this->bd->totalRegistros($tabela);
    }
    public function totalAtletas()
    {
        $this->bd->query('SELECT COUNT(*) AS total FROM tbl_incricao WHERE tbl_incricao.situacao_atleta = 1');

        return $this->bd->resultado()->total;
    }
    public function lerFuncoes()
    {
        $this->bd->query('SELECT * FROM tbl_funcao');
        return $this->bd->resultados();
    }
    public function checarEmail($email)
    {
        $this->bd->query("SELECT email_usuario FROM tbl_usuario WHERE email_usuario = :e");
        $this->bd->bind(":e", $email);

        if ($this->bd->resultado()) :
            return false;
        else :
            return true;
        endif;
    }

    public function armazenar($dados)
    {

        $this->bd->query('INSERT INTO tbl_usuario (nome_usuario, foto_user, cpf_cnpj, telefone_usuario, email_usuario, senha_usuario, chave_ativae, dtexpiracao, dt_edicao, dt_criacao, id_funcao) VALUES (:nome_usuario, :foto_user, :cpf_cnpj, :telefone_usuario, :email_usuario, :senha_usuario, :chave_ativae, :dtexpiracao, :dt_edicao, :dt_criacao, :id_funcao)');

        $this->bd->bind('nome_usuario', $dados['nomeUser']);
        $this->bd->bind('foto_user', $dados['nomeImagem']);
        $this->bd->bind('cpf_cnpj', $dados['cpfUser']);
        $this->bd->bind('telefone_usuario', $dados['telUser']);
        $this->bd->bind('email_usuario', $dados['emailUser']);
        $this->bd->bind('senha_usuario', $dados['senhaCripto']);
        $this->bd->bind('chave_ativae', $dados['chave_ativar']);
        $this->bd->bind('dtexpiracao', $dados['dtAtual']);
        $this->bd->bind('dt_edicao', $dados['dtAtual']);
        $this->bd->bind('dt_criacao', $dados['dtAtual']);
        $this->bd->bind('id_funcao', $dados['funcaoUser']);

        if ($this->bd->executa()) :
            return true;
        else :
            return false;
        endif;
    }
    public function editarUser($dados)
    {
        $this->bd->query('UPDATE tbl_usuario
                  SET nome_usuario = :nome_usuario, foto_user = :foto_user, cpf_cnpj = :cpf_cnpj, telefone_usuario = :telefone_usuario, email_usuario = :email_usuario, senha_usuario = :senha_usuario, dt_edicao = :dt_edicao
                  WHERE id_usuario = :id_usuario');

        $this->bd->bind(':nome_usuario', $dados['nomeUser']);
        $this->bd->bind(':foto_user', $dados['fotoPerfil']);
        $this->bd->bind(':cpf_cnpj', $dados['cpfUser']);
        $this->bd->bind(':telefone_usuario', $dados['telUser']);
        $this->bd->bind(':email_usuario', $dados['emailUser']);
        $this->bd->bind(':senha_usuario', $dados['senhaCripto']);
        $this->bd->bind(':dt_edicao', $dados['dtAtual']);
        $this->bd->bind(':id_usuario', $dados['idUser']);

        if ($this->bd->executa()) :
            return true;
        else :
            return false;
        endif;
    }
    public function ativarUser($id){
        $this->bd->query('UPDATE tbl_usuario SET status = :st WHERE id_usuario = :idUsuario');
        $this->bd->bind(':st', 1);
        $this->bd->bind(':idUsuario', $id);

        if ($this->bd->executa()) :
            Sessao::mensagem('ativarUser', '<b>Usuário foi Ativado!</b>');
            return true;
        else :
            Sessao::mensagem('ativarUser', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function desabilitarUser($id){
        $this->bd->query('UPDATE tbl_usuario SET status = :st WHERE id_usuario = :idUsuario');
        $this->bd->bind(':st', 2);
        $this->bd->bind(':idUsuario', $id);

        if ($this->bd->executa()) :
            Sessao::mensagem('desligarUser', '<b>Usuário foi desligado!</b>');
            return true;
        else :
            Sessao::mensagem('desligarUser', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function autenticarLogin($email, $senha)
    {
        $this->bd->query("SELECT * FROM tbl_usuario INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao WHERE email_usuario = :e LIMIT 1");
        $this->bd->bind(":e", $email);

        if ($this->bd->resultado()) :
            if ($this->validarSit()) :
                $this->resultado = $this->bd->resultado();
                if (password_verify($senha, $this->resultado->senha_usuario)) :
                    return $this->resultado;
                else :
                    return false;
                endif;
            endif;
        else :
            return false;
        endif;
    }

    private function validarSit()
    {
        $this->resultado = $this->bd->resultado();
        if ($this->resultado->status != 1) {
            Sessao::mensagem('usuario', '<b>O usuário não foi ativado.</b><br> Caso não tenha recebido o e-mail de ativação, por favor, solicite o envio de um novo e-mail.', 'alert alert-danger');
            return false;
        } else {
            return true;
        }
    }

    public function recuperar($email)
    {
        $this->bd->query("SELECT * FROM tbl_usuario INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao WHERE email_usuario = :e LIMIT 1");
        $this->bd->bind(":e", $email);

        $resultado = $this->bd->resultado();
        $emailRecu = $resultado->email_usuario;
        $nomeRecu = $resultado->nome_usuario;

        if ($this->bd->resultado()) :
            if ($resultado->status != 1) :
                Sessao::mensagem('recuperarConta', '<b>Este e-mail ainda não foi ativado.</b><br> Por favor, entre em contato com o administrador para solicitar o reenvio do link de ativação da sua conta.', 'alert alert-danger');
                return false;
            else :
                $senha_padrao = password_hash('adesc@lajes1997', PASSWORD_DEFAULT);
                $idUsuario = $resultado->id_usuario;
                $this->bd->query('UPDATE tbl_usuario SET tbl_usuario.senha_usuario = :senhaPadrao, tbl_usuario.dt_edicao = NOW() WHERE tbl_usuario.id_usuario = :id');

                $this->bd->bind(':senhaPadrao', $senha_padrao);
                $this->bd->bind(':id', $idUsuario);

                if ($this->bd->executa()) :
                    //Enviar e-mail de credenciais
                    $this->enviarRecuperacao($emailRecu, $nomeRecu);
                    Sessao::mensagem('usuario', '<b>Senha foi alterada!</b><br> A senha foi enviada para o seu e-mail.');
                    return true;
                else :
                    Sessao::mensagem('usuario', '<b>Erro:</b> Não foi possível alterar!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        else :
            Sessao::mensagem('recuperarConta', '<b>E-mail não cadastrado.</b><br> Por favor, verifique se o e-mail informado está correto.', 'alert alert-danger');
        endif;
    }

    public function enviarRecuperacao($email, $nome)
    {
        $resultado = $this->bd->resultado();
        $nome = $resultado->nome_usuario;
        $mail = new PHPMailer(true);

        try {
            #$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'b37f9d489ed790';
            $mail->Password = '24566e2fa66e36';
            $mail->Port = 587;

            $mail->setFrom('adesclajes1997@gmail.com');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'CONTA ADESC - Recuperação de Conta';
            $mail->Body = "Prezado(a) " . $nome . ",<br><br><b>CREDENCIAIS DE ACESSO</b><br>E-mail: {$email}<br>Senha: adesc@lajes1997<br><br><b>ALERTA DE SEGURANÇA</b><br><h3>Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.</h3><br><br>Desejamos uma ótima experiência em nosso site.<br><br>Atenciosamente,<br>
			Diretoria da ADESC Lajes.";
            $mail->AltBody = "Prezado(a)" . $nome . ",
			CREDENCIAIS DE ACESSO
            E-mail: {$email}
            Senha: adesc@lajes1997
            ALERTA DE SEGURANÇA
            Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.
            Desejamos uma ótima experiência em nosso site.
            Atenciosamente,
			Diretoria da ADESC Lajes.";

            if ($mail->send()) {
            } else {
                echo 'Email nao enviado';
            }
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    }
    public function lerInscricao()
    {
        $this->bd->query('SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_atleta.id_escola = tbl_detalheescolar.id_escolar
        INNER JOIN tbl_detalhefiliacao ON tbl_atleta.id_filiacao = tbl_detalhefiliacao.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_atleta.id_responsavel = tbl_detalhesresponsavel.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_atleta.id_detalheTec = tbl_detalhetecnicos.id_tecnico
        INNER JOIN tbl_incricao ON tbl_atleta.id_atleta = tbl_incricao.id_atleta
        INNER JOIN categorianoticia ON tbl_detalhetecnicos.categoriaEsportiva=categorianoticia.id_categoria
        ORDER BY tbl_atleta.id_atleta DESC');
        return $this->bd->resultados();
    }
    public function busInscNome($nome)
    {
        $this->bd->query("SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_atleta.id_escola = tbl_detalheescolar.id_escolar
        INNER JOIN tbl_detalhefiliacao ON tbl_atleta.id_filiacao = tbl_detalhefiliacao.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_atleta.id_responsavel = tbl_detalhesresponsavel.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_atleta.id_detalheTec = tbl_detalhetecnicos.id_tecnico
        INNER JOIN tbl_incricao ON tbl_atleta.id_atleta = tbl_incricao.id_atleta
        INNER JOIN categorianoticia ON tbl_detalhetecnicos.categoriaEsportiva = categorianoticia.id_categoria
        WHERE (tbl_atleta.nome_atleta LIKE CONCAT('%', :nome, '%'))
        AND tbl_incricao.situacao_atleta = 2
        GROUP BY tbl_atleta.id_atleta
        ORDER BY tbl_atleta.id_atleta DESC");
        $this->bd->bind('nome', $nome);

        return $this->bd->resultados();
    }
    public function contagemInscri()
    {
        $this->bd->query('SELECT COUNT(tbl_incricao.id_atleta) AS total_inscricoes FROM tbl_incricao WHERE tbl_incricao.situacao_atleta=2');
        return $this->bd->resultado();
    }
    public function exibirInscricao($idInscricao)
    {
         
        $this->bd->query('SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_atleta.id_escola = tbl_detalheescolar.id_escolar
        INNER JOIN tbl_detalhefiliacao ON tbl_atleta.id_filiacao = tbl_detalhefiliacao.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_atleta.id_responsavel = tbl_detalhesresponsavel.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_atleta.id_detalheTec = tbl_detalhetecnicos.id_tecnico
        INNER JOIN tbl_incricao ON tbl_atleta.id_atleta = tbl_incricao.id_atleta
        INNER JOIN categorianoticia ON tbl_detalhetecnicos.categoriaEsportiva=categorianoticia.id_categoria
        INNER JOIN tbl_estatisticas ON tbl_estatisticas.id_atleta = tbl_atleta.id_atleta
        INNER JOIN tbl_estatisticas_old ON tbl_estatisticas_old.id_atleta = tbl_atleta.id_atleta
        WHERE tbl_incricao.id_inscricao = :idInscricao
        ORDER BY tbl_atleta.id_atleta DESC');
        $this->bd->bind('idInscricao', $idInscricao);
        
        return $this->bd->resultado();
    }
    public function listarSobre()
    {
        $this->bd->query("SELECT * FROM tbl_sobre");

        return $this->bd->resultado();
    }

    public function statusAtivo($idInscricao)
    {
        $statusAceito = 1;
        $this->bd->query('UPDATE tbl_incricao SET tbl_incricao.situacao_atleta=:statusAceito, tbl_incricao.dt_edicao = NOW() WHERE tbl_incricao.id_inscricao = :id');
        $this->bd->bind(':statusAceito', $statusAceito);
        $this->bd->bind(':id', $idInscricao);
        if ($this->bd->executa()) :
            Sessao::mensagem('situacao', '<b>Status foi alterado!</b><br> Entre em contato com o novo atleta para marcar o primeiro encontro e finalizar informações no BID.');
            return true;
        else :
            Sessao::mensagem('situacao', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function statusRejeitado($idInscricao)
    {
        $statusAceito = 3;
        $this->bd->query('UPDATE tbl_incricao SET tbl_incricao.situacao_atleta=:statusAceito, tbl_incricao.dt_edicao = NOW() WHERE tbl_incricao.id_inscricao = :id');
        $this->bd->bind(':statusAceito', $statusAceito);
        $this->bd->bind(':id', $idInscricao);
        if ($this->bd->executa()) :
            Sessao::mensagem('situacao', '<b>Status foi alterado!</b><br> Entre em contato com o responsável do atleta e explicar o motivo dessa decisão.', 'alert alert-danger');
            return true;
        else :
            Sessao::mensagem('situacao', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function statusDesligado($idInscricao)
    {
        $statusAceito = 4;
        $this->bd->query('UPDATE tbl_incricao SET tbl_incricao.situacao_atleta=:statusAceito, tbl_incricao.dt_edicao = NOW() WHERE tbl_incricao.id_inscricao = :id');
        $this->bd->bind(':statusAceito', $statusAceito);
        $this->bd->bind(':id', $idInscricao);
        if ($this->bd->executa()) :
            Sessao::mensagem('situacao', '<b>Status foi alterado!</b><br> Atleta foi desligado da ADESC.', 'alert alert-danger');
            return true;
        else :
            Sessao::mensagem('situacao', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function exibirPatrocinadores()
    {
        $this->bd->query("SELECT * FROM tbl_secaopatrocinadores ORDER BY tbl_secaopatrocinadores.id_secaoPatrocinio DESC");

        return $this->bd->resultados();
    }

    public function lerPatrocinador($idPatro)
    {
        $this->bd->query('SELECT * FROM tbl_secaopatrocinadores WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :idPatro');
        $this->bd->bind('idPatro', $idPatro);

        return $this->bd->resultado();
    }

    public function cadastrarPatrocinador($dados)
    {

        $this->bd->query('INSERT INTO tbl_secaopatrocinadores (nomePatrocinador, img_patrocinio, link_acesso)
        VALUES (:nome, :imagem, :link)');

        $this->bd->bind(':nome', $dados['nomePatro']);
        $this->bd->bind(':imagem', $dados['fotoPatrocinador']);
        $this->bd->bind(':link', $dados['linkPatro']);

        if ($this->bd->executa()) :
            Sessao::mensagem('patrocinador', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('patrocinador', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarPatrocinador($dados)
    {

        $this->bd->query('UPDATE tbl_secaopatrocinadores 
        SET tbl_secaopatrocinadores.nomePatrocinador = :nome, 
        tbl_secaopatrocinadores.img_patrocinio = :imagem,
        tbl_secaopatrocinadores.link_acesso = :link 
        WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :id');

        $this->bd->bind(':nome', $dados['nomePatro']);
        $this->bd->bind(':imagem', $dados['fotoPatrocinador']);
        $this->bd->bind(':link', $dados['linkPatro']);
        $this->bd->bind(':id', $dados['idPatro']);

        if ($this->bd->executa()) :
            Sessao::mensagem('patrocinador', '<b>Patrocinador foi alterado!</b>');
            return true;
        else :
            Sessao::mensagem('patrocinador', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function excluirPatrocinador($nomeFoto, $idPatro)
    {

        $this->bd->query('DELETE FROM tbl_secaopatrocinadores WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :id');

        $this->bd->bind(':id', $idPatro);

        if ($this->bd->executa()) :
            // Excluir a imagem do diretório
            $caminhoImagem = 'images/patrocinadores/' . $nomeFoto; // Substitua pelo caminho correto da imagem
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
            Sessao::mensagem('patrocinador', '<b>Patrocinador foi excluido!</b>');
            return true;
        else :
            Sessao::mensagem('patrocinador', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function editarLogoSite($foto)
    {
        $this->bd->query('UPDATE tbl_infoheader
        SET logoHeaderFooter = :foto 
        WHERE tbl_infoheader.id_infoHeader = 1');

        $this->bd->bind(':foto', 'logo-' . $foto);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarFavicon($dados)
    {
        $this->bd->query('UPDATE tbl_infoheader
        SET favicon = :foto 
        WHERE tbl_infoheader.id_infoHeader = 1');

        $this->bd->bind(':foto', $dados['fotoFavicon']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarDetalhes($dados)
    {
        $this->bd->query('UPDATE tbl_secaodestaque
        SET titulo_destaque = :titulo, sub_titulo_destaque = :subTitulo, incorporarVideo = :link, imgDestaque = :foto 
        WHERE tbl_secaodestaque.id_secaoDestaque = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':subTitulo', $dados['subTitulo']);
        $this->bd->bind(':link', $dados['linkVideo']);
        $this->bd->bind(':foto', $dados['fotoDestaque']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarUltima($dados)
    {
        $this->bd->query('UPDATE tbl_ultimasnoticias
        SET tl_pgUltimas = :titulo, sub_tlPgUltimas = :descricao 
        WHERE tbl_ultimasnoticias.id_ultimas = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarSobre($dados)
    {
        $this->bd->query('UPDATE tbl_sobre
        SET tl_pgSobre = :titulo, sub_tlSobre = :descricao 
        WHERE tbl_sobre.id_sobre = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarEscolha($dados)
    {
        $this->bd->query('UPDATE tbl_secaoescolher
        SET tituloEscolha = :titulo, subTituloEscolha = :descricao 
        WHERE tbl_secaoescolher.id_escolher = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarAcao($dados)
    {
        $this->bd->query('UPDATE tbl_config
        SET logoAcao = :foto
        WHERE tbl_config.id_config = 1');

        $this->bd->bind(':foto', $dados['fotoAcao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarDiretoria($dados)
    {
        $this->bd->query('UPDATE tbl_diretoria
        SET tl_pgEquipe = :titulo, sub_tlEquipe = :descricao
        WHERE tbl_diretoria.id_equipe = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarPF($dados)
    {
        $this->bd->query('UPDATE tbl_perguntas
        SET tl_pagPerguntas = :titulo, sub_tlPerguntas = :descricao
        WHERE tbl_perguntas.id_perguntas = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarContato($dados)
    {
        $this->bd->query('UPDATE tbl_contatos
        SET tl_contato = :titulo, sub_tlContato = :descricao
        WHERE tbl_contatos.id_contato = 1');

        $this->bd->bind(':titulo', $dados['titulo']);
        $this->bd->bind(':descricao', $dados['descricao']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarRodape($dados)
    {
        $this->bd->query('UPDATE tbl_config
        SET logradouro = :logradouro, numero = :numero, bairro = :bairro, cidade = :cidade, uf = :uf, cep = :cep, telefone = :telefone, email = :email, localizacaoIFRAM = :localizacaoIFRAM
        WHERE tbl_config.id_config = 1');

        $this->bd->bind(':logradouro', $dados['endereco']);
        $this->bd->bind(':numero', $dados['numero']);
        $this->bd->bind(':bairro', $dados['bairro']);
        $this->bd->bind(':cidade', $dados['cidade']);
        $this->bd->bind(':uf', $dados['uf']);
        $this->bd->bind(':cep', $dados['cep']);
        $this->bd->bind(':telefone', $dados['telefone']);
        $this->bd->bind(':email', $dados['email']);
        $this->bd->bind(':localizacaoIFRAM', $dados['mapa']);

        if ($this->bd->executa()) :
            $this->bd->query('SELECT * FROM tbl_redessociais WHERE id_config = 1');

            foreach ($this->bd->resultados() as $rede) {
                if ($rede->nomeRede == 'Facebook') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['facebook']);
                    $this->bd->bind(':nomeRede', 'Facebook');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'Instagram') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['instagram']);
                    $this->bd->bind(':nomeRede', 'Instagram');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'Youtube') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['youtube']);
                    $this->bd->bind(':nomeRede', 'Youtube');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'Whatsapp') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['whatsapp']);
                    $this->bd->bind(':nomeRede', 'Whatsapp');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'Linkedin') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['linkedin']);
                    $this->bd->bind(':nomeRede', 'Linkedin');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'TikToke') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['tiktok']);
                    $this->bd->bind(':nomeRede', 'TikTok');
                    $this->bd->executa();
                endif;
                if ($rede->nomeRede == 'Twitter') :
                    $this->bd->query('UPDATE tbl_redessociais
                    SET link_acesso = :linkAcesso
                    WHERE nomeRede = :nomeRede');

                    $this->bd->bind(':linkAcesso', $dados['twitter']);
                    $this->bd->bind(':nomeRede', 'Twitter');
                    $this->bd->executa();
                endif;
            }
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarInfoInscricao($dados)
    {
        $this->bd->query('UPDATE tbl_config
        SET dt_abe_inscricao = :dataInicio, dt_enc_Inscricao = :dataFim
        WHERE tbl_config.id_config = 1');

        $this->bd->bind(':dataInicio', $dados['dataInicio']);
        $this->bd->bind(':dataFim', $dados['dataEncerramento']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarContSobre($dados)
    {
        $this->bd->query('UPDATE tbl_sobre
        SET resumo = :conteudo1, historia = :conteudo2
        WHERE tbl_sobre.id_sobre = 1');

        $this->bd->bind(':conteudo1', $dados['conteudo1']);
        $this->bd->bind(':conteudo2', $dados['conteudo2']);

        if ($this->bd->executa()) :
            Sessao::mensagem('config', '<b>Logo do site foi atualizada!</b>');
            return true;
        else :
            Sessao::mensagem('config', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function exibirNoticias($nome)
    {
        $this->bd->query("SELECT n.*, u.*, un.*, cn.*, ct.*
        FROM tbl_noticias AS n
        JOIN tbl_usuario AS u ON n.id_autor = u.id_usuario
        JOIN tbl_ultimasnoticias AS un ON n.id_ultimas = un.id_ultimas
        JOIN categorianoticia AS cn ON n.id_categoria = cn.id_categoria
        JOIN tbl_coment_tecnico AS ct ON n.id_coment_tec = ct.id_coment_tec
        WHERE (n.tl_noticia LIKE CONCAT('%', :nome, '%'))
        ORDER BY n.id_noticia DESC");
        $this->bd->bind('nome', $nome);
        return $this->bd->resultados();
    }

    public function exibirCategorias()
    {
        $this->bd->query('SELECT * FROM categorianoticia ORDER BY id_categoria DESC');
        return $this->bd->resultados();
    }

    public function exibirCategoria($idCat)
    {
        $this->bd->query('SELECT * FROM categorianoticia WHERE id_categoria = :id ORDER BY id_categoria DESC');
        $this->bd->bind('id', $idCat);
        return $this->bd->resultado();
    }

    public function cadastrarNoticias($dados)
    {
        //Destroi o relacionamento
        $this->bd->query('ALTER TABLE tbl_noticias
        DROP FOREIGN KEY tbl_noticias_ibfk_3');
        if ($this->bd->executa()) :
            //Cria um novo relacionamento com retrição de delete em retrict
            $this->bd->query('ALTER TABLE tbl_noticias
            ADD CONSTRAINT tbl_noticias_ibfk_3
            FOREIGN KEY (id_coment_tec)
            REFERENCES tbl_coment_tecnico(id_coment_tec)
            ON DELETE RESTRICT');
            if ($this->bd->executa()) :
                $this->bd->query('INSERT INTO tbl_coment_tecnico (comentario, id_membro)
                VALUES (:comentario, :idMembro)');
                $this->bd->bind(':comentario', $dados['comentarioTec']);
                $this->bd->bind(':idMembro', $dados['membro']);

                if ($this->bd->executa()) :
                    $this->bd->query('SELECT tbl_coment_tecnico.id_coment_tec FROM tbl_coment_tecnico');
                    $id_ComentarioTec = $this->bd->ultimoIdInserido();

                    $this->bd->query('INSERT INTO tbl_noticias (tl_noticia, img_Noticia, descricao, conteudo, dtAtualizacao, dtCadastro, id_autor, id_ultimas, id_categoria, id_coment_tec, metaTitulo, metaDescricao, metaKey)
                    VALUES (:titulo, :imagem, :descricao, :conteudo, :dtAtualizacao, :dtCadastro, :autor, :idUltimas, :categoria, :idComentTec, :metaTitulo, :metaDescricao, :metaKey)');

                    $this->bd->bind(':titulo', $dados['titulo']);
                    $this->bd->bind(':imagem', $dados['fotoDestaque']);
                    $this->bd->bind(':descricao', $dados['descricao']);
                    $this->bd->bind(':conteudo', $dados['conteudo']);
                    $this->bd->bind(':dtAtualizacao', $dados['dataPublic']);
                    $this->bd->bind(':dtCadastro', $dados['dataPublic']);
                    $this->bd->bind(':autor', $dados['autor']);
                    $this->bd->bind(':idUltimas', 1);
                    $this->bd->bind(':categoria', $dados['categoria']);
                    $this->bd->bind(':idComentTec', $id_ComentarioTec);
                    $this->bd->bind(':metaTitulo', $dados['metaTitulo']);
                    $this->bd->bind(':metaDescricao', $dados['metaDescricao']);
                    $this->bd->bind(':metaKey', $dados['metaChave']);

                    if ($this->bd->executa()) :
                        Sessao::mensagem('cadastroNoticia', '<b>Patrocinador foi Cadastrado!</b>');
                        return true;
                    else :
                        Sessao::mensagem('cadastroNoticia', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
                        return false;
                    endif;
                else :
                    Sessao::mensagem('cadastroNoticia', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        endif;
    }
    public function editarNoticias($dados)
    {
        //Destroi o relacionamento
        $this->bd->query('ALTER TABLE tbl_noticias
        DROP FOREIGN KEY tbl_noticias_ibfk_3');
        if ($this->bd->executa()) :
            //Cria um novo relacionamento com retrição de delete em retrict
            $this->bd->query('ALTER TABLE tbl_noticias
            ADD CONSTRAINT tbl_noticias_ibfk_3
            FOREIGN KEY (id_coment_tec)
            REFERENCES tbl_coment_tecnico(id_coment_tec)
            ON DELETE RESTRICT');
            if ($this->bd->executa()) :
                $this->bd->query('UPDATE tbl_coment_tecnico SET comentario = :comentario WHERE id_membro = :idMembro');
                $this->bd->bind(':comentario', $dados['comentarioTec']);
                $this->bd->bind(':idMembro', $dados['membro']);

                if ($this->bd->executa()) :
                    $this->bd->query('SELECT tbl_coment_tecnico.id_coment_tec FROM tbl_coment_tecnico WHERE id_membro = :id');
                    $this->bd->bind(':id', $dados['membro']);

                    $id_Coment = $this->bd->resultado();;

                    $this->bd->query('UPDATE tbl_noticias SET
                        tl_noticia = :titulo,
                        img_Noticia = :imagem,
                        descricao = :descricao,
                        conteudo = :conteudo,
                        dtAtualizacao = :dtAtualizacao,
                        id_autor = :autor,
                        id_ultimas = :idUltimas,
                        id_categoria = :categoria,
                        id_coment_tec = :idComentTec,
                        metaTitulo = :metaTitulo,
                        metaDescricao = :metaDescricao,
                        metaKey = :metaKey
                        WHERE id_noticia = :idNoticia');

                    $this->bd->bind(':idNoticia', $dados['idNoticia']);
                    $this->bd->bind(':titulo', $dados['titulo']);
                    $this->bd->bind(':imagem', $dados['fotoDestaque']);
                    $this->bd->bind(':descricao', $dados['descricao']);
                    $this->bd->bind(':conteudo', $dados['conteudo']);
                    $this->bd->bind(':dtAtualizacao', $dados['dataPublic']);
                    $this->bd->bind(':autor', $dados['autor']);
                    $this->bd->bind(':idUltimas', 1);
                    $this->bd->bind(':categoria', $dados['categoria']);
                    $this->bd->bind(':idComentTec', $id_Coment->id_coment_tec);
                    $this->bd->bind(':metaTitulo', $dados['metaTitulo']);
                    $this->bd->bind(':metaDescricao', $dados['metaDescricao']);
                    $this->bd->bind(':metaKey', $dados['metaChave']);

                    if ($this->bd->executa()) :
                        Sessao::mensagem('cadastroNoticia', '<b>Patrocinador foi Cadastrado!</b>');
                        return true;
                    else :
                        Sessao::mensagem('cadastroNoticia', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
                        return false;
                    endif;
                else :
                    Sessao::mensagem('cadastroNoticia', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        endif;
    }
    public function excluirNoticia($nomeFoto, $idNoticia)
    {
        //Destroi o relacionamento
        $this->bd->query('ALTER TABLE tbl_noticias
        DROP FOREIGN KEY tbl_noticias_ibfk_3');
        if ($this->bd->executa()) :
            //Cria um novo relacionamento com retrição de delete em Cascata
            $this->bd->query('ALTER TABLE tbl_noticias
            ADD CONSTRAINT tbl_noticias_ibfk_3
            FOREIGN KEY (id_coment_tec)
            REFERENCES tbl_coment_tecnico(id_coment_tec)
            ON DELETE CASCADE');
            if ($this->bd->executa()) :
                $this->bd->query('DELETE FROM tbl_noticias WHERE id_noticia = :id');
                $this->bd->bind(':id', $idNoticia);

                if ($this->bd->executa()) :

                    // Excluir a imagem do diretório
                    $caminhoImagem = 'uploads/noticias/' . $nomeFoto; // Substitua pelo caminho correto da imagem

                    if (file_exists($caminhoImagem)) :
                        unlink($caminhoImagem);
                    endif;

                    Sessao::mensagem('noticiaExcluida', '<b>Notícia foi excluída!</b>');
                    return true;
                else :
                    Sessao::mensagem('noticiaExcluida', '<b>Erro:</b> Não foi possível excluir a notícia!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        endif;
    }
    public function exibirNoticia($idNoticia)
    {

        $this->bd->query('SELECT n.*, u.*, un.*, cn.*, ct.*, m.* 
        FROM tbl_noticias AS n 
        JOIN tbl_usuario AS u ON n.id_autor = u.id_usuario 
        JOIN tbl_ultimasnoticias AS un ON n.id_ultimas = un.id_ultimas 
        JOIN categorianoticia AS cn ON n.id_categoria = cn.id_categoria 
        JOIN tbl_coment_tecnico AS ct ON n.id_coment_tec = ct.id_coment_tec 
        JOIN tbl_membro AS m ON m.id_membro = ct.id_membro 
        WHERE n.id_noticia = :id ORDER BY n.id_noticia DESC');

        $this->bd->bind(':id', $idNoticia);
        return $this->bd->resultado();
    }
    public function exibirDirecao()
    {
        $this->bd->query('SELECT *
        FROM tbl_membro
        JOIN tbl_redesocialmembro AS rsm ON rsm.id_rede = tbl_membro.id_membro
        JOIN tbl_diretoria AS d ON d.id_equipe = tbl_membro.id_equipe
        ORDER BY tbl_membro.id_membro DESC');
        return $this->bd->resultados();
    }
    public function exibirAtletas($nome)
    {
        $this->bd->query("SELECT * FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_detalheescolar.id_escolar = tbl_atleta.id_escola
        INNER JOIN tbl_detalhefiliacao ON tbl_detalhefiliacao.id_filiacao = tbl_atleta.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_detalhesresponsavel.id_responsavel = tbl_atleta.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_detalhetecnicos.id_tecnico = tbl_atleta.id_detalheTec
        INNER JOIN tbl_incricao ON tbl_incricao.id_atleta = tbl_atleta.id_atleta
        INNER JOIN tbl_estatisticas ON tbl_estatisticas.id_atleta = tbl_atleta.id_atleta
        WHERE (tbl_atleta.nome_atleta LIKE CONCAT('%', :nome, '%')) AND tbl_incricao.situacao_atleta = 1 GROUP BY tbl_atleta.id_atleta
        ORDER BY  tbl_incricao.id_inscricao DESC");
        $this->bd->bind('nome', $nome);

        return $this->bd->resultados();
    }
    public function mostrarAtleta()
    {
        $this->bd->query("SELECT * FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_detalheescolar.id_escolar = tbl_atleta.id_escola
        INNER JOIN tbl_detalhefiliacao ON tbl_detalhefiliacao.id_filiacao = tbl_atleta.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_detalhesresponsavel.id_responsavel = tbl_atleta.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_detalhetecnicos.id_tecnico = tbl_atleta.id_detalheTec
        INNER JOIN tbl_incricao ON tbl_incricao.id_atleta = tbl_atleta.id_atleta
        INNER JOIN tbl_estatisticas ON tbl_estatisticas.id_atleta = tbl_atleta.id_atleta
        WHERE tbl_incricao.situacao_atleta = 1 GROUP BY tbl_atleta.id_atleta
        ORDER BY  tbl_incricao.id_inscricao DESC");

        return $this->bd->resultados();
    }
    public function exibirAtleta($idAtleta)
    {
        $this->bd->query("SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_detalheescolar.id_escolar = tbl_atleta.id_escola
        INNER JOIN tbl_detalhefiliacao ON tbl_detalhefiliacao.id_filiacao = tbl_atleta.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_detalhesresponsavel.id_responsavel = tbl_atleta.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_detalhetecnicos.id_tecnico = tbl_atleta.id_detalheTec
        INNER JOIN tbl_incricao ON tbl_incricao.id_atleta = tbl_atleta.id_atleta
        INNER JOIN tbl_estatisticas ON tbl_estatisticas.id_atleta = tbl_atleta.id_atleta
        WHERE (tbl_atleta.id_atleta = :id AND tbl_incricao.situacao_atleta = 1)
        GROUP BY tbl_atleta.id_atleta
        ORDER BY tbl_incricao.id_inscricao DESC");
        $this->bd->bind('id', $idAtleta);

        return $this->bd->resultado();
    }
    public function editarAtleta($dados)
    {
        $this->bd->query('SELECT * FROM tbl_atleta WHERE tbl_atleta.id_atleta = :id');
        $this->bd->bind(':id', $dados['idAtleta']);
        if ($this->bd->resultado()) :
            $idEscola = $this->bd->resultado()->id_escola;
            $idFiliacao = $this->bd->resultado()->id_filiacao;
            $nomeFoto = $this->bd->resultado()->foto_atleta;

            //Escola
            $this->bd->query('UPDATE tbl_detalheescolar SET nomeEscolar = :nomeEscola, turma = :turma, turno = :turno, nivelEnsino = :nivel, logradouro = :endereco, nLogradouro = :num WHERE id_escolar = :id');
            $this->bd->bind(':nomeEscola', $dados['nomeEscola']);
            $this->bd->bind(':turma', $dados['turmaEscolar']);
            $this->bd->bind(':turno', $dados['turnoEscolar']);
            $this->bd->bind(':nivel', $dados['nivelEscolar']);
            $this->bd->bind(':endereco', $dados['enderecoEscola']);
            $this->bd->bind(':num', $dados['numeroEscola']);
            $this->bd->bind(':id', $idEscola);

            if ($this->bd->executa()) :

                //Filiação
                $this->bd->query('UPDATE tbl_detalhefiliacao SET nomeMae_atleta = :nomeMae, celularMae_atleta = :telMae, nomePai_atleta = :nomePai, celularPai_atleta = :telPai WHERE id_filiacao = :id');
                $this->bd->bind(':nomeMae', $dados['nomeMae']);
                $this->bd->bind(':telMae', $dados['telMae']);
                $this->bd->bind(':nomePai', $dados['nomePai']);
                $this->bd->bind(':telPai', $dados['telPai']);
                $this->bd->bind(':id', $idFiliacao);

                if ($this->bd->executa()) :

                    //Pessoais
                    $this->bd->query('UPDATE tbl_atleta SET nome_atleta = :nomeAtleta, foto_atleta = :foto, dtNascimento_atleta = :dtNascimento, sexo_atleta = :genero WHERE id_atleta = :id');
                    $this->bd->bind(':nomeAtleta', $dados['nomeAtleta']);
                    $this->bd->bind(':foto', $dados['fotoPerfil']);
                    $this->bd->bind(':dtNascimento', $dados['dtNascimento']);
                    $this->bd->bind(':genero', $dados['genero']);
                    $this->bd->bind(':id', $dados['idAtleta']);

                    if ($this->bd->executa()) :
                        // Definir o fuso horário para o Horário Oficial de Brasília
                        date_default_timezone_set('America/Sao_Paulo');

                        // Obter a data e hora atual no Horário Oficial de Brasília
                        $dataHoraAtual = date('Y-m-d H:i:s');
                        $this->bd->query('UPDATE tbl_incricao SET dt_edicao = :dataAtual WHERE id_atleta = :id');
                        $this->bd->bind(':dataAtual', $dataHoraAtual);
                        $this->bd->bind(':id', $dados['idAtleta']);
                        $this->bd->executa();

                        Sessao::mensagem('editarAtleta', '<b>Dados dos atletas foram atualizados!</b>');

                        return true;
                    else :
                        Sessao::mensagem('editarAtleta', '<b>Erro:</b> Não foi possível alterar os dados!', 'alert alert-danger');
                        return false;
                    endif;
                endif;
            endif;
        endif;
    }
    public function editarResponsavel($dados)
    {

        $this->bd->query('SELECT * FROM tbl_atleta WHERE tbl_atleta.id_atleta = :id');
        $this->bd->bind(':id', $dados['idAtleta']);

        if ($this->bd->resultado()) :
            $idResponsavel = $this->bd->resultado()->id_responsavel;
            //Responsável
            $this->bd->query('UPDATE tbl_detalhesresponsavel SET nomeResponsavel = :nomeR, celularResponsavel = :telR, grauParentesco = :grauP, logradouraResponsavel = :lR, nLougradoura = :nR, bairro = :bairro, cidadeR = :cid, uf = :ufR, cep = :cepR WHERE id_responsavel = :id');
            $this->bd->bind(':nomeR', $dados['nR']);
            $this->bd->bind(':telR', $dados['tR']);
            $this->bd->bind(':grauP', $dados['gP']);
            $this->bd->bind(':lR', $dados['eR']);
            $this->bd->bind(':nR', $dados['numR']);
            $this->bd->bind(':bairro', $dados['bR']);
            $this->bd->bind('cid', $dados['cidR']);
            $this->bd->bind(':ufR', $dados['uR']);
            $this->bd->bind(':cepR', $dados['cR']);
            $this->bd->bind(':id', $idResponsavel);
            if ($this->bd->executa()) :
                // Definir o fuso horário para o Horário Oficial de Brasília
                date_default_timezone_set('America/Sao_Paulo');

                // Obter a data e hora atual no Horário Oficial de Brasília
                $dataHoraAtual = date('Y-m-d H:i:s');
                $this->bd->query('UPDATE tbl_incricao SET dt_edicao = :dataAtual WHERE id_atleta = :id');
                $this->bd->bind(':dataAtual', $dataHoraAtual);
                $this->bd->bind(':id', $dados['idAtleta']);
                $this->bd->executa();

                Sessao::mensagem('editarAtleta', '<b>Dados dos atletas foram atualizados!</b>');
                return true;
            else :
                Sessao::mensagem('editarAtleta', '<b>Erro:</b> Não foi possível alterar os dados!', 'alert alert-danger');
                return false;
            endif;
        endif;
    }
    public function editarTecnico($dados)
    {
        $this->bd->query('SELECT * FROM tbl_atleta WHERE tbl_atleta.id_atleta = :id');
        $this->bd->bind(':id', $dados['idAtleta']);
        $idSaude = $this->bd->resultado()->id_saude;
        $idTecnico = $this->bd->resultado()->id_detalheTec;
        if ($this->bd->resultado()) :

            //Saúde
            $altura = str_replace(',', '.', $dados['altTec']);
            $peso = str_replace(',', '.', $dados['pesoTec']);

            $this->bd->query('UPDATE tbl_detalhesaude SET altura_atleta = :altura, peso_atleta = :peso WHERE id_saude = :id');
            $this->bd->bind(':altura', $altura);
            $this->bd->bind(':peso', $peso);
            $this->bd->bind(':id', $idSaude);

            if ($this->bd->executa()) :

                $this->bd->query('UPDATE tbl_detalhetecnicos SET categoriaEsportiva = :catTec, nivelEsportivo = :nivTec, posicaoPrincipal = :posPTec, posicaoSecundaria = :posSTec, nUniforme_atleta = :uniTec, nPe_atleta = :numTec  WHERE id_tecnico = :id');
                $this->bd->bind(':catTec', $dados['catTec']);
                $this->bd->bind(':nivTec', $dados['nivTec']);
                $this->bd->bind(':posPTec', $dados['posPTec']);
                $this->bd->bind(':posSTec', $dados['posSTec']);
                $this->bd->bind(':uniTec', $dados['uniTec']);
                $this->bd->bind(':numTec', $dados['numTec']);
                $this->bd->bind(':id', $idTecnico);

                if ($this->bd->executa()) :
                    // Definir o fuso horário para o Horário Oficial de Brasília
                    date_default_timezone_set('America/Sao_Paulo');

                    // Obter a data e hora atual no Horário Oficial de Brasília
                    $dataHoraAtual = date('Y-m-d H:i:s');
                    $this->bd->query('UPDATE tbl_incricao SET dt_edicao = :dataAtual WHERE id_atleta = :id');
                    $this->bd->bind(':dataAtual', $dataHoraAtual);
                    $this->bd->bind(':id', $dados['idAtleta']);
                    $this->bd->executa();

                    Sessao::mensagem('editarAtleta', '<b>Dados dos atletas foram atualizados!</b>');
                    return true;
                else :
                    Sessao::mensagem('editarAtleta', '<b>Erro:</b> Não foi possível alterar os dados!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        endif;
    }
    public function buscarAnoEstatistica($id){
/*               
        $this->bd->query("SELECT ano FROM tbl_atleta INNER JOIN tbl_detalheescolar ON tbl_detalheescolar.id_escolar = tbl_atleta.id_escola INNER JOIN tbl_detalhefiliacao ON tbl_detalhefiliacao.id_filiacao = tbl_atleta.id_filiacao INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude INNER JOIN tbl_detalhesresponsavel ON tbl_detalhesresponsavel.id_responsavel = tbl_atleta.id_responsavel INNER JOIN tbl_detalhetecnicos ON tbl_detalhetecnicos.id_tecnico = tbl_atleta.id_detalheTec INNER JOIN tbl_incricao ON tbl_incricao.id_atleta = tbl_atleta.id_atleta INNER JOIN tbl_estatisticas_old ON tbl_estatisticas_old.id_atleta = tbl_atleta.id_atleta WHERE (tbl_estatisticas_old.id_atleta = :id AND tbl_incricao.situacao_atleta = 1) GROUP BY tbl_atleta.id_atleta ORDER BY tbl_incricao.id_inscricao DESC;");
*/        
        $this->bd->query("SELECT * FROM tbl_estatisticas_old  WHERE tbl_estatisticas_old.id_atleta = :id");
        $this->bd->bind('id', $id);
        
        return $this->bd->resultados();
    }
    public function dadosEstatistica($ano, $idInscricao)
    {
        $idAtleta = $this->exibirInscricao($idInscricao);
        $this->bd->query('SELECT * FROM tbl_estatisticas INNER JOIN tbl_atleta ON tbl_atleta.id_atleta = tbl_estatisticas.id_atleta WHERE  tbl_estatisticas.anoAtual = :ano and tbl_atleta.id_atleta = :id');
        $this->bd->bind('ano', $ano);
        $this->bd->bind('id', $idAtleta->id_atleta);
        return $this->bd->resultado();
    }
    public function exibirFotos()
    {
        $this->bd->query('SELECT * FROM tbl_pagfotos WHERE tbl_pagfotos.exibir = :visivel ORDER BY  tbl_pagfotos.id_pagfotos DESC');
        $this->bd->bind(':visivel', 1);
        return $this->bd->resultados();
    }
    public function exibirFotosAdm()
    {
        $this->bd->query('SELECT * FROM tbl_pagfotos ORDER BY  tbl_pagfotos.id_pagfotos DESC');
        return $this->bd->resultados();
    }
    public function buscarFoto($nome)
    {
        $this->bd->query("SELECT * 
        FROM tbl_pagfotos
        WHERE (tbl_pagfotos.tl_pagFotos LIKE CONCAT('%', :nome, '%'))
        ORDER BY  tbl_pagfotos.id_pagfotos DESC");
        $this->bd->bind('nome', $nome);

        return $this->bd->resultados();
    }
    public function exibirFoto($idFoto)
    {
        $this->bd->query('SELECT * FROM tbl_pagfotos WHERE tbl_pagfotos.id_pagfotos = :id');
        $this->bd->bind(':id', $idFoto);
        return $this->bd->resultado();
    }
    public function cadastrarFoto($dados)
    {

        // Definir o fuso horário para o Horário Oficial de Brasília
        date_default_timezone_set('America/Sao_Paulo');
        // Obter a data e hora atual no Horário Oficial de Brasília
        $dataAtual = date('Y-m-d H:i:s');

        $this->bd->query('INSERT INTO tbl_pagfotos (foto_galeria, tl_pagFotos, descricao_pagFotos, 	exibir, dtAtualizacao)
                    VALUES (:imagem, :titulo, :descricao, :exibirImg, :dataAtual)');

        $this->bd->bind(':titulo', $dados['tituloImg']);
        $this->bd->bind(':imagem', $dados['nomeImagem']);
        $this->bd->bind(':descricao', $dados['descricaoImg']);
        $this->bd->bind(':exibirImg', $dados['exibirImg']);
        $this->bd->bind(':dataAtual', $dataAtual);

        if ($this->bd->executa()) :
            Sessao::mensagem('cadastroFoto', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('cadastroFoto', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function editarFoto($dados)
    {
        // Definir o fuso horário para o Horário Oficial de Brasília
        date_default_timezone_set('America/Sao_Paulo');
        // Obter a data e hora atual no Horário Oficial de Brasília
        $dataAtual = date('Y-m-d H:i:s');

        $this->bd->query('UPDATE tbl_pagfotos
                        SET foto_galeria = :imagem,
                        tl_pagFotos = :titulo,
                        descricao_pagFotos = :descricao,
                        exibir = :exibir,
                        dtAtualizacao = :dataAtual
                        WHERE tbl_pagfotos.id_pagFotos = :id');

        $this->bd->bind(':imagem', $dados['nomeImagem']);
        $this->bd->bind(':titulo', $dados['tituloImg']);
        $this->bd->bind(':descricao', $dados['descricaoImg']);
        $this->bd->bind(':exibir', $dados['exibirImg']);
        $this->bd->bind(':dataAtual', $dataAtual);
        $this->bd->bind(':id', $dados['idFoto']);

        if ($this->bd->executa()) :
            Sessao::mensagem('editarFoto', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('editarFoto', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function excluirFoto($nomeFoto, $idFoto)
    {

        $this->bd->query('DELETE FROM tbl_pagfotos WHERE tbl_pagfotos.id_pagfotos = :id');

        $this->bd->bind(':id', $idFoto);

        if ($this->bd->executa()) :
            // Excluir a imagem do diretório
            $caminhoImagem = 'uploads/fotos/' . $nomeFoto; // Substitua pelo caminho correto da imagem
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
            Sessao::mensagem('patrocinador', '<b>Patrocinador foi excluido!</b>');
            return true;
        else :
            Sessao::mensagem('patrocinador', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function cadastrarCategoria($dados)
    {

        $this->bd->query('INSERT INTO categorianoticia (nome) VALUES (:categoria)');

        $this->bd->bind(':categoria', $dados['categoria']);

        if ($this->bd->executa()) :
            Sessao::mensagem('cadastroCategoria', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('cadastroCategoria', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function editarCategoria($dados)
    {

        $this->bd->query('UPDATE categorianoticia SET nome = :categoria WHERE id_categoria = :id');

        $this->bd->bind(':categoria', $dados['categoria']);
        $this->bd->bind(':id', $dados['id']);

        if ($this->bd->executa()) :
            Sessao::mensagem('editarCategoria', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('editarCategoria', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function excluirCategoria($idCat)
    {

        $this->bd->query('DELETE FROM categorianoticia WHERE categorianoticia.id_categoria = :id');
        $this->bd->bind(':id', $idCat);

        if ($this->bd->executa()) :
            Sessao::mensagem('excluirCat', '<b>Patrocinador foi excluido!</b>');
            return true;
        else :
            Sessao::mensagem('excluirCat', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function buscarMembro($nome)
    {
        $this->bd->query("SELECT * 
        FROM tbl_membro 
        INNER JOIN tbl_redesocialmembro 
        ON tbl_redesocialmembro.id_rede=tbl_membro.id_rede
        WHERE (tbl_membro.nome_membro LIKE CONCAT('%', :nome, '%'))
        ORDER BY tbl_membro.id_membro DESC");
        $this->bd->bind('nome', $nome);

        return $this->bd->resultados();
    }
    public function exibirMembro($id)
    {
        $this->bd->query("SELECT * 
        FROM tbl_membro 
        INNER JOIN tbl_redesocialmembro 
        ON tbl_redesocialmembro.id_rede=tbl_membro.id_rede
        WHERE tbl_membro.id_membro = :id 
        ORDER BY tbl_membro.id_membro DESC");
        $this->bd->bind(':id', $id);
        return $this->bd->resultado();
    }
    public function exibirDirec()
    {
        $this->bd->query('SELECT *
        FROM tbl_membro
        JOIN tbl_redesocialmembro AS rsm ON rsm.id_rede = tbl_membro.id_membro
        JOIN tbl_diretoria AS d ON d.id_equipe = tbl_membro.id_equipe
        ORDER BY tbl_membro.id_membro DESC');
        return $this->bd->resultado();
    }
    public function cadastrarMembro($dados)
    {

        $this->bd->query('INSERT INTO tbl_redesocialmembro (nomeFacebook, link_Facebook, iconeFacebook, nomeInstagram, link_Instagram, iconeInstagram, nomeLinkedin, link_Linkedin, iconeLinkedin, nomeTikTok, link_TikTok, iconeTikTok, nomeTwitter, link_Twitter, iconeTwitter)
             VALUES (:nomeFacebook, :linkFacebook, :iconeFacebook, :nomeInstagram, :linkInstagram, :iconeInstagram, :nomeLinkedin, :linkLinkedin, :iconeLinkedin, :nomeTikTok, :linkTikTok, :iconeTikTok, :nomeTwitter, :linkTwitter, :iconeTwitter)');

        $this->bd->bind(':nomeFacebook', 'Facebook');
        $this->bd->bind(':linkFacebook', $dados['linkFacebook']);
        $this->bd->bind(':iconeFacebook', '<i class="bx bxl-facebook"></i>');

        $this->bd->bind(':nomeInstagram', 'Instagram');
        $this->bd->bind(':linkInstagram', $dados['linkInstagram']);
        $this->bd->bind(':iconeInstagram', '<i class="bx bxl-instagram"></i>');

        $this->bd->bind(':nomeLinkedin', 'LinkedIn');
        $this->bd->bind(':linkLinkedin', $dados['linkLinkedin']);
        $this->bd->bind(':iconeLinkedin', '<i class="bx bxl-linkedin"></i>');

        $this->bd->bind(':nomeTikTok', 'TikTok');
        $this->bd->bind(':linkTikTok', $dados['linkTikTok']);
        $this->bd->bind(':iconeTikTok', '<i class="bx bxl-tiktok"></i>');

        $this->bd->bind(':nomeTwitter', 'Twitter');
        $this->bd->bind(':linkTwitter', $dados['linkTwitter']);
        $this->bd->bind(':iconeTwitter', '<i class="bx bxl-twitter"></i>');

        if ($this->bd->executa()) :

            $idRede = $this->bd->ultimoIdInserido();

            $this->bd->query('INSERT INTO tbl_membro (nome_membro, fotoMembro, funcao, detalhe, id_equipe, id_rede)
             VALUES (:nome, :imagem, :funcao, :descricao, :idEquipe, :idRede)');

            $this->bd->bind(':nome', $dados['nomeMembro']);
            $this->bd->bind(':imagem', $dados['nomeImagem']);
            $this->bd->bind(':funcao', $dados['funcao']);
            $this->bd->bind(':descricao', $dados['descricao']);
            $this->bd->bind(':idEquipe', 1);
            $this->bd->bind(':idRede', $idRede);

            $this->bd->executa();

            Sessao::mensagem('cadastroMembro', '<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else :
            Sessao::mensagem('cadastroMembro', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function editarMembro($dados)
    {

        $this->bd->query("SELECT * 
        FROM tbl_membro 
        INNER JOIN tbl_redesocialmembro 
        ON tbl_redesocialmembro.id_rede=tbl_membro.id_rede
        WHERE tbl_membro.id_membro = :id 
        ORDER BY tbl_membro.id_membro DESC");
        $this->bd->bind(':id', $dados['idMembro']);

        $idRede = $this->bd->resultado()->id_rede;

        if ($this->bd->executa()) :

            $this->bd->query('UPDATE tbl_redesocialmembro
            SET nomeFacebook = :nomeFacebook, link_Facebook = :linkFacebook, iconeFacebook = :iconeFacebook,
                nomeInstagram = :nomeInstagram, link_Instagram = :linkInstagram, iconeInstagram = :iconeInstagram,
                nomeLinkedin = :nomeLinkedin, link_Linkedin = :linkLinkedin, iconeLinkedin = :iconeLinkedin,
                nomeTikTok = :nomeTikTok, link_TikTok = :linkTikTok, iconeTikTok = :iconeTikTok,
                nomeTwitter = :nomeTwitter, link_Twitter = :linkTwitter, iconeTwitter = :iconeTwitter
            WHERE id_rede = :idRede');

            $this->bd->bind(':nomeFacebook', 'Facebook');
            $this->bd->bind(':linkFacebook', $dados['linkFacebook']);
            $this->bd->bind(':iconeFacebook', '<i class="bx bxl-facebook"></i>');
            $this->bd->bind(':nomeInstagram', 'Instagram');
            $this->bd->bind(':linkInstagram', $dados['linkInstagram']);
            $this->bd->bind(':iconeInstagram', '<i class="bx bxl-instagram"></i>');
            $this->bd->bind(':nomeLinkedin', 'Linkedin');
            $this->bd->bind(':linkLinkedin', $dados['linkLinkedin']);
            $this->bd->bind(':iconeLinkedin', '<i class="bx bxl-linkedin"></i>');
            $this->bd->bind(':nomeTikTok', 'TikTok');
            $this->bd->bind(':linkTikTok', $dados['linkTikTok']);
            $this->bd->bind(':iconeTikTok', '<i class="bx bxl-tiktok"></i>');
            $this->bd->bind(':nomeTwitter', 'Twitter');
            $this->bd->bind(':linkTwitter', $dados['linkTwitter']);
            $this->bd->bind(':iconeTwitter', '<i class="bx bxl-twitter"></i>');
            $this->bd->bind(':idRede', $idRede);

            if ($this->bd->executa()) :

                $this->bd->query('UPDATE tbl_membro
                  SET nome_membro = :nome, fotoMembro = :imagem, funcao = :funcao, detalhe = :descricao, id_equipe = :idEquipe, id_rede = :idRede
                  WHERE id_membro = :idMembro');

                $this->bd->bind(':nome', $dados['nomeMembro']);
                $this->bd->bind(':imagem', $dados['nomeImagem']);
                $this->bd->bind(':funcao', $dados['funcao']);
                $this->bd->bind(':descricao', $dados['descricao']);
                $this->bd->bind(':idEquipe', 1);
                $this->bd->bind(':idRede', $idRede);
                $this->bd->bind(':idMembro', $dados['idMembro']);

                if ($this->bd->executa()) :

                    Sessao::mensagem('editarCategoria', '<b>Patrocinador foi Cadastrado!</b>');
                    return true;
                else :
                    Sessao::mensagem('editarCategoria', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        endif;
    }
    public function desabilitarMembro($id)
    {
        $this->bd->query('UPDATE tbl_membro SET statusMembro = :st WHERE id_membro = :idMembro');
        $this->bd->bind(':st', 2);
        $this->bd->bind(':idMembro', $id);

        if ($this->bd->executa()) :
            Sessao::mensagem('desligarMembro', '<b>Membro foi desligado!</b>');
            return true;
        else :
            Sessao::mensagem('desligarMembro', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
    public function ativarMembro($id)
    {
        $this->bd->query('UPDATE tbl_membro SET statusMembro = :st WHERE id_membro = :idMembro');
        $this->bd->bind(':st', 1);
        $this->bd->bind(':idMembro', $id);

        if ($this->bd->executa()) :

            Sessao::mensagem('ativarMembro', '<b>Membro foi ativado!</b>');
            return true;
        else :
            Sessao::mensagem('ativarMembro', '<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }
}
