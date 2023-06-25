<?php
include_once('src/PHPMailer.php');
include_once('src/SMTP.php');
include_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Usuario{
    private $bd;

    public function __construct(){
        $this->bd = new Conn();
    }

    public function lerUsuario(){
        $this->bd->query('SELECT *
        FROM tbl_usuario
        INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao
        ORDER BY tbl_usuario.id_usuario DESC;');
        return $this->bd->resultados();
    }
    public function totalAdms(){
        $this->bd->query("SELECT COUNT(*) AS quantidade
        FROM tbl_usuario
        INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao
        WHERE tbl_funcao.nome_status = 'Admin'");
        return $this->bd->resultado();
    }
    public function totalFuncionarios($tabela){
        return $this->bd->totalRegistros($tabela);
    }
    public function totalAtletas(){
        $this->bd->query('SELECT COUNT(*) AS total FROM tbl_incricao WHERE tbl_incricao.situacao_atleta = 1');
        
        return $this->bd->resultado()->total;
    }
    public function lerFuncoes(){
        $this->bd->query('SELECT * FROM tbl_funcao');
        return $this->bd->resultados();
    }
    public function checarEmail($email){
        $this->bd->query("SELECT email_usuario FROM tbl_usuario WHERE email_usuario = :e");
        $this->bd->bind(":e",$email);

        if($this->bd->resultado()): 
            return true;
        else:
            return false;
        endif;
    }

    public function armazenar($dados){
        
        $this->bd->query('INSERT INTO tbl_usuario (nome_usuario, foto_user, cpf_cnpj, telefone_usuario, email_usuario, senha_usuario, chave_ativae, dtexpiracao, dt_edicao, dt_criacao, id_funcao) VALUES (:nome_usuario, :foto_user, :cpf_cnpj, :telefone_usuario, :email_usuario, :senha_usuario, :chave_ativae, :dtexpiracao, :dt_edicao, :dt_criacao, :id_funcao)');

        $this->bd->bind('nome_usuario', $dados['nomeUser']);
        $this->bd->bind('foto_user', $dados['foto_user']);
        $this->bd->bind('cpf_cnpj', $dados['cpfUser']);
        $this->bd->bind('telefone_usuario', $dados['telUser']);
        $this->bd->bind('email_usuario', $dados['emailUser']);
        $this->bd->bind('senha_usuario', $dados['senhaCripto']);
        $this->bd->bind('chave_ativae', $dados['chave_ativar']);
        $this->bd->bind('dtexpiracao', $dados['dtAtual']);
        $this->bd->bind('dt_edicao', $dados['dtAtual']);
        $this->bd->bind('dt_criacao', $dados['dtAtual']);
        $this->bd->bind('id_funcao', $dados['funcaoUser']);

        if($this->bd->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function autenticarLogin($email, $senha){
        $this->bd->query("SELECT * FROM tbl_usuario INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao WHERE email_usuario = :e LIMIT 1");
        $this->bd->bind(":e",$email);

        if($this->bd->resultado()): 
            if ($this->validarSit()):
                $resultado = $this->bd->resultado();
                if(password_verify($senha, $resultado->senha_usuario)):
                    return $resultado;
                else:
                    return false;
                endif;
            endif;
        else:
            return false;
        endif;
    }

    private function validarSit() {
        $resultado = $this->bd->resultado();
        if ($resultado->status != 1) {
            Sessao::mensagem('usuario','<b>O usuário não foi ativado.</b><br> Caso não tenha recebido o e-mail de ativação, por favor, solicite o envio de um novo e-mail.', 'alert alert-danger');
            return false;
        } else {
            return true;
        }
    }

    public function recuperar($email){
        $this->bd->query("SELECT * FROM tbl_usuario INNER JOIN tbl_funcao ON tbl_funcao.id_funcao = tbl_usuario.id_funcao WHERE email_usuario = :e LIMIT 1");
        $this->bd->bind(":e",$email);

        $resultado = $this->bd->resultado();
        $emailRecu = $resultado->email_usuario;
        $nomeRecu = $resultado->nome_usuario;
        
        if($this->bd->resultado()): 
            if($resultado->status != 1):
                Sessao::mensagem('recuperarConta','<b>Este e-mail ainda não foi ativado.</b><br> Por favor, entre em contato com o administrador para solicitar o reenvio do link de ativação da sua conta.', 'alert alert-danger');
                return false;
            else:
                $senha_padrao = password_hash('adesc@lajes1997', PASSWORD_DEFAULT);
                $idUsuario = $resultado->id_usuario;
                $this->bd->query('UPDATE tbl_usuario SET tbl_usuario.senha_usuario = :senhaPadrao, tbl_usuario.dt_edicao = NOW() WHERE tbl_usuario.id_usuario = :id');
                
                $this->bd->bind(':senhaPadrao', $senha_padrao);
                $this->bd->bind(':id', $idUsuario);

                if ($this->bd->executa()):
                    //Enviar e-mail de credenciais
                    $this->enviarRecuperacao($emailRecu, $nomeRecu);
                    Sessao::mensagem('usuario','<b>Senha foi alterada!</b><br> A senha foi enviada para o seu e-mail.');
                    return true;
                else:
                    Sessao::mensagem('usuario','<b>Erro:</b> Não foi possível alterar!', 'alert alert-danger');
                    return false;
                endif;
            endif;
        else:
            Sessao::mensagem('recuperarConta','<b>E-mail não cadastrado.</b><br> Por favor, verifique se o e-mail informado está correto.', 'alert alert-danger');
        endif;
    }

    public function enviarRecuperacao($email, $nome) {
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
			$mail->Body = "Prezado(a) ".$nome.",<br><br><b>CREDENCIAIS DE ACESSO</b><br>E-mail: {$email}<br>Senha: adesc@lajes1997<br><br><b>ALERTA DE SEGURANÇA</b><br><h3>Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.</h3><br><br>Desejamos uma ótima experiência em nosso site.<br><br>Atenciosamente,<br>
			Diretoria da ADESC Lajes.";
			$mail->AltBody = "Prezado(a)".$nome.",
			CREDENCIAIS DE ACESSO
            E-mail: {$email}
            Senha: adesc@lajes1997
            ALERTA DE SEGURANÇA
            Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.
            Desejamos uma ótima experiência em nosso site.
            Atenciosamente,
			Diretoria da ADESC Lajes.";

			if($mail->send()) {
				
			} else {
				echo 'Email nao enviado';
			}
		} catch (Exception $e) {
			echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
		}
		
	}

    public function lerInscricao(){
        $this->bd->query('SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_atleta.id_escola = tbl_detalheescolar.id_escolar
        INNER JOIN tbl_detalhefiliacao ON tbl_atleta.id_filiacao = tbl_detalhefiliacao.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_atleta.id_responsavel = tbl_detalhesresponsavel.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_atleta.id_detalheTec = tbl_detalhetecnicos.id_tecnico
        INNER JOIN tbl_incricao ON tbl_atleta.id_atleta = tbl_incricao.id_atleta
        INNER JOIN categorianoticia ON tbl_detalhetecnicos.categoriaEsportiva=categorianoticia.id_categoria
        ORDER BY tbl_atleta.id_atleta DESC LIMIT 5');
        return $this->bd->resultados();
    }

    public function busInscNome($nome){
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

    public function contagemInscri(){
        $this->bd->query('SELECT COUNT(tbl_incricao.id_atleta) AS total_inscricoes FROM tbl_incricao WHERE tbl_incricao.situacao_atleta=2');
        return $this->bd->resultado();
    }
    public function exibirInscricao($idInscricao){
        $this->bd->query('SELECT *
        FROM tbl_atleta
        INNER JOIN tbl_detalheescolar ON tbl_atleta.id_escola = tbl_detalheescolar.id_escolar
        INNER JOIN tbl_detalhefiliacao ON tbl_atleta.id_filiacao = tbl_detalhefiliacao.id_filiacao
        INNER JOIN tbl_detalhesaude ON tbl_detalhesaude.id_saude = tbl_atleta.id_saude
        INNER JOIN tbl_detalhesresponsavel ON tbl_atleta.id_responsavel = tbl_detalhesresponsavel.id_responsavel
        INNER JOIN tbl_detalhetecnicos ON tbl_atleta.id_detalheTec = tbl_detalhetecnicos.id_tecnico
        INNER JOIN tbl_incricao ON tbl_atleta.id_atleta = tbl_incricao.id_atleta
        INNER JOIN categorianoticia ON tbl_detalhetecnicos.categoriaEsportiva=categorianoticia.id_categoria
        WHERE tbl_incricao.id_inscricao = :idInscricao
        ORDER BY tbl_atleta.id_atleta DESC');
        $this->bd->bind('idInscricao', $idInscricao);
        return $this->bd->resultado();
    }

    public function listarSobre(){
		$this->bd->query("SELECT * FROM tbl_sobre");

		return $this->bd->resultado();
	}

    public function statusAtivo($idInscricao){
        $statusAceito = 1;
        $this->bd->query('UPDATE tbl_incricao SET tbl_incricao.situacao_atleta=:statusAceito, tbl_incricao.dt_edicao = NOW() WHERE tbl_incricao.id_inscricao = :id');
        $this->bd->bind(':statusAceito', $statusAceito);
        $this->bd->bind(':id', $idInscricao);
        if ($this->bd->executa()):
            Sessao::mensagem('situacao','<b>Status foi alterado!</b><br> Entre em contato com o novo atleta para marcar o primeiro encontro e finalizar informações no BID.');
            return true;
        else:
            Sessao::mensagem('situacao','<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function statusRejeitado($idInscricao){
        $statusAceito = 3;
        $this->bd->query('UPDATE tbl_incricao SET tbl_incricao.situacao_atleta=:statusAceito, tbl_incricao.dt_edicao = NOW() WHERE tbl_incricao.id_inscricao = :id');
        $this->bd->bind(':statusAceito', $statusAceito);
        $this->bd->bind(':id', $idInscricao);
        if ($this->bd->executa()):
            Sessao::mensagem('situacao','<b>Status foi alterado!</b><br> Entre em contato com o responsável do atleta e explicar o motivo dessa decisão.', 'alert alert-danger');
            return true;
        else:
            Sessao::mensagem('situacao','<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function exibirPatrocinadores(){
        $this->bd->query("SELECT * FROM tbl_secaopatrocinadores ORDER BY tbl_secaopatrocinadores.id_secaoPatrocinio DESC");

		return $this->bd->resultados();
    }

    public function lerPatrocinador($idPatro){
        $this->bd->query('SELECT * FROM tbl_secaopatrocinadores WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :idPatro');
        $this->bd->bind('idPatro', $idPatro);

        return $this->bd->resultado();
    }

    public function cadastrarPatrocinador($dados){
        
        $this->bd->query('INSERT INTO tbl_secaopatrocinadores (nomePatrocinador, img_patrocinio, link_acesso)
        VALUES (:nome, :imagem, :link)');

        $this->bd->bind(':nome', $dados['nomePatro']);
        $this->bd->bind(':imagem', $dados['fotoPatrocinador']);
        $this->bd->bind(':link', $dados['linkPatro']);

        if ($this->bd->executa()):
            Sessao::mensagem('patrocinador','<b>Patrocinador foi Cadastrado!</b>');
            return true;
        else:
            Sessao::mensagem('patrocinador','<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function editarPatrocinador($dados){
        
        $this->bd->query('UPDATE tbl_secaopatrocinadores 
        SET tbl_secaopatrocinadores.nomePatrocinador = :nome, 
        tbl_secaopatrocinadores.img_patrocinio = :imagem,
        tbl_secaopatrocinadores.link_acesso = :link 
        WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :id');

        $this->bd->bind(':nome', $dados['nomePatro']);
        $this->bd->bind(':imagem', $dados['fotoPatrocinador']);
        $this->bd->bind(':link', $dados['linkPatro']);
        $this->bd->bind(':id', $dados['idPatro']);

        if ($this->bd->executa()):
            Sessao::mensagem('patrocinador','<b>Patrocinador foi alterado!</b>');
            return true;
        else:
            Sessao::mensagem('patrocinador','<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

    public function excluirPatrocinador($nomeFoto, $idPatro){
        // Excluir a imagem do diretório
        $caminhoImagem = 'images/patrocinadores/' . $nomeFoto; // Substitua pelo caminho correto da imagem
        if (file_exists($caminhoImagem)) {
            unlink($caminhoImagem);
        }

        $this->bd->query('DELETE FROM tbl_secaopatrocinadores WHERE tbl_secaopatrocinadores.id_secaoPatrocinio = :id');

        $this->bd->bind(':id', $idPatro);

        if ($this->bd->executa()):
            Sessao::mensagem('patrocinador','<b>Patrocinador foi excluido!</b>');
            return true;
        else:
            Sessao::mensagem('patrocinador','<b>Erro:</b> Não foi possível alterar status!', 'alert alert-danger');
            return false;
        endif;
    }

}