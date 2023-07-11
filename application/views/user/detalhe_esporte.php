<?php include_once 'header.php'; ?>
<?php

if($dados['categoria'] == 'Futsal'):
function possuiAtletasSub07($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 7) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub08($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 8) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub09($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 9) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub10($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 10) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub11($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 11) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub12($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 12) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub13($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 13) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub14($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 14) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub15($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 15) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub16($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 16) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub17($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 17) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub18($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 18) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub19($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 19) {
            return true;
        }
    }
    return false;
}
function possuiAtletasSub20($dadosAtleta)
{
    foreach ($dadosAtleta as $listar) {
        $dataAtual = date('Y-m-d');
        $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
        if ($listar->categoriaEsportiva == 2 && $idade == 20) {
            return true;
        }
    }
    return false;
}
endif;
if($dados['categoria'] == 'Futebol'):
    function possuiAtletasSub07($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 7) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub08($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 8) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub09($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 9) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub10($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 10) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub11($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 11) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub12($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 12) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub13($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 13) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub14($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 14) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub15($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 15) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub16($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 16) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub17($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 17) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub18($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 18) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub19($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
            if ($listar->categoriaEsportiva == 1 && $idade == 19) {
                return true;
            }
        }
        return false;
    }
    function possuiAtletasSub20($dadosAtleta)
    {
        foreach ($dadosAtleta as $listar) {
            $dataAtual = date('Y-m-d');
            $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y;
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
                                    <?php if ($dados['categoria'] == 'Fut7') : ?>
                                        <!-- LISTA SUB-07 -->
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i>
                                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
                                                Atletas do Sub-07
                                                <i class="bx bx-chevron-down icon-show"></i>
                                                <i class="bx bx-chevron-up icon-close"></i>
                                            </a>
                                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                                <p class="text-justify">
                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 3 && $idade == 7) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 7) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 8) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 9) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 10) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub11($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-11 -->
                                        <li data-aos="fade-up" data-aos-delay="500">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">Atletas do Sub-11 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 11) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub12($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-12 -->
                                        <li data-aos="fade-up" data-aos-delay="600">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">Atletas do Sub-12 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 12) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub13($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-13 -->
                                        <li data-aos="fade-up" data-aos-delay="700">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed">Atletas do Sub-13 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 13) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub14($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-14 -->
                                        <li data-aos="fade-up" data-aos-delay="800">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed">Atletas do Sub-14 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 14) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub15($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-15 -->
                                        <li data-aos="fade-up" data-aos-delay="900">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">Atletas do Sub-15 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 15) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub16($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-16 -->
                                        <li data-aos="fade-up" data-aos-delay="1000">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed">Atletas do Sub-16 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 16) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub17($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-17 -->
                                        <li data-aos="fade-up" data-aos-delay="1000">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed">Atletas do Sub-17 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 17) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub18($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-18 -->
                                        <li data-aos="fade-up" data-aos-delay="1100">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-18" class="collapsed">Atletas do Sub-18 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-18" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 18) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub19($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-19 -->
                                        <li data-aos="fade-up" data-aos-delay="1200">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-19" class="collapsed">Atletas do Sub-19 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-19" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 19) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futsal' && possuiAtletasSub20($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-20 -->
                                        <li data-aos="fade-up" data-aos-delay="1300">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-20" class="collapsed">Atletas do Sub-20 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-20" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 2 && $idade == 20) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub07($dados['dadosAtleta'])) : ?>
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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 7) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub08($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-08 -->
                                        <li data-aos="fade-up" data-aos-delay="200">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Atletas do Sub-08
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 8) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub09($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-09 -->
                                        <li data-aos="fade-up" data-aos-delay="300">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Atletas do Sub-09
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 9) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

                                                        </div>
                                                    </div>
                                                </section>

                                                </p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($dados['categoria'] == 'Futebol' && possuiAtletasSub10($dados['dadosAtleta'])) : ?>
                                        <!-- LISTA SUB-10 -->
                                        <li data-aos="fade-up" data-aos-delay="400">
                                            <i class="bi bi-people-fill icon-help" style="font-size: 16px;"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Atletas do Sub-10 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                                                <p class="text-justify">

                                                <section id="noticias" class="recent-blog-posts">
                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row">

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 10) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 11) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 12) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 13) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 14) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 15) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 16) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 17) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 18) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 19) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($dados['dadosAtleta'] as $listar) : ?>
                                                                <?php $i += 200;
                                                                $dataAtual = date('Y-m-d'); ?>
                                                                <?php $idade = date_diff(date_create($dataAtual), date_create($listar->dtNascimento_atleta))->y; ?>
                                                                <?php if ($listar->categoriaEsportiva == 1 && $idade == 20) : ?>
                                                                    <?php $dataEdicao = $listar->dt_edicao; ?>

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
                                                                            <a data-bs-toggle="modal" data-bs-target="#detalhesAtletaModal">
                                                                                <h3 class="post-title"><?= $listar->nome_atleta ?></h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>

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

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>