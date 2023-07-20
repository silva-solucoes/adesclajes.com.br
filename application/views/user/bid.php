<?php include_once 'header.php'; ?>

<main id="main">

    <!-- ======= Migalhas de pão ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL; ?>">Início</a></li>
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
                    <form class="needs-validation borda-form php-inscricao-form" action="<?= URL ?>/paginas/buscarAtleta" novalidate>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="name">Categória Esportiva:</label>
                                <select class="form-select" aria-label="Default select example" name="cat">
                                    <option selected>Selecione</option>
                                    <?php foreach($dados['exibirCategorias'] as $list): ?>
                                    <option value="<?=$list->id_categoria?>"><?=$list->nome?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="name">Nome do Atleta:</label>
                                <input type="text" name="name" class="form-control" placeholder="Buscar pelo nome"
                                    id="name">
                            </div>
                            <div class="form-group col-md-2 divBotao"><button class="botaoBuscar" title="Buscar"
                                    type="submit"><i class="bi bi-search"></i> Buscar</button></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <br><br>
                <?php $i = 0; ?>
                <?php foreach($dados['exibirJogadores'] as $listar):?>
                <?php $numeroFormatado = str_pad($listar->id_inscricao, 4, '0', STR_PAD_LEFT); ?>
                <?php $i += 100;?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="<?=$i?>">
                        <div class="member-img">
                        <?php if ($listar->foto_atleta == 'semfoto.webp') : ?>
                            <img src="<?php echo URL . '/public/images/'.$listar->foto_atleta; ?>" class="img-fluid" alt="">
                        <?php else : ?>
                            <img src="<?php echo URL . '/public/uploads/atletas/'.$listar->foto_atleta; ?>" class="img-fluid" alt="">
                        <?php endif; ?>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        
                        <div class="member-info">
                            <a href="#" class="member-link" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?=$listar->id_atleta ?>">
                                <h4><?=$listar->nome_atleta?></h4>
                                <span><?=$listar->posicaoPrincipal?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

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

    <!-- ======= Inserindo Modal Detalhes do Jogador ======= -->
    <!-- Modal -->
    <div class="modal fade" id="BID" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-image: url('<?php echo URL; ?>/public/images/fundoBID.webp'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>ATLETA DA ADESC LAJES</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-5 bt-5 text-center">O Boletim Informativo Desportivo (BID) é um documento oficial
                        utilizado para registrar e divulgar informações sobre atletas, transferências, contratos e
                        demais aspectos relacionados ao futebol e outras modalidades esportivas.</p>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 text-center" data-aos="fade-right">
                            <img src="" id="fotoAtleta"
                                class="img-fluid rounded-circle custom-border" alt="Imagem Arredondada" width="60%">
                        </div>
                        <div class="col-lg-7 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
                            <h3 id="nomeAtleta">NOME DO ATLETA EM CAIXA ALTA</h3>
                            <p class="fst-italic"><h6 id="nomeAtleta"></h6> é um talentoso atleta de futsal que se destaca na posição de
                                meio campo. Com habilidades técnicas excepcionais e uma visão estratégica do jogo, ele
                                desempenha um papel fundamental na equipe.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Posição: <span id="pocisaoAtleta"></span></li>
                                <li><i class="bi bi-check-circle"></i> Peso: <span id="pesoAtleta"></span></li>
                                <li><i class="bi bi-check-circle"></i> Altura: <span id="alturaAtleta"></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-7 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
                            <h3>ESTATÍSTICAS GERAIS</h3>
                            <select class="form-select dropDownAnos" id="anos" name="ano" onchange="changeAno(this.value)"></select>
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
                                                    <h2 id="jogos">0</h2>
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
                                                    <h2 id="gols">0</h2>
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
                                                    <h2 id="golsPartida">0,55</h2>
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
                                                    <h2 id="vitorias">0</h2>
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
                                                    <h2 id="empates">0</h2>
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
                                                    <h2 id="derrotas">0</h2>
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
                                                    <h2 id="faltas">0</h2>
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
                                                    <h2 id="vermelhos">0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Cartões Vermelho</span>

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
                                                    <h2 id="amarelos">0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Cartões Amarelo</span>

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
                                                    <h2 id="torneios">0</h2>
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
                                                    <h2 id="amistosos">0</h2>
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
                                            <img src="<?php echo URL . '/public/uploads/equipeA.webp'; ?>"
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