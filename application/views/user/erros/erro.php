<?php include '../application/Views/user/header.php'; ?>

<main id="main">

    <!-- ======= Guia de Navegação ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL; ?>">Início</a></li>
                <li>Erro 404</li>
            </ol>
            <h2>Erro 404</h2>

        </div>
    </section><!-- End Guia de Navegação -->

    <!-- ======= Conteúdo da Página ======= -->
    <section class="inner-page">
        <div class="container">
            <p>
                <b>Erro 404:</b> Página não encontrada!
            </p>
        </div>
    </section><!-- ======= End Conteúdo da Página ======= -->

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

<?php include_once '../application/Views/user/footer.php'; ?>