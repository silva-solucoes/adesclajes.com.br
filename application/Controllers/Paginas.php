<?php

class Paginas extends Controller{

    private $info;
    private $usuarioModel;
    public function __construct(){

        $this->info = $this->model('modelo');
        $this->usuarioModel = $this->model('Usuario');

    }
    public function login(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'email' => trim($formulario['email']),
            ];
            if(empty($formulario['email'])):
                $dados['nome_erro'] = "Preencha o campo com seu e-mail";
            endif;
        else:
            $dados=[
                'email' => '',
            ];
        endif;
        $this->view('login', $dados);
    }
    public function recuperar(){
        $this->view('recuperar');
    }
    public function index(){
        
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os membros
        $dados['todosMembros']=$this->info->todosMembros();
        //Exibir todas as redes sociais de um membro
        //$dados['rsMembros']=$this->info->lerRedesSociaisMembro($dados['info']->id_membro);
        //Exibir perguntas frequentes
        $dados['perguntas']=$this->info->todasPerguntas();
        //Exibir Porque Escolher
        $dados['escolher']=$this->info->todasOpcaoEscolher();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();
        
        $this->view('user/home', $dados);

    }

    public function searchNews(){

        $value = filter_input(INPUT_GET, "value", FILTER_DEFAULT);
        $titulo = filter_input(INPUT_GET, "titulo", FILTER_DEFAULT);

        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //pesquisar noticias
        $dados['pesquisarNoticias']=$this->info->pesquisarNoticias($value);
        //listar notícias pesquisadas
        $dados['listarNoticiaPesquisa']=$this->info->listarNoticiaPesquisa($titulo);

        echo json_encode($dados);
    }

    public function noticias($pagina = null, $categoria = null){


        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //paginas atual notícia
        $dados['pagina']= $this->info->paginaAtual($pagina, $categoria);
        //quantidade de paginas de notícia
        $dados['totalPagina']=$this->info->numeroDePaginas($categoria);
        //exibir notícia
        $dados['noticias']=$this->info->listar4Noticias($pagina, $categoria);
        //Exibir categorias
        $dados['categorias']=$this->info->exibirCategorias();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/noticias', $dados);
    }
    public function detalheNoticias($idNoticia){
        $dados=[
            'info' => $this->info->lerInformacao(),
        ];
        //exibir notícia
        $dados['noticia']=$this->info->exibirNoticia($idNoticia);
        //exibir até 5 comentários
        $dados['comentarios']=$this->info->exibir5ComentariosNoticia($idNoticia);
        //exibir Todos os comentários
        $dados['todosComentarios']=$this->info->exibirTodosComentariosNoticia($idNoticia);
        //Controle dos Comentários
        $dados['controleComentarios']=$this->info->resultadoTodosComentarios($idNoticia);
        //Contagem de comentários
        $dados['contagemComentarios']=$this->info->contagemComentarios($idNoticia);
        //Contagem de comentários
        $dados['contagemComentarios2']=$this->info->contagemComentarios2($idNoticia);
        //Exibir categorias
        $dados['categorias']=$this->info->exibirCategorias();
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais de um membro
        $dados['rsMembros']=$this->info->lerRedesSociaisMembro($dados['info']->id_membro);
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/detalhe_noticia', $dados);
    }
    public function bid(){
        $nome = '';
        $categoria = '';

        $dados=[
            'info' => $this->info->lerInformacao(),
            'exibirJogadores' => $this->usuarioModel->mostrarAtleta($nome, $categoria),
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/bid', $dados);
    }
    public function buscarAtleta(){
        $nome = filter_input(INPUT_GET, "name", FILTER_DEFAULT);
        $categoria = filter_input(INPUT_GET, "cat", FILTER_DEFAULT);
        $dados=[
            'info' => $this->info->lerInformacao(),
            'exibirJogadores' => $this->usuarioModel->mostrarAtleta($nome, $categoria),
            'exibirCategorias' => $this->usuarioModel->exibirCategorias(),
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/bid', $dados);
    }
    
    public function dadosAtleta()
    {
        $id_atleta = filter_input(INPUT_GET, "id", FILTER_DEFAULT);
      /*  $dados = [
            'exibirJogador' => $this->usuarioModel->exibirInscricao($idInscricao),
            'nomeUser_erro' => '',
        ];

        // Aqui você pode adicionar a lógica para buscar os anos do banco de dados e exibi-los como opções no select
        $id_atleta = $dados['exibirJogador']->id_atleta;
        $dados['idAtleta'] = $id_atleta;*/
        $anos = $this->usuarioModel->buscarAnoEstatistica($id_atleta); // Função hipotética para buscar os anos do banco de dados
        $dados['anos'] = $anos;
        
        echo json_encode($dados);
    }

    public function catEsportiva(){

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $idCat = end($parts);

        if($idCat == 1):
            //Futebol
            $dados=[
                'info' => $this->info->lerInformacao(),
                'titulo' => 'Sessão Futebol',
                'categoria' => 'Futebol',
                'autor' => 'ADESC Lajes',
                'data' => '04 Jul 2023',
                'descricao' => 'O futebol é um esporte apaixonante que cativa milhões de pessoas ao redor do mundo. Em uma partida de futebol, duas equipes competem em busca da vitória, utilizando habilidades técnicas, táticas e físicas para marcar gols e impedir que o time adversário faça o mesmo. Com regras claras e uma dinâmica intensa, o futebol é um esporte que promove trabalho em equipe, estratégia e espírito esportivo.',
                'conteudo' => 'A escolinha ADESC Lajes utiliza o esporte na modalidade de futebol como uma ferramenta de formação integral de crianças e jovens. Além de desenvolver as habilidades técnicas e táticas do esporte, a escolinha busca promover valores como disciplina, trabalho em equipe, respeito e superação. Os treinamentos são conduzidos por profissionais qualificados, que proporcionam um ambiente seguro e estimulante para o aprendizado e aprimoramento dos alunos. Além das atividades de treinamento, a escolinha também incentiva a participação dos alunos em competições locais e regionais, proporcionando experiências de jogo e fortalecendo o espírito competitivo saudável. Com uma abordagem pedagógica adequada, a escolinha ADESC Lajes contribui para o desenvolvimento físico, cognitivo e emocional dos participantes, formando não apenas bons jogadores, mas também cidadãos responsáveis e comprometidos com os valores do esporte.'
            ];
            $dados['dadosAtleta'] = $this->usuarioModel->categoriaAtleta($idCat);
            //Exibir todos os patrocinadores
            $dados['patrocinadores']=$this->info->todasPatrocinadores();
            //Exibir as três últimas notícias
            $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
            //Exibir todas as redes sociais da ADESC
            $dados['redesSociais']=$this->info->todasRedesSociais();

        elseif($idCat == 2):
            //Futsal
            $dados=[
                'info' => $this->info->lerInformacao(),
                'titulo' => 'Sessão Futsal',
                'categoria' => 'Futsal',
                'autor' => 'ADESC Lajes',
                'data' => '04 Jul 2023',
                'descricao' => 'O futsal é uma modalidade de esporte coletivo derivada do futebol, porém, jogado em uma quadra menor e com times reduzidos. Essa versão do esporte é caracterizada pela sua velocidade e intensidade, proporcionando um jogo dinâmico e emocionante. No futsal, os jogadores precisam ter habilidades técnicas refinadas, como domínio de bola, passes precisos e chutes certeiros, devido ao espaço reduzido e à rápida troca de posições.',
                'conteudo' => 'Na escolinha ADESC Lajes, o esporte na modalidade de futsal é aplicado de forma educativa e divertida, visando o desenvolvimento físico, técnico e social dos alunos. As aulas são ministradas por profissionais capacitados, que utilizam metodologias adequadas para cada faixa etária, garantindo uma aprendizagem progressiva e adaptada às habilidades individuais dos participantes.

                Nas atividades da escolinha, são trabalhados fundamentos específicos do futsal, como passe, domínio de bola, finalização e posicionamento tático. Os alunos têm a oportunidade de aprimorar suas habilidades técnicas e táticas por meio de exercícios e jogos, que estimulam o trabalho em equipe, a criatividade e o espírito esportivo.
                
                Além disso, a escolinha ADESC Lajes promove a participação em torneios e amistosos, proporcionando aos alunos a vivência de situações reais de jogo e a oportunidade de aplicar o que aprenderam em treinos. Essas experiências competitivas ajudam no desenvolvimento da autoconfiança, resiliência e disciplina dos praticantes.
                
                A escolinha valoriza também a formação integral dos alunos, promovendo valores como o respeito, a ética, a responsabilidade e a inclusão. O futsal é utilizado como ferramenta para o desenvolvimento de habilidades socioemocionais, como o trabalho em equipe, o respeito às regras e o espírito esportivo.
                
                Dessa forma, a modalidade de futsal na escolinha ADESC Lajes proporciona aos alunos uma experiência enriquecedora, onde o esporte é utilizado como meio de aprendizagem, socialização e promoção da saúde, contribuindo para a formação integral de cada indivíduo.'
            ];
            $dados['dadosAtleta'] = $this->usuarioModel->categoriaAtleta($idCat);
            //Exibir todos os patrocinadores
            $dados['patrocinadores']=$this->info->todasPatrocinadores();
            //Exibir as três últimas notícias
            $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
            //Exibir todas as redes sociais da ADESC
            $dados['redesSociais']=$this->info->todasRedesSociais();

        elseif($idCat == 3):
            //Fut7
            $dados=[
                'info' => $this->info->lerInformacao(),
                'titulo' => 'Sessão Fut7',
                'categoria' => 'Fut7',
                'autor' => 'ADESC Lajes',
                'data' => '04 Jul 2023',
                'descricao' => 'O fut7, também conhecido como futebol society, é uma modalidade esportiva que se destaca pela sua dinâmica e pela adaptação das regras do futebol tradicional ao campo reduzido. Na sessão esportiva de fut7, os jogadores têm a oportunidade de vivenciar uma experiência intensa e emocionante, proporcionando um jogo rápido e com muitas jogadas de habilidade.',
                'conteudo' => 'Na escolinha ADESC Lajes, o esporte na modalidade fut7 é aplicado de forma intensa e dedicada, visando o desenvolvimento técnico e tático dos jogadores. Os treinadores qualificados utilizam métodos de ensino específicos para aprimorar as habilidades individuais e coletivas dos atletas.

                As sessões de treinamento são estruturadas de maneira a promover o aprendizado progressivo, começando pelos fundamentos básicos do fut7, como o controle da bola, os passes e a finalização. À medida que os jogadores adquirem maior domínio técnico, são introduzidas atividades mais complexas, como jogadas ensaiadas, marcação e posicionamento tático.
                
                A escolinha ADESC Lajes valoriza a importância da prática regular do esporte, oferecendo treinamentos frequentes e dedicados. Durante as sessões, os jogadores têm a oportunidade de desenvolver suas habilidades em diversas situações de jogo, incluindo exercícios individuais, treinos em grupo e partidas simuladas.
                
                Além dos treinamentos, a escolinha também promove a participação dos jogadores em competições e torneios de fut7. Essas competições proporcionam aos atletas a oportunidade de aplicar o que aprenderam nos treinamentos, vivenciando a emoção e a competitividade do esporte em um ambiente seguro e orientado.
                
                Na modalidade fut7 da escolinha ADESC Lajes, o foco vai além do desenvolvimento técnico. Os treinadores também valorizam a formação do caráter dos jogadores, promovendo valores como respeito, disciplina, trabalho em equipe e fair play. Através do esporte, os jovens atletas aprendem lições valiosas de superação, perseverança e espírito esportivo.
                
                Em resumo, na escolinha ADESC Lajes, o esporte na modalidade fut7 é aplicado de forma estruturada, com treinamentos dedicados e competições regulares. Os jogadores têm a oportunidade de desenvolver suas habilidades técnicas e táticas, ao mesmo tempo em que aprendem valores importantes para a vida. O fut7 na escolinha ADESC Lajes é uma experiência enriquecedora, que contribui para o crescimento e a formação integral dos jovens atletas.'
            ];
            $dados['dadosAtleta'] = $this->usuarioModel->categoriaAtleta($idCat);
            //Exibir todos os patrocinadores
            $dados['patrocinadores']=$this->info->todasPatrocinadores();
            //Exibir as três últimas notícias
            $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
            //Exibir todas as redes sociais da ADESC
            $dados['redesSociais']=$this->info->todasRedesSociais();

        endif;

        $this->view('user/detalhe_esporte', $dados);
    }
    public function galeriaFoto(){
        $dados=[
            'info' => $this->info->lerInformacao(),
            'exibirFotos' => $this->usuarioModel->exibirFotos(),
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/galeria_fotos', $dados);
    }
    public function erro(){
        $dados=[
            'info' => $this->info->lerInformacao()
        ];
        //Exibir todos os patrocinadores
        $dados['patrocinadores']=$this->info->todasPatrocinadores();
        //Exibir as três últimas notícias
        $dados['ultimasNoticias']=$this->info->listarUltimasNoticias();
        //Exibir todas as redes sociais da ADESC
        $dados['redesSociais']=$this->info->todasRedesSociais();

        $this->view('user/erros/erro', $dados);
    }
    public function erro404(){

        $this->view('erro');
    }
    
}