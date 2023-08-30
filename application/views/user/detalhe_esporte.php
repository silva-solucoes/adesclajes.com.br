<?php include_once 'header.php'; ?>
<?php

if ($dados['categoria'] == 'Fut7') :
    function possuiAtletasSub07($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 3 && $idade == 7) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub08($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 3 && $idade == 8) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub09($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 3 && $idade == 9) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub10($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 3 && $idade == 10) {
                return true;
            }
        }

        return false;
    }
    
endif;

if ($dados['categoria'] == 'Futsal') {
    function possuiAtletasSub07($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 2 && $idade == 7) {
                return true;
            }
        }

        return false;
    }

    function possuiAtletasSub08($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 2 && $idade == 8) {
                return true;
            }
        }

        return false;
    }

    function possuiAtletasSub09($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 2 && $idade == 9) {
                return true;
            }
        }

        return false;
    }

    function possuiAtletasSub10($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 2 && $idade == 10) {
                return true;
            }
        }

        return false;
    }
}

if ($dados['categoria'] == 'Futebol') :
    
    function possuiAtletasSub11($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 11) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub12($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 12) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub13($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 13) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub14($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 14) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub15($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 15) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub16($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 16) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub17($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 17) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub18($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 18) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub19($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 19) {
                return true;
            }
        }

        return false;
    }
    function possuiAtletasSub20($dadosAtleta)
    {
        $dataAtual = date('Y'); // Ano atual

        foreach ($dadosAtleta as $listar) {
            $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
            $idade = $dataAtual - $anoNascimento;

            if ($listar->categoriaEsportiva == 1 && $idade == 20) {
                return true;
            }
        }

        return false;
    }
