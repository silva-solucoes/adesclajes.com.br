<?php include_once 'header.php'; ?>
<?php
    setlocale(LC_TIME, 'portuguese');
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL ?>">Início</a></li>
                <li><a href="<?php echo URL . '/paginas/noticias' ?>">Notícia</a></li>
                <li><?=$dados['noticia']->tl_noticia?></li>
            </ol>
            <h2><?=$dados['noticia']->tl_noticia?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="<?php echo URL . '/public/uploads/'.$dados['noticia']->img_Noticia; ?>" alt="Imagem Destaque" class="img-fluid">
                        </div>

                        <h2 class="title"><?=$dados['noticia']->tl_noticia?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person-circle"></i> <a
                                        href="blog-details.html"><?=$dados['noticia']->nome_usuario?></a></li>
                                <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($dados['noticia']->dtAtualizacao));?>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar-event"></i> <a
                                        href="blog-details.html"><time datetime="2022-01-01"><?=$dataPostagem?></time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html"><?=$dados['noticia']->quantComentario?> Comentários</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                Em um jogo emocionante, a equipe da ADESC venceu de virada e segue na liderança do
                                campeonato de futebol local. O jogo aconteceu no último domingo, no Estádio Municipal, e
                                contou com uma torcida animada que não parou de incentivar os jogadores do início ao fim
                                da partida.
                            </p>

                            <p>
                                O time adversário começou na frente e manteve a vantagem durante boa parte do primeiro
                                tempo. Mas, com muito empenho e dedicação, a ADESC conseguiu empatar o jogo no final da
                                primeira etapa. No segundo tempo, a equipe não se acomodou e partiu para cima do
                                adversário, conquistando a virada com um belo gol.
                            </p>

                            <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" class="img-fluid" alt="">

                            <blockquote>
                                <p>
                                    Com o resultado positivo, a ADESC segue firme na liderança do campeonato, mostrando
                                    que tem um elenco forte e preparado para enfrentar qualquer desafio. O técnico
                                    elogiou a postura dos jogadores em campo e destacou a importância da vitória para a
                                    equipe.
                                </p>
                            </blockquote>

                            <p>
                                A torcida também está de parabéns pelo apoio constante, que foi fundamental para a
                                virada do jogo. Agora é seguir treinando e se preparando para as próximas partidas,
                                sempre com muita garra e determinação. Vamos lá, ADESC!
                            </p>

                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Futebol</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Esporte</a></li>
                                <li><a href="#">Educação</a></li>
                                <li><a href="#">Inclusão</a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">
                        <img src="<?php echo URL . 'public/images/equipe/semfoto.jpg'; ?>"
                            class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4>Paulo Rodrigues</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Parabéns para a equipe da ADESC pela vitória de virada! É muito emocionante ver o
                                esforço e dedicação dos atletas para alcançar a liderança do campeonato de futebol
                                local. Continuem com esse desempenho incrível e boa sorte nas próximas partidas!
                            </p>
                        </div>
                    </div><!-- End post author -->

                    <div class="comments">

                        <h4 class="comments-count">5 Comentários</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img
                                        src="<?php echo URL . 'public/images/equipe/semfoto.jpg'; ?>" alt=""></div>
                                <div>
                                    <h5><a href="">Maria Eduarda</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Responder</a></h5>
                                    <time datetime="2020-01-01">19 Abr 2023</time>
                                    <p>
                                        Parabéns à equipe da ADESC pela vitória de virada! É incrível ver como o esforço
                                        e a dedicação dos atletas estão rendendo resultados positivos. A liderança no
                                        campeonato de futebol local é uma prova do talento e empenho dessa equipe.
                                        Estamos orgulhosos de fazer parte dessa instituição que promove o esporte, a
                                        educação e a inclusão de forma tão exemplar. Vamos em frente, rumo a mais
                                        conquistas!
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div class="reply-form">

                            <h4>Deixe um comentário</h4>
                            <p>Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados * </p>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Seu nome*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Seu e-mail*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control"
                                            placeholder="Seu comentário*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Postar comentário</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Burcar por</h3>
                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categoria</h3>
                            <ul class="mt-3">
                                <li><a href="#">Geral <span>(25)</span></a></li>
                                <li><a href="#">Futebol <span>(12)</span></a></li>
                                <li><a href="#">Futsal <span>(5)</span></a></li>
                                <li><a href="#">Natação <span>(22)</span></a></li>
                                <li><a href="#">Taekwondo <span>(8)</span></a></li>
                                <li><a href="#">Volêi <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Últimas notícias</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="<?php echo URL . 'noticia/' ?>">ADESC vence de virada e segue na
                                                liderança do
                                                campeonato de futebol local</a></h4>
                                        <time datetime="2020-01-01">19 Abr 2023</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo URL . 'public/uploads/noticia-02.jpg'; ?>" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">O prefeito Felipe Menezes marcou presença no
                                                campeonato local</a></h4>
                                        <time datetime="2020-01-01">18 Abr 2023</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo URL . 'public/uploads/noticia-03.jpg'; ?>" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Entrega de materiais esportivos fortalece atletas
                                                da ADESC</a>
                                        </h4>
                                        <time datetime="2020-01-01">17 Abr 2023</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo URL . 'public/uploads/noticia-04.jpg'; ?>" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Entrega de materiais esportivos fortalece atletas
                                                da ADESC</a></h4>
                                        <time datetime="2020-01-01">16 Abr 2023</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">ADESC Lajes</a></li>
                                <li><a href="#">Notícias</a></li>
                                <li><a href="#">Esportes</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div>
                </div>

            </div>
    </section><!-- End Blog Details Section -->

    <!-- ======= Seção de Patrocinadores ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <?php foreach($dados['patrocinadores'] as $listar):?>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="<?=$listar->link_acesso?>" title="<?=$listar->nomePatrocinador?>">
                        <img src="<?php echo URL . '/public/images/patrocinadores/'.$listar->img_patrocinio; ?>" class="img-fluid"
                        alt="<?=$listar->nomePatrocinador?>">
                    </a>
                </div>
                <?php endforeach;?>
            </div>

        </div>
    </section><!-- Fim Patrocinadores -->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>