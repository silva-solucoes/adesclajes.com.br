<?php include_once 'header.php'; ?>

<main>
    <section class="banner">
        <!-- o conteúdo do banner vai aqui -->
        <div class="banner-overlay">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"></div>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>MAIS QUE ATLETAS</h1>
                            <p>FORMAMOS CIDADÃOS</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="latest-news">
        <!-- o conteúdo das notícias mais recentes vai aqui -->
        <div class="container">
            <div class="row">
                <div class="col-2 bg-AzulMarinho"></div>
                <div class="col-8 text-center">
                    <h1 class="text-black font-weight-bold">ÚLTIMAS NOTÍCIAS</h1>
                </div>
                <div class="col-2 bg-AzulMarinho"></div>
            </div>
        </div>
        <div class="album py-5 latest-news">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-01.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-02.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-03.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="d-grid gap-2 col-md-12">
                <a href="#" class="ver-mais-btn">Ver Mais Notícias</a>
            </div>
        </div>
    </section>
    <section class="sobre-nos">
        <!-- o conteúdo do sobre nós vai aqui -->
        <div class="container">
            <div class="row">
                <div class="col-2 bg-AzulCeleste"></div>
                <div class="col-8 text-center">
                    <h1 class="text-black font-weight-bold">SOBRE-NÓS</h1>
                </div>
                <div class="col-2 bg-AzulCeleste"></div>
            </div>
        </div>
        <div class="album py-5">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Título. <span
                                class="text-body-secondary">Sub-Título.</span></h2>
                        <p class="lead">Aqui deve ser gerado um poco da história da associação, não muito extenso e nem muito curta, deve finalizar com um botão ou link que leve para o acesso a história completa da ADESC.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="../../public/uploads/noticia-12.jpg"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            alt="Imagem responsiva" width="500" height="500" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
                            title="Título da Notícia">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corpo-diretivo">
        <!-- o conteúdo do corpo diretivo vai aqui -->
        <div class="container">
            <div class="row">
                <div class="col-2 bg-AmareloOuro"></div>
                <div class="col-8 text-center">
                    <h1 class="text-black font-weight-bold">CORPO DIRETIVO</h1>
                </div>
                <div class="col-2 bg-AmareloOuro"></div>
            </div>
        </div>
        <div class="album py-5 latest-news">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-01.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-02.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-03.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="d-grid gap-2 col-md-12">
                <a href="#" class="ver-mais-btn">Ver Mais Notícias</a>
            </div>
        </div>
    </section>
    <section class="contato">
        <!-- o conteúdo do contato vai aqui -->
        <div class="container">
            <div class="row">
                <div class="col-2 bg-AmareloOuro"></div>
                <div class="col-8 text-center">
                    <h1 class="text-black font-weight-bold">CONTATO</h1>
                </div>
                <div class="col-2 bg-AmareloOuro"></div>
            </div>
        </div>
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-01.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-02.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a class="link-card" href="#">
                                <img src="../../public/uploads/noticia-03.jpg" class="img-fluid" alt="Imagem responsiva"
                                    title="Título da Notícia">
                            </a>
                            <div class="bg-registro text-justify d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="color-registro text-body-secondary">Postado em: 07 ABR 2023 -
                                        15:25</small>
                                </div>
                            </div>
                            <div class="bg-titulo card-body text-justify">
                                <a class="link-card" href="#">
                                    <p class="color-titulo card-text">ADSC vence de virada e segue na liderança do
                                        campeonato de futebol local.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="d-grid gap-2 col-md-12">
                <a href="#" class="ver-mais-btn">Ver Mais Notícias</a>
            </div>
        </div>
    </section>

</main>

<?php include_once 'footer.php'; ?>