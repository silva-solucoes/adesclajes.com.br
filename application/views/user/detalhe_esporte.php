<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL; ?>">Início</a></li>
                <li>Esportes</li>
                <li><?=$dados['titulo']?></li>
            </ol>
            <h2><?=$dados['titulo']?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Seção de Detalhes de Esporte ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informações</h3>
                        <ul>
                            <li><strong>Categoria</strong>: <?=$dados['categoria']?></li>
                            <li><strong>Autor</strong>: <?=$dados['autor']?></li>
                            <li><strong>Postado em</strong>: <?=$dados['data']?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info portfolio-description">
                        <h2>Sobre a categoria esportiva <?=$dados['categoria']?></h2>
                        <p class="text-justify">
                            <?=$dados['descricao']?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <p class="text-justify">
                            <?=$dados['conteudo']?>
                        </p>
                    </div>
                </div>

                <!--<div class="col-lg-12">

                    ======= Seção de Atletas =======
                    <section id="faq" class="faq section-bg">
                        <div class="container" data-aos="fade-up">

                            <div class="section-title">
                                <h2>Quadro de Atletas</h2>
                                <p>Não perca a chance de conhecer os nossos atletas de futsal separados por níveis!
                                    Confira agora mesmo as suas características técnicas e surpreenda-se com o talento
                                    desses jovens jogadores. Acesse o nosso site e confira!</p>
                            </div>

                            <div class="faq-list">
                                <ul>
                                    <li data-aos="fade-up" data-aos-delay="100">
                                        <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a
                                            data-bs-toggle="collapse" class="collapse"
                                            data-bs-target="#faq-list-1">Atletas do Sub-11 <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                            <p class="text-justify">

                                            <section id="noticias" class="recent-blog-posts">
                                                <div class="container" data-aos="fade-up">
                                                    <div class="row">

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                                            <div class="post-box">

                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        19 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#detalhesAtletaModal">
                                                                    <h3 class="post-title">Fulano de Tal</h3>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-16.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        18 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        17 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a
                                            data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                                            class="collapsed">Atletas do Sub-12
                                            <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p class="text-justify">

                                            <section id="noticias" class="recent-blog-posts">
                                                <div class="container" data-aos="fade-up">
                                                    <div class="row">

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        19 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-16.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        18 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        17 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                            </p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up" data-aos-delay="300">
                                        <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a
                                            data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                                            class="collapsed">Atletas do Sub-13
                                            <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="text-justify">

                                            <section id="noticias" class="recent-blog-posts">
                                                <div class="container" data-aos="fade-up">
                                                    <div class="row">

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        19 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-16.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        18 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-17.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        17 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                            </p>
                                        </div>
                                    </li>

                                    <li data-aos="fade-up" data-aos-delay="400">
                                        <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a
                                            data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                                            class="collapsed">Atletas do Sub-14 <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                            <p class="text-justify">

                                            <section id="noticias" class="recent-blog-posts">
                                                <div class="container" data-aos="fade-up">
                                                    <div class="row">

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-15.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        19 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-14.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        18 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                                            <div class="post-box">
                                                                <div class="post-img"><img
                                                                        src="<?php echo URL . 'public/uploads/noticia-15.jpg'; ?>"
                                                                        class="img-fluid" alt=""></div>
                                                                <div class="meta">
                                                                    <span class="post-date"><i
                                                                            class="bi bi-calendar-event"></i>
                                                                        17 de Abril de 2023</span>
                                                                    <span class="post-author"> / <i
                                                                            class="bi bi-person-circle"></i> ADESC
                                                                        Lajes</span>
                                                                </div>
                                                                <h3 class="post-title">Fulano de Tal</h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </section> Fim Perguntas Frequentes

                </div>-->

                <!-- ======= Seção de Patrocinadores ======= -->
                <section id="clients" class="clients section-bg">
                    <div class="container">

                        <div class="row" data-aos="zoom-in">

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>"
                                    class="img-fluid" alt="">
                            </div>

                        </div>

                    </div>
                </section><!-- Fim Patrocinadores -->

                <!-- Fim Modal de Atletas -->
            </div>
        </div>
    </section>

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