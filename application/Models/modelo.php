<?php
include_once('src/PHPMailer.php');
include_once('src/SMTP.php');
include_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

class Modelo {

	private $bd;
	private $chave;
	private $resultado;

    public function __construct(){
        $this->bd = new Conn();
    }

	public function lerInformacao(){
        $this->bd->query('SELECT * FROM tbl_config INNER JOIN tbl_infoheader ON tbl_infoheader.id_infoHeader=tbl_config.id_infoHeader INNER JOIN tbl_secaodestaque ON tbl_secaodestaque.id_secaoDestaque=tbl_config.id_secaoDestaque INNER JOIN tbl_secaopatrocinadores ON tbl_secaopatrocinadores.id_secaoPatrocinio=tbl_config.id_secaoPatrocinio INNER JOIN tbl_secaoescolher ON tbl_secaoescolher.id_escolher=tbl_config.id_escolher INNER JOIN tbl_contatos ON tbl_contatos.id_contato=tbl_config.id_contato INNER JOIN tbl_infofooter ON tbl_infofooter.id_infoFooter=tbl_config.id_infoFooter INNER JOIN tbl_perguntas ON tbl_perguntas.id_perguntas=tbl_config.id_perguntas INNER JOIN tbl_diretoria ON tbl_diretoria.id_equipe=tbl_config.id_equipe INNER JOIN tbl_membro ON tbl_membro.id_equipe=tbl_diretoria.id_equipe INNER JOIN tbl_sobre ON tbl_sobre.id_sobre=tbl_config.id_sobre INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas=tbl_config.id_ultimas WHERE tbl_config.id_config = 1');

        return $this->bd->resultado();
    }

	public function todosMembros(){
		$this->bd->query('SELECT * FROM tbl_membro INNER JOIN tbl_redesocialmembro ON tbl_redesocialmembro.id_membro=tbl_membro.id_membro');

		return $this->bd->resultados();
	}
	public function lerRedesSociaisMembro($idMembro){
		$this->bd->query('SELECT * FROM tbl_membro INNER JOIN tbl_redesocialmembro ON tbl_redesocialmembro.id_membro=tbl_membro.id_membro WHERE tbl_membro.id_membro = '.$idMembro);

		return $this->bd->resultados();
	}
	public function todasPerguntas(){
		$this->bd->query('SELECT *, (SELECT MIN(id_listaPergunta) FROM tbl_listaperguntas) AS menorID FROM tbl_listaperguntas');

		return $this->bd->resultados();
	}
	public function todasPatrocinadores(){
		$this->bd->query('SELECT * FROM tbl_secaopatrocinadores');

		return $this->bd->resultados();
	}

