<!-- ======= Inserindo Cabeçalho ======= -->
<?php include_once 'header.php'; ?>
<?php
setlocale(LC_TIME, 'portuguese');
$dataAtual = date('Y-m-d');
?>
<!-- ======= Seção de Destaque ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1><?= $dados['info']->titulo_destaque ?></h1>
                <h2><?= $dados['info']->sub_titulo_destaque ?></h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <?php if ($dataAtual >= $dados['info']->dt_abe_inscricao && $dataAtual <= $dados['info']->dt_enc_Inscricao) : ?>
                        <a href="#" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Área de Inscrição</a>
                    <?php endif; ?>
                    <a href="<?= $dados['info']->incorporarVideo ?>" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Assistir Vídeo</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo URL . '/public/images/' . $dados['info']->imgDestaque; ?>" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- Fim Destaque -->

<main id="main">

    <!-- ======= Seção de Patrocinadores ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row center slider" data-aos="zoom-in">
                <?php foreach ($dados['patrocinadores'] as $listar) : ?>

                    <?php if ($listar->tipoVideo == "Não") : ?>
                        <!-- Exibir somente o link de acesso a rede social do patrocinador -->
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <a href="<?= $listar->link_acesso ?>" title="<?= $listar->nomePatrocinador ?>" target="_blank">
                                <img width="200" height="87" src="<?php echo URL . '/public/images/patrocinadores/' . $listar->img_patrocinio; ?>" class="img-fluid" alt="<?= $listar->nomePatrocinador ?>">
                            </a>
                        </div>

                    <?php elseif ($listar->tipoVideo == "Sim") : ?>
                        <!-- Exibir o vídeo de divulgação do patrocinador no site da adesc -->
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <a href="<?= $listar->link_acesso ?>" class="glightbox btn-watch-video"><img width="200" height="87" src="<?php echo URL . '/public/images/patrocinadores/' . $listar->img_patrocinio; ?>" class="img-fluid" alt="<?= $listar->nomePatrocinador ?>"></a>
                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- Fim Patrocinadores -->

    <!-- ======= Seção de Últimas Notícias ======= -->
    <section id="noticias" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $dados['info']->tl_pgUltimas ?></h2>
                <p><?= $dados['info']->sub_tlPgUltimas ?></p>
            </div>

            <div class="row">
                <?php $i = 0; ?>
                <?php foreach ($dados['ultimasNoticias'] as $listar) : ?>
                    <?php $i += 200; ?>
                    <?php $dataPostagem = strftime('%d de %B de %Y', strtotime($listar->dtAtualizacao)); ?>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<? $i ?>">
                        <div class="post-box">
                            <div class="post-img"><img src="<?php echo URL . '/public/uploads/noticias/' . $listar->img_Noticia; ?>" class="img-fluid" alt="Imagem Destaque"></div>
                            <div class="meta">
                                <span class="post-date"><i class="bi bi-calendar-event"></i> <?= $dataPostagem ?></span>
                                <span class="post-author"> / <i class="bi bi-person-circle"></i>
                                    <?= $listar->nome_usuario ?></span>
                            </div>
                            <h3 class="post-title"><?= $listar->tl_noticia ?></h3>
                            <?php if (strlen($listar->descricao) >= 100) : ?>
                                <p><?php echo $descricao = substr($listar->descricao, 0, 100) . "..."; ?></p>
                            <?php else : ?>
                                <p><?= $listar->descricao ?></p>
                            <?php endif; ?>
                            <a href="<?php echo URL . '/paginas/detalheNoticias/' . $listar->id_noticia; ?>" class="readmore stretched-link"><span>Ler
                                    mais</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 text-center" data-aos="zoom-in" data-aos-delay="500">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?php echo URL . '/paginas/noticias/1' ?>" class="btn-get-started">Ver Mais Notícias</a>
                </div>
            </div>
        </div>

    </section><!-- End Seção de Últimas Notícias -->

    <!-- ======= Seção Sobre-nós ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $dados['info']->tl_pgSobre ?></h2>
                <p class="text-center"><?= $dados['info']->sub_tlSobre ?></p>
            </div>

            <div class="row content">
                <div class="col-lg-6 text-justify">
                    <?= $dados['info']->resumo ?>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 text-justify">
                    <?= $dados['info']->historia ?>
                </div>
            </div>

        </div>
    </section><!-- Fim Seção Sobre-nós -->

    <!-- ======= Seção Porque nós ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3><?= $dados['info']->tituloEscolha ?> <strong><?= $dados['info']->subTituloEscolha ?></strong>
                        </h3>
                        <p class="text-justify"><?= $dados['info']->descricaoEscolha ?></p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <?php $i = 0; ?>
                            <?php foreach ($dados['escolher'] as $listar) : ?>
                                <?php $i += 1; ?>
                                <?php if ($listar->id_opcao == $listar->menorID) : ?>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?= $i ?>"><span>0<?= $i ?></span>
                                            <?= $listar->tituloOpcao ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-<?= $i ?>" class="collapse show" data-bs-parent=".accordion-list">
                                            <p class="text-justify"><?= $listar->descricaoOpcao ?></p>
                                        </div>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?= $i ?>"><span>0<?= $i ?></span>
                                            <?= $listar->tituloOpcao ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-<?= $i ?>" class="collapse" data-bs-parent=".accordion-list">
                                            <p class="text-justify"><?= $listar->descricaoOpcao ?></p>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo URL . '/public/images/' . $dados['info']->img_destaque; ?>");' data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;</div>
            </div>

        </div>
    </section><!-- Fim Seção Porque nós -->

    <!-- ======= Seção Chamada Para Ação ======= -->
    <section id="cta" class="cta section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <?php if ($dataAtual >= $dados['info']->dt_abe_inscricao && $dataAtual <= $dados['info']->dt_enc_Inscricao) : ?>
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Junte-se a nós e faça parte da família ADESC!</h3>
                        <p> Inscreva-se agora mesmo em nosso site oficial e tenha a oportunidade de desenvolver suas
                            habilidades esportivas enquanto se diverte e faz novas amizades. Não perca tempo, seja um atleta
                            ADESC hoje mesmo!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Área de Inscrição</a>
                    </div>
                <?php else : ?>
                    <div class="col-lg-12 text-center">
                        <h3>Junte-se a nós e faça parte da família ADESC!</h3>
                        <p> As inscrições ainda não estão abertas. Fique atento(a) ao nosso período de novas inscrições em
                            nosso site.</p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- Fim Seção Chamada Para Ação -->

    <!-- ======= Seção Equipe ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $dados['info']->tl_pgEquipe ?></h2>
                <p><?= $dados['info']->sub_tlEquipe ?></p>
            </div>

            <div class="row">
                <?php foreach ($dados['todosMembros'] as $listar) : ?>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo URL . '/public/uploads/direcao/' . $listar->fotoMembro; ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?= $listar->nome_membro ?></h4>
                                <span><?= $listar->funcao ?></span>
                                <p><?= $listar->detalhe ?></p>
                                <div class="social">
                                    <?php if ($listar->link_Facebook != '#') : ?>
                                        <a href="<?= $listar->link_Facebook ?>"><?= $listar->iconeFacebook ?></a>
                                    <?php endif; ?>
                                    <?php if ($listar->link_Instagram != '#') : ?>
                                        <a href="<?= $listar->link_Instagram ?>"><?= $listar->iconeInstagram ?></a>
                                    <?php endif; ?>
                                    <?php if ($listar->link_Linkedin != '#') : ?>
                                        <a href="<?= $listar->link_Linkedin ?>"><?= $listar->iconeLinkedin ?></a>
                                    <?php endif; ?>
                                    <?php if ($listar->link_TikTok != '#') : ?>
                                        <a href="<?= $listar->link_TikTok ?>"><?= $listar->iconeTikTok ?></a>
                                    <?php endif; ?>
                                    <?php if ($listar->link_Twitter != '#') : ?>
                                        <a href="<?= $listar->link_Twitter ?>"><?= $listar->iconeTwitter ?></a>
                                    <?php endif; ?>
                                    <!--
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section><!-- Fim Seção Equipe -->

    <!-- ======= Seção de Perguntas Frequentes ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $dados['info']->tl_pagPerguntas ?></h2>
                <p><?= $dados['info']->sub_tlPerguntas ?></p>
            </div>

            <div class="faq-list">
                <ul>
                    <?php $contador = 0;
                    $i = 0; ?>
                    <?php foreach ($dados['perguntas'] as $listar) : ?>
                        <?php $contador += 100;
                        $i += 1; ?>
                        <?php if ($listar->id_listaPergunta  == $listar->menorID) : ?>
                            <li data-aos="fade-up" data-aos-delay="<?= $contador ?>">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?= $i ?>"><?= $listar->tl_pergunta ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-<?= $i ?>" class="collapse show" data-bs-parent=".faq-list">
                                    <p class="text-justify"><?= $listar->resposta ?></p>
                                </div>
                            </li>
                        <?php else : ?>
                            <li data-aos="fade-up" data-aos-delay="<?= $contador ?>">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?= $i ?>"><?= $listar->tl_pergunta ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-<?= $i ?>" class="collapse" data-bs-parent=".faq-list">
                                    <p class="text-justify"><?= $listar->resposta ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
    </section><!-- Fim Perguntas Frequentes -->

    <!-- ======= Seção de Contatos ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $dados['info']->tl_contato ?></h2>
                <p><?= $dados['info']->sub_tlContato ?></p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localização:</h4>
                            <p><?= $dados['info']->logradouro ?>, <?= $dados['info']->numero ?>,
                                <?= $dados['info']->bairro ?>, <?= $dados['info']->cidade ?>/<?= $dados['info']->uf ?>, CEP:
                                <?= $dados['info']->cep ?></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>E-mail:</h4>
                            <p><?= $dados['info']->email ?></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Tel:</h4>
                            <p><?= $dados['info']->telefone ?></p>
                        </div>

                        <iframe src="<?= $dados['info']->localizacaoIFRAM ?>" width="600" height="450" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="<?= URL ?>/user/enviarContato" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Seu Nome:</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Seu E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Assunto:</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Menssagem:</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- Fim Seção de Contatos -->

    <!-- ======= Seção de Patrocinadores ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row center slider" data-aos="zoom-in">
                <?php foreach ($dados['patrocinadores'] as $listar) : ?>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="<?= $listar->link_acesso ?>" title="<?= $listar->nomePatrocinador ?>" target="_blank">
                            <img width="200" height="87" src="<?php echo URL . '/public/images/patrocinadores/' . $listar->img_patrocinio; ?>" class="img-fluid" alt="<?= $listar->nomePatrocinador ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- Fim Patrocinadores -->

</main><!-- Fim #main -->

<!-- ======= Inserindo Rodapé ======= -->
<?php include_once 'footer.php'; ?>