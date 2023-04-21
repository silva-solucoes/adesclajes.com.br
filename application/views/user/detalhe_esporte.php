<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL . 'index' ?>">Início</a></li>
                <li>Esportes</li>
                <li>Título do tipo de esporte</li>
            </ol>
            <h2>Título do tipo de esporte</h2>

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
                            <li><strong>Categoria</strong>: Tipo do Esporte</li>
                            <li><strong>Autor</strong>: ADESC Lajes</li>
                            <li><strong>Postado em</strong>: 17 Abr 2023</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Breve descrição da página</h2>
                        <p>
                            Aqui serão exibidas os conteúdos dos esportes, Atletas de cada esporte e as mídias.
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2>Breve descrição da página</h2>
                        <p>
                            Aqui serão exibidas os conteúdos dos esportes, Atletas de cada esporte e as mídias.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Seção de Detalhes de Esporte -->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>