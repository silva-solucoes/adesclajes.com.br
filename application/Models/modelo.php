<?php
class Modelo {

	private $bd;

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
		$this->bd->query('SELECT *, (SELECT COUNT(*) FROM tbl_comentario WHERE id_noticia = :id) AS quantComentario
		FROM tbl_noticias
		INNER JOIN tbl_usuario ON tbl_usuario.id_usuario = tbl_noticias.id_autor
		INNER JOIN categorianoticia ON categorianoticia.id_categoria = tbl_noticias.id_categoria
		INNER JOIN tbl_ultimasnoticias ON tbl_ultimasnoticias.id_ultimas = tbl_noticias.id_ultimas
		INNER JOIN tbl_coment_tecnico ON tbl_coment_tecnico.id_coment_tec = tbl_noticias.id_coment_tec
		WHERE tbl_noticias.id_noticia = :id;
		');
		$this->bd->bind('id', $id);

		return $this->bd->resultado();
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
    	$username = 'ccef44a3f5bd8a';
    	$password = '7d07425282aead';

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

		$bd->query('SELECT * FROM tbl_config ORDER BY tbl_config.id_config DESC LIMIT 1;');

		$bd->resultado();

		return $bd->resultado();
    }
}
