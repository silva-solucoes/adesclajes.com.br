<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADESC Lajes - Unidos pelo esporte, rumo à vitória!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo URL . 'Public/img/favicon.png'; ?>" rel="icon">
  <link href="<?php echo URL . 'Public/img/apple-touch-icon.php'; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Arquivos CSS -->
  <link href="<?php echo URL . 'Public/vendor/aos/aos.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'Public/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">

  <!-- Arquivo Principal CSS -->
  <link href="<?php echo URL . 'Public/css/style.css'; ?>" rel="stylesheet">

  <!-- =======================================================
  * Nome do site: Silva Soluções Tech
  * Atualizado: 14 Abril 2023 com Bootstrap v5.2.3
  * URL: https://silvasolucoestec.com.br
  * Autor: Silva Soluções Tech
  * Licença: https://silvasolucoestech.com.br/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index">Silva Soluções Tech</a></h1>-->
      <!-- Descomente abaixo se preferir usar um logotipo de imagem -->
      <a href="index" class="logo me-auto"><img src="<?php echo URL . 'Public/images/logo-d.png'; ?>" alt=""
          class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo URL . 'index' ?>#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#noticias">Notícias</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#about">Sobre-nós</a></li>
          <li class="dropdown"><a href="#"><span>Esportes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Futsal</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Categoria A</a></li>
                  <li><a href="#">Categoria B</a></li>
                  <li><a href="#">Categoria C</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Hidroginástica</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Categoria A</a></li>
                  <li><a href="#">Categoria B</a></li>
                  <li><a href="#">Categoria C</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Natação</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Categoria A</a></li>
                  <li><a href="#">Categoria B</a></li>
                  <li><a href="#">Categoria C</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Taekwondo</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Categoria A</a></li>
                  <li><a href="#">Categoria B</a></li>
                  <li><a href="#">Categoria C</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Vôlei</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Categoria A</a></li>
                  <li><a href="#">Categoria B</a></li>
                  <li><a href="#">Categoria C</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Mídias</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Galeria de Fotos</a></li>
              <li class="dropdown"><a href="#"><span>Atletas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Futsal</a></li>
                  <li><a href="#">Hidroginástica</a></li>
                  <li><a href="#">Natação</a></li>
                  <li><a href="#">Taekwondo</a></li>
                  <li><a href="#">Vôlei</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#contact">Contato</a></li>
          <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Área de
              Inscrição</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Inserindo Modal AGENDA DE CONSULTORIA ======= -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Agendar Consultoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Agendar</button>
        </div>
      </div>
    </div>
  </div>