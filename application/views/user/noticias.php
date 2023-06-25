<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Migalhas de pão ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL ?>">Início</a></li>
                <li>Notícias</li>
            </ol>
            <h2>Notícias</h2>

        </div>
    </section><!-- End Migalhas de pão -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="row gy-4 posts-list">
                    <?php foreach($dados['noticias'] as $listar): ?>
                    <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($listar->dtAtualizacao));?>
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="<?php echo URL . '/public/uploads/'.$listar->img_Noticia; ?>" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>"><?=$listar->tl_noticia?></a>
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person-circle"></i> <a
                                                href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>"><?=$listar->nome_usuario?></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-calendar-event"></i> <a
                                                href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>"><time datetime="2022-01-01"><?=$dataPostagem?></time></a></li>
                                    </ul>
                                </div>

                                <div class="content text-justify">
                                <?php if(strlen($listar->descricao) >= 500):?>
                                    <p><?php echo $descricao = substr($listar->descricao, 0, 300) . "...";?></p>
                                <?php else:?>
                                    <p><?= $listar->descricao?></p>
                                <?php endif; ?>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>">Ler mais</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    <?php endforeach;?>

                    </div><!-- End blog posts list -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="<?php echo URL . '/paginas/noticias/1' ?>">PRIMEIRA</a></li>
                            <?php       
                            if($dados['pagina'] != 1 && $dados['pagina'] != $dados['totalPagina']): 
                                $pg_ant = $dados['pagina']-1;
                                $pg_pos = $dados['pagina']+1;
                               echo "<li><a href='".URL."/paginas/noticias/".$pg_ant."'>".$pg_ant."</a></li>";
                               echo "<li class='active'><a href='#'>".$dados['pagina']."</a></li>";
                               echo "<li><a href='".URL."/paginas/noticias/".$pg_pos."'>".$pg_pos."</a></li>";
                               elseif($dados['pagina'] == 1): 
                                $pg_pos_mais = $dados['pagina']+2;
                                $pg_pos = $dados['pagina']+1;
                               echo "<li class='active'><a href='#'>".$dados['pagina']."</a></li>";
                               echo "<li><a href='".URL."/paginas/noticias/".$pg_pos."'>".$pg_pos."</a></li>";
                               echo "<li><a href='".URL."/paginas/noticias/".$pg_pos_mais."'>".$pg_pos_mais."</a></li>";
                               
                                else: 
                                    $pg_ant_menos = $dados['pagina']-2;
                                    $pg_ant = $dados['pagina']-1;
                                    echo "<li><a href='".URL."/paginas/noticias/".$pg_ant_menos."'>".$pg_ant_menos."</a></li>";
                                    echo "<li><a href='".URL."/paginas/noticias/".$pg_ant."'>".$pg_ant."</a></li>";
                                    echo "<li class='active'><a href='#'>".$dados['pagina']."</a></li>";
                                                                
                                endif


                               
                            ?>
                            <li><a href="<?php echo URL . '/paginas/noticias/'.$dados['totalPagina'] ?>">ULTIMA</a></li>
                        </ul>
                    </div><!-- End blog pagination -->

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
                                    <img src="<?php echo URL . '/public/uploads/'.$listar->img_Noticia; ?>" alt=""
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

                    </div><!-- End Blog Sidebar -->

                </div>

            </div>

        </div>
    </section><!-- End Blog Section -->

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