endif;
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo URL; ?>">Início</a></li>
                <li>Esportes</li>
                <li><?= $dados['titulo'] ?></li>
            </ol>
            <h2><?= $dados['titulo'] ?></h2>

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
                            <li><strong>Categoria</strong>: <?= $dados['categoria'] ?></li>
                            <li><strong>Autor</strong>: <?= $dados['autor'] ?></li>
                            <li><strong>Postado em</strong>: <?= $dados['data'] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info portfolio-description">
                        <h2>Sobre a categoria esportiva <?= $dados['categoria'] ?></h2>
                        <p class="text-justify">
                            <?= $dados['descricao'] ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-12">

                    <!-- ======= Seção de Atletas ======= -->
                    <section id="faq" class="faq section-bg">
                        <div class="container" data-aos="fade-up">

                            <div class="section-title">
                                <h2>Quadro de Atletas</h2>
                                <p>Não perca a chance de conhecer os nossos atletas de futsal separados por níveis!
                                    Confira agora mesmo as suas características técnicas e surpreenda-se com o talento
                                    desses jovens jogadores. Acesse o nosso site e confira!</p>
                            </div>

                            <div class="faq-list">
                                <ul>
                                <?php if ($dados['categoria'] == 'Fut7' && possuiAtletasSub07($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-07 -->
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i>
                                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-7">
                                                Atletas do Sub-07
                                                <i class="bx bx-chevron-down icon-show"></i>
                                                <i class="bx bx-chevron-up icon-close"></i>
                                            </a>
                                            <div id="faq-list-7" class="collapse show" data-bs-parent=".faq-list">
                                                <p class="text-justify">
                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Fixo' => [],
                                                                'Ala Esquerda' => [],
                                                                'Ala Direita' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 3 && $idade == 7) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Fut7' && possuiAtletasSub08($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-08 -->
                                        <li data-aos="fade-up" data-aos-delay="200">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Atletas do Sub-08
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala' => [],
                                                                'Zagueiro' => [],
                                                                'Meia' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 3 && $idade == 8) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Fut7' && possuiAtletasSub09($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-09 -->
                                        <li data-aos="fade-up" data-aos-delay="300">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Atletas do Sub-09
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala' => [],
                                                                'Zagueiro' => [],
                                                                'Meia' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 3 && $idade == 9) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Fut7' && possuiAtletasSub10($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-10 -->
                                        <li data-aos="fade-up" data-aos-delay="400">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Atletas do Sub-10 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala' => [],
                                                                'Zagueiro' => [],
                                                                'Meia' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 3 && $idade == 10) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub07($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-07 -->
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i>
                                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-7">
                                                Atletas do Sub-07
                                                <i class="bx bx-chevron-down icon-show"></i>
                                                <i class="bx bx-chevron-up icon-close"></i>
                                            </a>
                                            <div id="faq-list-7" class="collapse show" data-bs-parent=".faq-list">
                                                <p class="text-justify">
                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala Direita' => [],
                                                                'Fixo' => [],
                                                                'Ala Esquerda' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 2 && $idade == 7) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub08($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-08 -->
                                        <li data-aos="fade-up" data-aos-delay="200">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Atletas do Sub-08
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala Direita' => [],
                                                                'Fixo' => [],
                                                                'Ala Esquerda' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 2 && $idade == 8) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub09($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-09 -->
                                        <li data-aos="fade-up" data-aos-delay="300">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Atletas do Sub-09
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala Direita' => [],
                                                                'Fixo' => [],
                                                                'Ala Esquerda' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 2 && $idade == 9) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub10($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-10 -->
                                        <li data-aos="fade-up" data-aos-delay="400">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Atletas do Sub-10 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Ala Direita' => [],
                                                                'Fixo' => [],
                                                                'Ala Esquerda' => [],
                                                                'Pivô' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 2 && $idade == 10) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub11($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-11 -->
                                        <li data-aos="fade-up" data-aos-delay="500">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">Atletas do Sub-11 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 11) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub12($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-12 -->
                                        <li data-aos="fade-up" data-aos-delay="600">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">Atletas do Sub-12 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 12) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub13($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-13 -->
                                        <li data-aos="fade-up" data-aos-delay="700">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed">Atletas do Sub-13 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 13) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub14($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-14 -->
                                        <li data-aos="fade-up" data-aos-delay="800">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed">Atletas do Sub-14 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 14) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub15($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-15 -->
                                        <li data-aos="fade-up" data-aos-delay="900">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">Atletas do Sub-15 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 15) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub16($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-16 -->
                                        <li data-aos="fade-up" data-aos-delay="1000">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed">Atletas do Sub-16 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 16) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub17($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-17 -->
                                        <li data-aos="fade-up" data-aos-delay="1000">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed">Atletas do Sub-17 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 17) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub18($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-18 -->
                                        <li data-aos="fade-up" data-aos-delay="1100">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-18" class="collapsed">Atletas do Sub-18 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-18" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 18) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub19($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-19 -->
                                        <li data-aos="fade-up" data-aos-delay="1200">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-19" class="collapsed">Atletas do Sub-19 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-19" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 19) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub20($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-20 -->
                                        <li data-aos="fade-up" data-aos-delay="1300">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-20" class="collapsed">Atletas do Sub-20 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-20" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php
                                                            $i = 0;
                                                            $posicoes = [
                                                                'Goleiro' => [],
                                                                'Lateral' => [],
                                                                'Zagueiro' => [],
                                                                'Volante' => [],
                                                                'Meia' => [],
                                                                'Atacante' => []
                                                            ];

                                                            foreach ($dados['dadosAtleta'] as $listar) {
                                                                $i += 200;
                                                                $dataAtual = date('Y');
                                                                $anoNascimento = date("Y", strtotime($listar->dtNascimento_atleta));
                                                                $idade = $dataAtual - $anoNascimento;

                                                                if ($listar->categoriaEsportiva == 1 && $idade == 20) {
                                                                    $posicao = $listar->posicaoPrincipal;
                                                                    if (array_key_exists($posicao, $posicoes)) {
                                                                        $posicoes[$posicao][] = $listar;
                                                                    }
                                                                }
                                                            }

                                                            $mostrouAtleta = false;
                                                            foreach ($posicoes as $posicao => $atletas) {
                                                                if (!empty($atletas)) {
                                                                    if ($mostrouAtleta) {
                                                                        echo '<div style="clear:both;"></div>';
                                                                    }
                                                                    foreach ($atletas as $i => $listar) {
                                                                        $dataEdicao = $listar->dt_edicao;
                                                            ?>
                                                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                                                                            <div class="post-box">
                                                                                <div class="post-img">
                                                                                    <img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" class="img-fluid" alt="">
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span class="post-date" title="Data de Atualização de Dados">
                                                                                        <i class="bi bi-calendar-event"></i>
                                                                                        <?= $dataFormatada = strftime('%d de %B de %Y', strtotime($dataEdicao)); ?>
                                                                                    </span>
                                                                                    <span class="post-author">
                                                                                        / <i class="bi bi-person-circle"></i>
                                                                                        ADESC LAJES
                                                                                    </span>
                                                                                </div>
                                                                                <a class="member-link mb-3" data-bs-toggle="modal" data-bs-target="#BID" data-dado="<?= $listar->id_atleta ?>">
                                                                                    <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                                    <span class="post-author"><?= $listar->posicaoPrincipal ?></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                    $mostrouAtleta = true;
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            </div>

                        </div>
                    </section><!-- Fim Perguntas Frequentes -->

                </div>

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <p class="text-justify">
                            <?= $dados['conteudo'] ?>
                        </p>
                    </div>
                </div>

                <!-- Fim Modal de Atletas -->
            </div>
        </div>
    </section>

    <!-- ======= Inserindo Modal Detalhes do Jogador ======= -->
    <!-- Modal -->
    <div class="modal fade" id="BID" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-image: url('<?php echo URL; ?>/public/images/fundoBID.webp'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>ATLETA DA ADESC LAJES</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-5 bt-5 text-center">O Boletim Informativo Desportivo (BID) é um documento oficial
                        utilizado para registrar e divulgar informações sobre atletas, transferências, contratos e
                        demais aspectos relacionados ao futebol e outras modalidades esportivas.</p>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 text-center" data-aos="fade-right">
                            <img src="" id="fotoAtleta" class="img-fluid rounded-circle custom-border" alt="Imagem Arredondada" width="60%">
                        </div>
                        <div class="col-lg-7 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
                            <h3 id="nomeAtleta">NOME DO ATLETA EM CAIXA ALTA</h3>
                            <p class="fst-italic">
                            <h6 id="nomeAtleta"></h6> é um talentoso atleta de futsal que se destaca na posição de
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                    <div class="card info-card golsMarcados-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12">

                                    <div class="card info-card aproveitamentoBom-card">

                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-emoji-smile-fill"></i>
                                                </div>
                                                <div class="ps-3 mt-3 text-center">
                                                    <h2 id="aproveitamento">0</h2>
                                                    <span class="text-muted small pt-2 ps-1">Rendimento</span>

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
                                            <img src="<?php echo URL . '/public/uploads/equipeA.webp'; ?>" class="img-fluid rounded-circle custom-border-escudo mt-3" alt="Imagem Arredondada">
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
                    <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>