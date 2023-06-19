<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Painel de Controle - ADESC Lajes</title>
    <script src="<?php echo URL . '/public/js/ckeditor/ckeditor.js'; ?>"></script>
    
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo URL . '/public/images/favicon.webp'; ?>" rel="icon">
    <link href="<?php echo URL . '/public/images/apple-touch-icon.webp'; ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo URL . '/public/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/quill/quill.snow.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/quill/quill.bubble.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . '/public/vendor/simple-datatables/style.css'; ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="<?php echo URL . '/public/css/styleAdm.css'; ?>" rel="stylesheet">
    

    <!-- =======================================================
  * Nome do site: Silva Soluções Tech
  * Atualizado: 02 maio 2023 com Bootstrap v5.2.3
  * URL: https://silvasolucoestec.com.br
  * Autor: Silva Soluções Tech
  * Licença: https://silvasolucoestech.com.br/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo URL . 'painel'; ?>" class="logo d-flex align-items-center">
                <img src="<?php echo URL . '/public/images/logo-d.webp'; ?>" alt="">
                <!--<span class="d-none d-lg-block">NiceAdmin</span>-->
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Buscar por" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            Você tem 4 novas notificações
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver tudo</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 minutos. atrás</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hora atrás</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 horas atrás</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 horas atrás</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Mostrar todas as notificações</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            Você tem 3 novas mensagens
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver tudo</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 horas atrás</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 horas atrás</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 horas atrás</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Mostrar todas as mensagens</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo URL . '/public/uploads/adms/'.$_SESSION['foto_user']; ?>" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['nome_user']; ?></span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['nome_user']; ?></h6>
                            <span><?php echo $_SESSION['funcao_user']; ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Meu perfil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Configurações de Conta</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Preciso de ajuda?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo URL . '/login/sair'; ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sair</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <?php
        $uri =$_SERVER['REQUEST_URI'];
        // Verifica se a URL atual corresponde a cada guia de navegação
        $paginaInicialAtiva = (strpos($uri, '/admin/painel') !== false);
        $configAtiva = (strpos($uri, '/admin/config') !== false);
        $patroAtivo = (strpos($uri, '/admin/patrocinio') !== false);
        $noticiaAtivo = (strpos($uri, '/admin/noticia') !== false);
        $sobreAtivo = (strpos($uri, '/admin/sobre') !== false);
        $bidAtivo = (strpos($uri, '/admin/BID') !== false);
        $fotosAtivo = (strpos($uri, '/admin/fotos') !== false);
        $esportesAtivo = (strpos($uri, '/admin/esportes') !== false);
        $diretoriaAtivo = (strpos($uri, '/admin/diretoria') !== false);
        $inscricaoAtivo = (strpos($uri, '/admin/inscricao') !== false);
        $usuariosAtivo = (strpos($uri, '/admin/usuario') !== false);

        // Função auxiliar para adicionar a classe ativa à guia de navegação
        function ativarGuia($ativa){
            if ($ativa == false):
                echo 'collapsed';
            else:
                echo '';
            endif;
        }
    ?>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($paginaInicialAtiva); ?>" href="<?php echo URL . '/admin/painel'; ?>">
                    <i class="bi bi-grid"></i>
                    <span>Painel de Controle</span>
                </a>
            </li>

            <li class="nav-heading">Paginas</li>

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($configAtiva); ?>" href="<?php echo URL . '/admin/config'; ?>">
                    <i class="bi bi-gear"></i>
                    <span>Configurações do Site</span>
                </a>
            </li><!-- End Navegação na página de Configuração de Site -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($patroAtivo); ?>" href="<?php echo URL . '/admin/patrocinio'; ?>">
                    <i class="fas fa-handshake"></i>
                    <span>Gerenciar Patrocinadores</span>
                </a>
            </li><!-- End Página de Patrocinador -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($noticiaAtivo); ?>" href="<?php echo URL . '/admin/noticia'; ?>">
                    <i class="bi bi-newspaper"></i>
                    <span>Gerenciar Notícias</span>
                </a>
            </li><!-- End Página de Notícias -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($sobreAtivo); ?>" href="<?php echo URL . '/admin/sobre'; ?>">
                    <i class="bi bi-info-circle"></i>
                    <span>Gerenciar Sobre-nós</span>
                </a>
            </li><!-- End Página Sobre -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($bidAtivo); ?>" href="<?php echo URL . '/admin/BID'; ?>">
                    <i class="bi bi-people"></i>
                    <span>Gerenciar BID</span>
                </a>
            </li><!-- End Página BID -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($fotosAtivo); ?>" href="<?php echo URL . '/admin/fotos'; ?>">
                    <i class="bi bi-images"></i>
                    <span>Gerenciar Fotos</span>
                </a>
            </li><!-- End Página Fotos -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($esportesAtivo); ?>" href="<?php echo URL . '/admin/esportes'; ?>">
                    <i class="bi bi-dribbble"></i>
                    <span>Gerenciar Esportes</span>
                </a>
            </li><!-- End Página Esportes -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($diretoriaAtivo); ?>" href="<?php echo URL . '/admin/diretoria'; ?>">
                    <i class="bi bi-diagram-3"></i>
                    <span>Gerenciar Diretoria</span>
                </a>
            </li><!-- End Página Diretoria -->

            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($inscricaoAtivo); ?>" href="<?php echo URL . '/admin/inscricao'; ?>">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Gerenciar Inscrições</span>
                </a>
            </li><!-- End Página Inscrição -->
            
            <li class="nav-item">
                <a class="nav-link <?php ativarGuia($usuariosAtivo); ?>" href="<?php echo URL . '/admin/usuario'; ?>">
                    <i class="bi bi-person-plus"></i>
                    <span>Gerenciar Administradores</span>
                </a>
            </li><!-- End Página Adm -->

        </ul>

    </aside><!-- End Sidebar-->