	public function listar4Noticias($pagina, $categoria){
		
		$qnt_result_pg = 3;
        $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

		if($categoria == null){
			$this->bd->query("SELECT *
			FROM tbl_noticias
			INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
			INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria
			INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas
			INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec
			ORDER BY tbl_noticias.dtAtualizacao DESC
			LIMIT $inicio, $qnt_result_pg");
		}else{
			$this->bd->query("SELECT *
			FROM tbl_noticias
			INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
			INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria
			INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas
			INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec
			WHERE tbl_noticias.id_categoria = $categoria
			ORDER BY tbl_noticias.dtAtualizacao DESC
			LIMIT $inicio, $qnt_result_pg");
			
		}

		return $this->bd->resultados();
	}

	public function pesquisarNoticias($valor){
		
		if(!empty($valor)){
				
			$this->bd->query('SELECT id_noticia, tl_noticia FROM tbl_noticias WHERE  MATCH(tl_noticia) AGAINST (:valor IN NATURAL LANGUAGE MODE) LIMIT 10');
			$this->bd->bind('valor', $valor);
			$this->resultado = $resultado = $this->bd->resultado();
				
				
			$numResult = $this->bd->totalResultados();
			if ( ($resultado) and ($numResult != 0)) {
				$dados = $this->bd->resultados();
									
				$retorna = ['status' => true, 'dados' => $dados];
				
			}else{
				$retorna = ['status' => false , 'msg' =>'Nennhuma notícia encontrada'];
			}

		}else{
			$retorna = ['status' => false, 'msg' =>"Erro: nenhum Item encontrato"];
		}
		return $retorna;
	}

	public function listarNoticiaPesquisa($titulo){
		
		if(!empty($titulo)){

			$titulo = "%".$titulo."%";
				
			$this->bd->query('SELECT id_noticia, tl_noticia, img_Noticia FROM tbl_noticias WHERE  MATCH(tl_noticia) AGAINST (:titulo IN NATURAL LANGUAGE MODE) LIMIT 4');
			$this->bd->bind('titulo', $titulo);
			$this->resultado = $resultado = $this->bd->resultado();
				
				
			$numResult = $this->bd->totalResultados();
			if ( ($resultado) and ($numResult != 0)) {
				$dados = $this->bd->resultados();
									
				$retorna = ['status' => true, 'dados' => $dados];
				
			}else{
				$retorna = ['status' => false , 'msg' =>'Nennhuma notícia encontrada'];
			}

		}else{
			$retorna = ['status' => false, 'msg' =>"Erro: nenhum Item encontrato"];
		}
		return $retorna;
	}

	public function paginaAtual($pagina, $categoria){
		// As variaveis a seguir farão o controle das paginas anteriores e posteriores a pagina atual
		$pg_ant = $pagina-1;
		$pg_pos = $pagina+1;
		$pg_ant_menos = $pagina-2;
		$pg_pos_mais = $pagina+2;
		$idcategoria = $categoria;

		// Caso o usuario tenha escolhido uma categoria ele irá colocar a '/' antes da categoria
		if($categoria != null){
			$categoria = "/".$categoria;
		}
		
		// Aqui são colocados em um array as variaveis para que elas possam ser usadas detro da pagina
		$paginaArray = ["atual"=>$pagina, "ant"=>$pg_ant, "pos"=>$pg_pos, "antA"=>$pg_ant_menos, "posP"=>$pg_pos_mais, "cate"=>$categoria, "id_cate"=>$idcategoria];

		return $paginaArray;
	}

	public function numeroDePaginas($categoria){

		$qnt_result_pg = 3;

		if($categoria == null){
			$this->bd->query("SELECT COUNT(id_noticia) AS num_result FROM tbl_noticias");
		}else{
			$this->bd->query("SELECT COUNT(id_noticia) AS num_result FROM tbl_noticias WHERE id_categoria = $categoria");
		}
		 $row_pg = $this->bd->resultados()[0]->num_result;

		$quantidade_pg = ceil($row_pg/$qnt_result_pg);

		return $quantidade_pg;
	}

	public function listarUltimasNoticias(){
		$this->bd->query('SELECT *
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria
		INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas
		INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec
		ORDER BY tbl_noticias.dtAtualizacao DESC
		LIMIT 3');

		return $this->bd->resultados();
	}
	public function exibirNoticia($id){
		$this->bd->query('SELECT *
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria
		INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas
		INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec
		INNER JOIN tbl_membro ON tbl_coment_tecnico.id_membro = tbl_membro.id_membro
		WHERE tbl_noticias.id_noticia = :id;
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultado();
	}

	public function exibir5ComentariosNoticia($id){
		$this->bd->query('SELECT *
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN tbl_comentario ON tbl_noticias.id_noticia = tbl_comentario.id_noticia
		WHERE tbl_noticias.id_noticia = :id
		ORDER BY tbl_comentario.id_comentario DESC
		LIMIT 5;
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultados();
	}

	public function resultadoTodosComentarios($id){
		$this->bd->query('SELECT *
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN tbl_comentario ON tbl_noticias.id_noticia = tbl_comentario.id_noticia
		WHERE tbl_noticias.id_noticia = :id
		ORDER BY tbl_comentario.id_comentario DESC;
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultados();
	}

	public function contagemComentarios($id){
		$this->bd->query('SELECT COUNT(*) AS quantComentario FROM tbl_comentario WHERE tbl_comentario.id_noticia = :id;
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultado();
	}

	public function exibirCategorias(){
		$this->bd->query("SELECT categorianoticia.id_categoria AS id_categoria, categorianoticia.nome AS nome_categoria, COUNT(*) AS quantidade_registros FROM tbl_noticias INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec INNER JOIN tbl_membro ON tbl_coment_tecnico.id_membro = tbl_membro.id_membro WHERE categorianoticia.nome IN ('Futebol', 'Futsal', 'Fut7') GROUP BY categorianoticia.nome ORDER BY categorianoticia.nome DESC;
		");

		return $this->bd->resultados();
	}

	public function exibirTodosComentariosNoticia($id){
		$this->bd->query('SELECT *
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN tbl_comentario ON tbl_noticias.id_noticia = tbl_comentario.id_noticia
		WHERE tbl_noticias.id_noticia = :id
		AND tbl_comentario.id_comentario NOT IN (
			SELECT id_comentario
			FROM (
				SELECT id_comentario
				FROM tbl_comentario
				WHERE id_noticia = :id
				ORDER BY dtCadastroComent DESC
				LIMIT 5 OFFSET 0
			) AS comentarios_recentes
		)
		ORDER BY tbl_comentario.dtCadastroComent ASC
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultados();
	}

	public function cadastrarComentarioNoticia($nome, $foto, $dtCadastro, $comentario, $email, $idNoticia){
		
    	$bd = new Conn;

		$bd->query('INSERT INTO tbl_comentario (nomeComent, fotoComent, dtCadastroComent, comentarioInter, emailInter, id_noticia) VALUES (:nomeComent, :fotoComent, :dtCadastroComent, :comentarioInter, :emailInter, :id_noticia)');
		
		$bd->bind(':nomeComent', $nome);
		$bd->bind(':fotoComent', $foto);
		$bd->bind(':dtCadastroComent', $dtCadastro);
		$bd->bind(':comentarioInter', $comentario);
		$bd->bind(':emailInter', $email);
		$bd->bind(':id_noticia', $idNoticia);

		if($bd->executa()):
			$_SESSION['msg'] = "cadastrado com sucesso, confirme o cadastro via e-mail";
		else:
			$_SESSION['msg'] = "não foi possivel realizar o cadastrado";
		endif;
	}

	public function todasOpcaoEscolher(){
		$this->bd->query('SELECT *, (SELECT MIN(id_opcao) FROM tbl_opcaoescolha) AS menorID FROM tbl_opcaoescolha;');

		return $this->bd->resultados();
	}
	public function todasRedesSociais(){
		$this->bd->query('SELECT * FROM tbl_redessociais');

		return $this->bd->resultados();
	}
    public function enviarEmail($nome, $email, $titulo, $mensagem) {

		$headers = "From: $nome <$email>\r\n";
    	$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    	$host = 'sandbox.smtp.mailtrap.io';
    	$port = 2525;
    	$username = '2d8079c52a0c00';
    	$password = '58d5514ba5acbd';

    	$assunto = "$titulo";
    	$corpo = "$mensagem";

    	$smtp = fsockopen($host, $port, $errno, $errstr, 10);
    	if ($smtp) {
        	fwrite($smtp, "EHLO localhost\r\n");
        	fwrite($smtp, "AUTH LOGIN\r\n");
        	fwrite($smtp, base64_encode($username) . "\r\n");
        	fwrite($smtp, base64_encode($password) . "\r\n");
        	fwrite($smtp, "MAIL FROM: <$email>\r\n");
        	fwrite($smtp, "RCPT TO: <adesc@example.net>\r\n");
        	fwrite($smtp, "DATA\r\n");
        	fwrite($smtp, "Subject: $assunto\r\n");
        	fwrite($smtp, "To: adesc@example.net\r\n");
        	fwrite($smtp, "$headers\r\n");
        	fwrite($smtp, "$corpo\r\n");
        	fwrite($smtp, ".\r\n");
        	fwrite($smtp, "QUIT\r\n");
        	fclose($smtp);
        
        	echo 'Mensagem enviada com sucesso';
    	} else {
        	echo 'Erro ao enviar mensagem';
   		}
	}

	public function enviarAtivacaoConta($dados) {
 
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
			$mail->addAddress($dados['emailUser']);

			$mail->isHTML(true);
			$mail->CharSet = 'UTF-8';
			$mail->Subject = 'CONTA ADESC - Ativação da Sua Conta';
			$mail->Body = "Prezado(a) ".$dados['nomeUser'].",<br><br><b>CREDENCIAIS DE ACESSO</b><br>E-mail: {$dados['emailUser']}<br>Senha: {$dados['senhaUser']}<br><br><b>ALERTA DE SEGURANÇA</b><br><h3>Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.</h3><br><br>Para ativar a sua conta, por favor, clique no link abaixo:<br><a href=".URL."/admin/ativarConta?chave={$dados['chave_ativar']}>Clique aqui para ativar sua conta</a><br><br>Desejamos uma ótima experiência em nosso site.<br><br>Atenciosamente,<br>
			Diretoria da ADESC Lajes.";
			$mail->AltBody = "Prezado(a)".$dados['nomeUser'].",
			CREDENCIAIS DE ACESSO
			E-mail: {$dados['emailUser']}
			Senha: {$dados['senhaUser']}
			ALERTA DE SEGURANÇA
			Por motivos de segurança, é necessário que você altere a senha padrão que foi enviada para você por e-mail após o seu primeiro acesso. Recomendamos que escolha uma senha única e de sua preferência, para garantir a proteção dos seus dados e dos dados da ADESC Lajes.
			Para ativar a sua conta, por favor, clique no link abaixo:<br><a href=".URL."/admin/ativarConta?chave={$dados['chave_ativar']}>Clique aqui para ativar sua conta</a>
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

	public function validarChave($chave){
		$this->chave = $chave;

		$this->bd->query('SELECT id_usuario FROM tbl_usuario WHERE tbl_usuario.chave_ativae = :chave LIMIT 1');
		$this->bd->bind('chave', $this->chave);
		$this->resultado = $resultado = $this->bd->resultado();
        if ($resultado):
            if ($this->ativarUsuario()):
				echo 'Deu certo';
				Sessao::mensagem('usuario','Usuário ativado com sucesso!');
				return true;
			else:
				echo 'Deu errado';
				Sessao::mensagem('usuario','Erro: Usuário não ativado, tente mais tarde!', 'alert alert-danger');
				return false;
			endif;
			
        else:
			
			Sessao::mensagem('usuario','Erro: Link inválido!', 'alert alert-danger');
    		return false;
		endif;
	}

	public function ativarUsuario(){
		
		$chave_ativar = "";
        $sits_usuario_id = 1;
		$idUsuario = $this->resultado->id_usuario;

		$this->bd->query('UPDATE tbl_usuario SET tbl_usuario.chave_ativae = :chave_ativar, tbl_usuario.status = :sits_usuario_id, tbl_usuario.dt_edicao = NOW() WHERE tbl_usuario.id_usuario = :id');
		$this->bd->bind(':chave_ativar', $chave_ativar);
		$this->bd->bind(':sits_usuario_id', $sits_usuario_id);
		$this->bd->bind(':id', $idUsuario);

        if ($this->bd->executa()) {
            return true;
        } else {
            return false;
        }
	}

	public function enviarInscricao($nome, $dataNascimento, $sexo, $nivel_ensino, $nomeEscola, $nomeMae, $nomePai, $telRespon, $categoria_esportiva, $posicao, $altura, $message, $dtRegistro){
		
    	$bd = new Conn;

		$bd->query('INSERT INTO tbl_incricao (nome, dtNascimento, genero, ensino, nome_escola, nome_mae, nome_pai, telefoneR, categoriaE, posicao, altura, frase, dtRegistro) VALUES (:nome, :dtNascimento, :genero, :ensino, :nome_escola, :nome_mae, :nome_pai, :telefoneR, :categoriaE, :posicao, :altura, :frase, :dtRegistro)');
		
		$bd->bind(':nome', $nome);
		$bd->bind(':dtNascimento', $dataNascimento);
		$bd->bind(':genero', $sexo);
		$bd->bind(':ensino', $nivel_ensino);
		$bd->bind(':nome_escola', $nomeEscola);
		$bd->bind(':nome_mae', $nomeMae);
		$bd->bind(':nome_pai', $nomePai);
		$bd->bind(':telefoneR', $telRespon);
		$bd->bind(':categoriaE', $categoria_esportiva);
		$bd->bind(':posicao', $posicao);
		$bd->bind(':altura', $altura);
		$bd->bind(':frase', $message);
		$bd->bind(':dtRegistro', $dtRegistro);

		if($bd->executa()):
			$_SESSION['msg'] = "cadastrado com sucesso, confirme o cadastro via e-mail";
		else:
			$_SESSION['msg'] = "não foi possivel realizar o cadastrado";
		endif;

	}

	public function informacoes(){
        
		$bd = new Conn;

		$bd->query('SELECT *
		FROM tbl_config
		LEFT JOIN tbl_incricao ON tbl_config.id_inscricao = tbl_incricao.id_inscricao
		LEFT JOIN tbl_infoheader ON tbl_config.id_infoHeader = tbl_infoheader.id_infoHeader
		LEFT JOIN tbl_secaodestaque ON tbl_config.id_secaoDestaque = tbl_secaodestaque.id_secaoDestaque
		LEFT JOIN tbl_secaopatrocinadores ON tbl_config.id_secaoPatrocinio = tbl_secaopatrocinadores.id_secaoPatrocinio
		LEFT JOIN tbl_secaoescolher ON tbl_config.id_escolher = tbl_secaoescolher.id_escolher
		LEFT JOIN tbl_contatos ON tbl_config.id_contato = tbl_contatos.id_contato
		LEFT JOIN tbl_infofooter ON tbl_config.id_infoFooter = tbl_infofooter.id_infoFooter
		LEFT JOIN tbl_perguntas ON tbl_config.id_perguntas = tbl_perguntas.id_perguntas
		LEFT JOIN tbl_diretoria ON tbl_config.id_equipe = tbl_diretoria.id_equipe
		LEFT JOIN tbl_sobre ON tbl_config.id_sobre = tbl_sobre.id_sobre
		LEFT JOIN tbl_ultimasnoticias ON tbl_config.id_ultimas = tbl_ultimasnoticias.id_ultimas
		LEFT JOIN tbl_redessociais ON tbl_config.id_config = tbl_redessociais.id_config
		ORDER BY tbl_config.id_config DESC
		LIMIT 1');

		$bd->resultado();

		return $bd->resultado();
    }

	public function nossasRedes(){
		$this->bd->query('SELECT * FROM tbl_redessociais');
		return $this->bd->resultados();
	}

	public function cadastrarInscricao($ensino, $nomeEscola, $nomeMae, $nomePai, $altura, $telefone, $categoria, $posicao, $nomeAtleta, $dataNascimento, $sexo, $frase){

		//Inserir dados na tabela tbl_detalheescolar
		$this->bd->query("INSERT INTO tbl_detalheescolar (nivelEnsino, nomeEscolar) 
		VALUES (:nivelEnsino, :nomeEscola)");
		$this->bd->bind(':nivelEnsino', $ensino);
		$this->bd->bind(':nomeEscola', $nomeEscola);

		if($this->bd->executa()):

			//Obter o último ID inserido na tabela tbl_detalheescolar
			$this->bd->query('SELECT * FROM tbl_detalheescolar ORDER BY tbl_detalheescolar.id_escolar DESC LIMIT 1');
			$idEscola = $this->bd->resultado()->id_escolar;

			//Inserir dados na tabela tbl_detalhefiliacao
			$this->bd->query("INSERT INTO tbl_detalhefiliacao (nomeMae_atleta, nomePai_atleta) 
			VALUES (:nomeMae, :nomePai)");
			$this->bd->bind(':nomeMae', $nomeMae);
			$this->bd->bind(':nomePai', $nomePai);

			if($this->bd->executa()):

				//Obter o último ID inserido na tabela tbl_detalhefiliacao
				$this->bd->query('SELECT * FROM tbl_detalhefiliacao ORDER BY tbl_detalhefiliacao.id_filiacao DESC LIMIT 1');
				$idFiliacao = $this->bd->resultado()->id_filiacao;

				//Inserir dados na tabela tbl_detalhesaude
				$this->bd->query("INSERT INTO tbl_detalhesaude (altura_atleta) 
				VALUES (:altura)");
				$this->bd->bind(':altura', $altura);

				if($this->bd->executa()):

					//Obter o último ID inserido na tabela tbl_detalhesaude
					$this->bd->query('SELECT * FROM tbl_detalhesaude ORDER BY tbl_detalhesaude.id_saude  DESC LIMIT 1');
					$idSaude = $this->bd->resultado()->id_saude;

					//Inserir dados na tabela tbl_detalhesresponsavel
					$this->bd->query("INSERT INTO tbl_detalhesresponsavel (celularResponsavel) 
					VALUES (:telefone)");
					$this->bd->bind(':telefone', $telefone);

					if($this->bd->executa()):

						//Obter o último ID inserido na tabela tbl_detalhesresponsavel
						$this->bd->query('SELECT * FROM tbl_detalhesresponsavel ORDER BY tbl_detalhesresponsavel.id_responsavel  DESC LIMIT 1');
						$idResponsavel = $this->bd->resultado()->id_responsavel;

						//Inserir dados na tabela tbl_detalhetecnicos
						$this->bd->query("INSERT INTO tbl_detalhetecnicos (categoriaEsportiva, posicaoPrincipal) 
						VALUES (:categoria, :posicao)");
						$this->bd->bind(':categoria', $categoria);
						$this->bd->bind(':posicao', $posicao);

						if($this->bd->executa()):

							//Obter o último ID inserido na tabela tbl_detalhetecnicos
							$this->bd->query('SELECT * FROM tbl_detalhetecnicos ORDER BY tbl_detalhetecnicos.id_tecnico  DESC LIMIT 1');
							$idTecnico = $this->bd->resultado()->id_tecnico;

							//Inserir dados na tabela tbl_atleta
							$this->bd->query("INSERT INTO tbl_atleta (nome_atleta, dtNascimento_atleta, sexo_atleta, id_escola, id_filiacao, id_saude, id_responsavel, id_detalheTec) 
							VALUES (:nomeAtleta, :dtNascimento, :sexo, :id_escola, :id_filiacao, :id_saude, :id_responsavel, :id_detalheTec)");
							$this->bd->bind(':nomeAtleta', $nomeAtleta);
							$this->bd->bind(':dtNascimento', $dataNascimento);
							$this->bd->bind(':sexo', $sexo);
							$this->bd->bind(':id_escola', $idEscola);
							$this->bd->bind(':id_filiacao', $idFiliacao);
							$this->bd->bind(':id_saude', $idSaude);
							$this->bd->bind(':id_responsavel', $idResponsavel);
							$this->bd->bind(':id_detalheTec', $idTecnico);

							if($this->bd->executa()):

								//Obter o último ID inserido na tabela tbl_atleta
								$this->bd->query('SELECT * FROM tbl_atleta ORDER BY tbl_atleta.id_atleta  DESC LIMIT 1');
								$idAtleta = $this->bd->resultado()->id_atleta;

								$dataAtual = date('Y-m-d H:i:s');

								//Inserir dados na tabela tbl_incricao
								$this->bd->query("INSERT INTO tbl_incricao (id_atleta, frase, dtRegistro, dt_edicao) 
								VALUES (:id_atleta, :frase, :dtRegistro, :dt_edicao)");
								$this->bd->bind(':id_atleta', $idAtleta);
								$this->bd->bind(':frase', $frase);
								$this->bd->bind(':dtRegistro', $dataAtual);
								$this->bd->bind(':dt_edicao', $dataAtual);

								if($this->bd->executa()):
									return true;
								else:
									return false;
								endif;

							endif;

						endif;

					endif;;

				endif;

			endif;

		endif;

	}

}
