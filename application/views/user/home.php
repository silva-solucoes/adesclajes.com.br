<?php include_once 'header.php'; ?>

<main class="mt-5">
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
                                <img src="<?php echo URL . 'public/uploads/noticia-01.jpg'; ?>" class="img-fluid"
                                    alt="Imagem responsiva" title="Título da Notícia">
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
                                <img src="<?php echo URL . 'public/uploads/noticia-02.jpg'; ?>" class="img-fluid"
                                    alt="Imagem responsiva" title="Título da Notícia">
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
                                <img src="<?php echo URL . 'public/uploads/noticia-03.jpg'; ?>" class="img-fluid"
                                    alt="Imagem responsiva" title="Título da Notícia">
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
                <a href="noticias" class="ver-mais-btn">Ver Mais Notícias</a>
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
                        <h2 class="featurette-heading fw-normal lh-1">Conheça a <b>ADESC</b>: <span
                                class="text-body-secondary">A Associação Comunitária que promove cultura, esporte e
                                inclusão social!</span></h2>
                        <p class="lead">
                        <div style="text-align: justify;"><span
                                style="background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;"><span
                                    style="margin-left: 50px;"> </span>A Associação Comunitária Cultural, Social e
                                Desportiva de Lajes/RN (ADESC) iniciou suas atividades em 15 de novembro de 1997, em
                                parceria com a Associação Atlética do Banco do Brasil, que era liderada por <b>José
                                    Anchieta dos Santos</b>.</span></div>
                        <div style="text-align: justify;"><span
                                style="background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;"><span
                                    style="margin-left: 50px;"> </span>A associação começou como uma escola de futebol e
                                depois expandiu para outros esportes, como futsal, natação, taekwondo, vôlei e
                                hidroginástica. O projeto foi inicialmente organizado por <b>Adeilson Fernandes da
                                    Rocha</b>, que fundou a Associação Desportiva Lajes do Cabugi - ADLC.</span></div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo URL . 'public/uploads/sobre-02.jpg'; ?>"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            alt="Imagem responsiva" width="500" height="500" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"
                            title="Título da Notícia">
                    </div>
                    <br>
                    <div class="col-md-7">
                        <p class="lead">
                        <div style="text-align: justify;"><span
                                style="background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;"><span
                                    style="margin-left: 50px;"> </span>A escola não pôde iniciar suas atividades devido
                                à
                                falta de um local para operar, mas em agosto do mesmo ano, uma parceria foi formada com
                                o Presidente da AABB Lajes, e as atividades começaram em novembro.</span></div>
                        <div style="text-align: justify;"><span
                                style="background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;"><span
                                    style="margin-left: 50px;"> </span>A escola rapidamente ganhou popularidade, e
                                muitos
                                de seus atletas passaram a jogar em nível estadual.</span></div>
                        <div style="text-align: justify;"><span
                                style="background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px;"><span
                                    style="margin-left: 50px;"> </span>Em 2015, a associação foi registrada e
                                reconhecida
                                como entidade de utilidade pública municipal com o nome de Associação Comunitária
                                Cultural, Social e Desportiva de Lajes/RN - ADESC LAJES. A associação continua a
                                prosperar e receber apoio de diversas organizações.</span></div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo URL . 'public/uploads/noticia-12.jpg'; ?>"
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
        <div class="album py-5 corpo-diretivo">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="tm-cartao card">
                            <img class="card-img-top" src="<?php echo URL . 'public/uploads/corpo-diretivo-01.jpg'; ?>"
                                alt="Imagem do card">
                            <div class="card-body" style="background-color: #D98E04;">
                                <div class="card-title">
                                    <h5 class="text-center">Adeilson Fernandes</h5>
                                    <p class="text-center">Presidente da ADESC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tm-cartao card">
                            <img class="card-img-top" src="<?php echo URL . 'public/uploads/corpo-diretivo-00.jpg'; ?>"
                                alt="Imagem do card">
                            <div class="card-body" style="background-color: #D98E04;">
                                <div class="card-title">
                                    <h5 class="text-center">Nome do Funcionário</h5>
                                    <p class="text-center">Função</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tm-cartao card">
                            <img class="card-img-top" src="<?php echo URL . 'public/uploads/corpo-diretivo-00.jpg'; ?>"
                                alt="Imagem do card">
                            <div class="card-body" style="background-color: #D98E04;">
                                <div class="card-title">
                                    <h5 class="text-center">Nome do Funcionário</h5>
                                    <p class="text-center">Função</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tm-cartao card">
                            <img class="card-img-top" src="<?php echo URL . 'public/uploads/corpo-diretivo-00.jpg'; ?>"
                                alt="Imagem do card">
                            <div class="card-body" style="background-color: #D98E04;">
                                <div class="card-title">
                                    <h5 class="text-center">Nome do Funcionário</h5>
                                    <p class="text-center">Função</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="contato">
        <!-- o conteúdo do contato vai aqui -->
        <div class="container">
            <div class="row">
                <div class="col-2 bg-cinza"></div>
                <div class="col-8 text-center">
                    <h1 class="text-black font-weight-bold">CONTATO</h1>
                </div>
                <div class="col-2 bg-cinza"></div>
            </div>
        </div>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Entre em contato</h2>
                        <form>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo:*</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone:*</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem:*</label>
                                <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn-contato">Enviar Mensagem</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Nossa localização</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7940.226637409953!2d-36.24721695507474!3d-5.696763783402539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b175240d7b973b%3A0x65cfed6516bca33d!2sRiacho%20Madeira!5e0!3m2!1spt-BR!2sbr!4v1680903376873!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

    </section>

</main>

<?php include_once 'footer.php'; ?>