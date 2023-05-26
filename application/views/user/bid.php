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

    <section class="inner-page BID">
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
                            <div class="form-group col-md-2 divBotao"><button class="botaoBuscar" title="Buscar"
                                    type="submit"><i class="bi bi-search"></i> Buscar</button></div>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#BID">
                                <h4>Fulano de Tal</h4>
                                <span>Posição do jogador</span>
                            </a>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#BID">
                                <h4>Fulano de Tal</h4>
                                <span>Posição do jogador</span>
                            </a>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#BID">
                                <h4>Fulano de Tal</h4>
                                <span>Posição do jogador</span>
                            </a>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#BID">
                                <h4>Fulano de Tal</h4>
                                <span>Posição do jogador</span>
                            </a>
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

    <!-- ======= Inserindo Modal Detalhes do Jogador ======= -->
    <!-- Modal -->
    <div class="modal fade" id="BID" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-image: url('<?php echo URL; ?>public/images/fundoBID.jpg'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>ATLETA DA ADESC LAJES</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-5 bt-5 text-center">O Boletim Informativo Desportivo (BID) é um documento oficial
                        utilizado para registrar e divulgar informações sobre atletas, transferências, contratos e
                        demais aspectos relacionados ao futebol e outras modalidades esportivas.</p>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 text-center" data-aos="fade-right">
                            <img src="<?php echo URL . 'public/uploads/atletaA.jpg'; ?>"
                                class="img-fluid rounded-circle custom-border" alt="Imagem Arredondada" width="60%">
                        </div>
                        <div class="col-lg-7 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
                            <h3>NOME DO ATLETA EM CAIXA ALTA</h3>
                            <p class="fst-italic">Fulano é um talentoso atleta de futsal que se destaca na posição de
                                meio campo. Com habilidades técnicas excepcionais e uma visão estratégica do jogo, ele
                                desempenha um papel fundamental na equipe.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Posição: Posição (Sigla).</li>
                                <li><i class="bi bi-check-circle"></i> Peso:.</li>
                                <li><i class="bi bi-check-circle"></i> Altura:.</li>
                            </ul>
                        </div>
                        <div class="col-lg-7 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
                            <h3>ESTATÍSTICAS GERAIS</h3>
                            <select class="form-control dropDownAnos" id="anos" name="ano"
                                onchange="changeAno(this.value)">
                                <option value="1">Todos os Anos</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                            </select>
                        </div>
                        <div class="col-lg-5">


                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <!-- Sales Card -->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card jogos-card">

                                        <div class="card-body">

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-futbol"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>1</h2>
                                                    <span class="text-muted small pt-2 ps-1">Jogos</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- End Sales Card -->

                                <!-- Revenue Card -->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card revenue-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-futbol"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>2</h2>
                                                    <span class="text-muted small pt-2 ps-1">Gols Marcados</span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- End Revenue Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card golsPartidas-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-futbol"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>0,55</h2>
                                                    <span class="text-muted small pt-2 ps-1">Gols por partida</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card vitorias-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-trophy-fill"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>5</h2>
                                                    <span class="text-muted small pt-2 ps-1">Vitórias</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card empate-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-equals"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Empates</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card derrotas-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Derrotas</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card customers-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-times-circle"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>4</h2>
                                                    <span class="text-muted small pt-2 ps-1">Faltas</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card vermelho-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-file-fill"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>3</h2>
                                                    <span class="text-muted small pt-2 ps-1">Cartões Amarelo</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card amarelo-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-file-fill"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>1</h2>
                                                    <span class="text-muted small pt-2 ps-1">Cartões Vermelho</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card campeonato-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Torneios</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card amistoso-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-handshake"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2>0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Amistosos</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div><!-- End Customers Card -->

                            </div>
                        </div><!-- End Right side columns -->

                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header">EQUIPE PRINCIPAL</div>
                                <div class="card-body text-center">
                                    <div class="row g-0">
                                        <div class="col-md-5 text-center">
                                            <img src="<?php echo URL . 'public/uploads/equipeA.jpg'; ?>"
                                                class="img-fluid rounded-circle custom-border-escudo mt-3"
                                                alt="Imagem Arredondada">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body mt-5">
                                                <h5 class="card-title tamanhoF">ADESC F.C</h5>
                                                <p class="card-text">Desde 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    TRANSFERÊNCIAS DO ATLETA
                                    <div class="col-md-12">
                                        <div class="card-body mt-3">
                                            <p class="card-text tamanhoFTransferencia">2023 - <b>Clube A</b> para
                                                <b>ADESC F. C.</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">CONVOCAÇÕES</div>
                                <div class="card-body mt-3">
                                    <p class="card-text tamanhoFTransferencia">2023 - <b>Seleção Brasileira</b></p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>