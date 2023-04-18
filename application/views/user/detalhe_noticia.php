<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL . 'index' ?>">Início</a></li>
                <li><a href="<?php echo URL . 'noticias' ?>">Notícia</a></li>
                <li>Título da Notícia</li>
            </ol>
            <h2>Título da Notícia</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Seção de Detalhes de Notícia ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'Public/uploads/noticia-01.jpg'; ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'Public/uploads/noticia-02.jpg'; ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo URL . 'Public/uploads/noticia-03.jpg'; ?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informações da Postagem</h3>
                        <ul>
                            <li><strong>Categória</strong>: Futsal</li>
                            <li><strong>Local</strong>: Lajes/RN</li>
                            <li><strong>Postado em</strong>: 18 Abril 2023</li>
                            <li><strong>Compartilhe</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-info">
                        <h3>Últimas Notícias</h3>
                        <ul>
                            <li><a href="#"><strong>Título da Notícia</strong>: Breve descrição</a></li>
                            <li><a href="#"><strong>Título da Notícia</strong>: Breve descrição</a></li>
                            <li><a href="#"><strong>Título da Notícia</strong>: Breve descrição</a></li>
                            <li><a href="#"><strong>Título da Notícia</strong>: Breve descrição</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2>ADESC vence de virada e segue na liderança do campeonato de futebol local</h2>
                        <p>
                            A equipe da ADESC mostrou garra e determinação em mais uma vitória
                            emocionante de virada, mantendo-se na liderança do campeonato de futebol local. Com um
                            desempenho impressionante em campo, nossos atletas provaram mais uma vez o
                            comprometimento e
                            habilidade que os mantêm no topo da competição.
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3>Comentários</h3>
                        <ul>
                            <li>
                                <!--
                                <?php foreach ($comentarios as $comentario) { ?>
                                    <p><strong>
                                            <?php echo $comentario['nome']; ?>:
                                        </strong>
                                        <?php echo $comentario['comentario']; ?>
                                    </p>
                                <?php } ?> -->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="name">Menssagem:</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                            </li>
                            <li>
                                <div class="text-center"><button type="submit">Enviar Comentário</button></div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>