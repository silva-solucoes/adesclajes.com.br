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
                <li><a href="<?php echo URL . '/paginas/noticias/1' ?>">Notícia</a></li>
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
                            <img src="<?php echo URL . '/public/uploads/noticias/'.$dados['noticia']->img_Noticia; ?>" width="1200" alt="Imagem Destaque" class="img-fluid">
                        </div>

                        <h2 class="title"><?=$dados['noticia']->tl_noticia?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person-circle"></i> <a
                                        href="blog-details.html"><?=$dados['noticia']->nome_usuario?></a></li>
                                <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($dados['noticia']->dtAtualizacao));?>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar-event"></i> <a
                                        href="blog-details.html"><time datetime="2022-01-01"><?=$dataPostagem?></time></a></li>
                                <?php if($dados['contagemComentarios']->quantComentario <> 0):?>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html"><?=$dados['contagemComentarios']->quantComentario?> Comentários</a></li>
                                <?php else: ?>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html"><?=$dados['contagemComentarios']->quantComentario?> Comentários</a></li>
                                <?php endif;?>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <?=$dados['noticia']->conteudo?>
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#"><?=$dados['noticia']->nome?></a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">
                        <img src="<?php echo URL . '/public/images/equipe/'.$dados['noticia']->fotoMembro; ?>"
                            class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4><?=$dados['noticia']->nome_membro?></h4>
                            <div class="social-links">
                                <?php foreach($dados['rsMembros'] as $ler):?>
                                    <a href="<?=$ler->link_acesso?>"><?=$ler->icone?></a>
                                <?php endforeach;?>
                            </div>
                            <p>
                                <?=$dados['noticia']->comentario?>
                            </p>
                        </div>
                    </div><!-- End post author -->

                    <div class="comments">
                        <?php if($dados['contagemComentarios']->quantComentario <> 0):?>
                        <h4 class="comments-count"><?=$dados['contagemComentarios']->quantComentario?> Comentários</h4>
                        <?php else: ?>
                        <h4 class="comments-count"><?=$dados['contagemComentarios']->quantComentario?> Comentários</h4>
                        <?php endif;?>
                        <?php if($dados['contagemComentarios']->quantComentario <> 0):?>
                        <div id="comment-1" class="comment">
                            <?php foreach($dados['controleComentarios'] as $ler):?>
                            <div class="d-flex">
                                <div class="comment-img"><img
                                        src="<?php echo URL . '/public/images/equipe/'.$ler->fotoComent; ?>" alt=""></div>
                                <div>
                                    <h5><a href=""><?=$ler->nomeComent?></a></h5>
                                    <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($ler->dtCadastroComent));?>
                                    <time datetime="2020-01-01"><?=$dataPostagem?></time>
                                    <p>
                                        <?=$ler->comentarioInter?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div><!-- End comment #1 -->
                        <?php else: ?>
                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div>
                                    <p>Nenhum comentário</p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->
                        <?php endif; ?>
                        <?php if($dados['contagemComentarios']->quantComentario > 5):?>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Ver mais comentários</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="comment-1" class="comment">
                                            <?php foreach($dados['todosComentarios'] as $listar): ?>

                                            <div class="d-flex">
                                                <div class="comment-img"><img src="<?php echo URL . '/public/images/equipe/'.$listar->fotoComent; ?>" alt=""></div>
                                                <div>
                                                    <h5><a href=""><?=$listar->nomeComent?></a></h5>
                                                    <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($listar->dtCadastroComent));?>
                                                    <time datetime="2020-01-01"><?=$dataPostagem?></time>
                                                    <p>
                                                        <?=$listar->comentarioInter?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="reply-form">

                            <h4>Deixe um comentário</h4>
                            <p>Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados * </p>
                            <form action="<?= URL ?>/user/enviarComentarioNoticia/<?=$dados['noticia']->id_noticia?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="nameVisitante" type="text" class="form-control" placeholder="Seu nome*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="emailVisitante" type="text" class="form-control" placeholder="Seu e-mail*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comentarioVisitante" class="form-control"
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
                            <form action="" class="mt-3" id="pesq-noticia-form" method="POST">

                                <input type="text" name="noticia" autocomplete="off" class="form-control" id="noticia" placeholder="Pesquisar noticia" onkeyup="carregar_noticias(this.value)">

                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>

                            <span id="resultado_pesquisa"></span>
                            <span id= "listar_noticia"></span>

                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categoria</h3>
                            <ul class="mt-3">
                            <?php foreach($dados['categorias'] as $listar): ?>
                                <li><a href="#"><?=$listar->nome_categoria?> <span>(<?=$listar->quantidade_registros?>)</span></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Últimas notícias</h3>

                            <div class="mt-3">
                            <?php foreach($dados['ultimasNoticias'] as $listar): ?>
                            <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($listar->dtAtualizacao));?>
                                <div class="post-item mt-3">
                                    <img src="<?php echo URL . '/public/uploads/noticias/'.$listar->img_Noticia; ?>" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>">
                                        <?php 
                                            if(strlen($listar->tl_noticia) >= 50): 
                                                echo $descricao = substr($listar->tl_noticia, 0, 50) . "...";
                                            else:
                                                echo $listar->tl_noticia;
                                            endif;
                                        ?>
                                        </a></h4>
                                        <time datetime="2020-01-01"><?=$dataPostagem?></time>
                                    </div>
                                </div><!-- End recent post item-->
                            <?php endforeach;?>

                            </div>

                        </div><!-- End sidebar recent posts-->
                        <!--
                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">ADESC Lajes</a></li>
                                <li><a href="#">Notícias</a></li>
                                <li><a href="#">Esportes</a></li>
                            </ul>
                        </div> End sidebar tags-->

                    </div>
                </div>

            </div>
    </section><!-- End Blog Details Section -->

    <!-- ======= Seção de Patrocinadores ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row center slider" data-aos="zoom-in">
                <?php foreach($dados['patrocinadores'] as $listar):?>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="<?=$listar->link_acesso?>" title="<?=$listar->nomePatrocinador?>" target="_blank">
                        <img width="200" height="87" src="<?php echo URL . '/public/images/patrocinadores/'.$listar->img_patrocinio; ?>" class="img-fluid"
                        alt="<?=$listar->nomePatrocinador?>">
                    </a>
                </div>
                <?php endforeach;?>
            </div>

        </div>
    </section><!-- Fim Patrocinadores -->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>