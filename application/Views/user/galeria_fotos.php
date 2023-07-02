<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL; ?>">Início</a></li>
                <li>Galeria de Fotos</li>
            </ol>
            <h2>Galeria de Fotos</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- GALERIA DE FOTOS -->
    <section id="portfolio-details" class="portfolio-details">
        
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informações</h3>
                        <ul>
                            <li><strong>Galeria de Fotos</strong></li>
                            <li><strong>Autor</strong>: ADESC Lajes</li>
                            <li><strong>Atualizado em</strong>: 04 Jul 2023</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info portfolio-description">
                        <h2>Sobre a Galeria de Fotos</h2>
                        <p>
                            Explore a nossa galeria de imagens e confira momentos incríveis da ADESC Lajes!
                            Veja fotos dos nossos jogadores, das partidas emocionantes e dos bastidores do
                            nosso time. Não perca mais tempo, acesse agora mesmo o nosso site e confira as
                            melhores imagens da ADESC Lajes!
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">

                    <!-- ======= Seção de Fotos ======= -->
                    <section id="gallery" class="gallery">
                        <div class="container-fluid">
                            <div class="row gy-4 justify-content-center">
                            <?php foreach($dados['exibirFotos'] as $listar):?>
                            
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="gallery-item h-100">
                                        <img src="<?php echo URL . '/public/uploads/fotos/'.$listar->foto_galeria; ?>" class="img-fluid" alt="">
                                        <div class="gallery-links d-flex align-items-center justify-content-center">
                                            <a href="<?php echo URL . '/public/uploads/fotos/'.$listar->foto_galeria; ?>" title="<?='<b>'.$listar->tl_pagFotos.'</b>: '.$listar->descricao_pagFotos?>" class="glightbox preview-link">
                                            <i class="bi bi-arrows-angle-expand"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Gallery Item -->
                            <?php endforeach; ?>
                                
                            </div>

                        </div>
                    </section><!-- End Gallery Section -->

                </div>
                <!-- FIM GALERIA DE FOTOS -->

            </div>
        </div>
    </section><!-- End Seção de Detalhes de Esporte -->

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