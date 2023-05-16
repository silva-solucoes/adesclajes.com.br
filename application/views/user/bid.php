<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Migalhas de pão ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL . 'index' ?>">Início</a></li>
                <li>BID</li>
            </ol>
            <h2>BID</h2>

        </div>
    </section><!-- End Migalhas de pão -->

    <section class="inner-page about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Boletim Informativo Desportivo</h2>
                <p class="text-center">
                    Não perca tempo, venha fazer parte do futuro do esporte!
                </p>
            </div>

            <div class="row content">
                <h3 class="text-left">Buscar por:</h3>
                <hr>
                <div class="col-lg-12">
                    <form class="needs-validation borda-form php-inscricao-form" novalidate>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="name">Categória Esportiva:</label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Selecione</option>
                                    <option value="1">Futebol</option>
                                    <option value="2">Futsal</option>
                                    <option value="3">Fut7</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="name">Nome do Atleta:</label>
                                <input type="text" name="name" class="form-control" placeholder="Buscar pelo nome"
                                    id="name" required>
                            </div>
                            <div class="form-group col-md-2"><button type="submit">Buscar</button></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <br><br>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?php echo URL . 'public/uploads/atletaA.jpg'; ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Fulano de Tal</h4>
                            <span>Posição do jogador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="<?php echo URL . 'public/uploads/atletaA.jpg'; ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Fulano de Tal</h4>
                            <span>Posição do jogador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="<?php echo URL . 'public/uploads/atletaA.jpg'; ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Fulano de Tal</h4>
                            <span>Posição do jogador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="<?php echo URL . 'public/uploads/atletaA.jpg'; ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Fulano de Tal</h4>
                            <span>Posição do jogador</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======= Seção de Patrocinadores ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo URL . 'public/images/patrocinadores/client-0.png'; ?>" class="img-fluid"
                        alt="">
                </div>

            </div>

        </div>
    </section><!-- Fim Patrocinadores -->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>