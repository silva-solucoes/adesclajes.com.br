<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Recuperar Senha - ADESC Lajes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo URL . '/public/images/favicon.png'; ?>" rel="icon">
    <link href="<?php echo URL . '/public/images/apple-touch-icon.php'; ?>" rel="apple-touch-icon">

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

    <!-- Template Main CSS File -->
    <link href="<?php echo URL . '/public/css/styleLogin.css'; ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?php echo URL . '/public/images/logo-d.webp'; ?>" alt="" width="150">
                                    <!--<span class="d-none d-lg-block">NiceAdmin</span>-->
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Recuperar Senha</h5>
                                        <p class="text-center small">Digite seu e-mail de acesso para recuperar a senha
                                        </p>
                                    </div>
                                    <?php
                                        Sessao::mensagem('recuperarConta');
                                    ?>
                                    <form class="row g-3 needs-validation" method="POST" action="<?=URL?>/login/recuperarConta" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">E-mail</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" class="form-control"
                                                    id="yourUsername" placeholder="Seu e-mail" required>
                                                <div class="invalid-feedback">Por favor, digite seu e-mail.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class=" w-100" id="botaoAcesso" type="submit">Recuperar</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Já tem uma conta? <a
                                                    href="<?php echo URL . '/paginas/login'; ?>">Área de Acesso</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Desenvolvido por <a href="https://silvasolucoestech.rf.gd/" target="_blank">Silva
                                    Soluções Tech</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo URL . '/public/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/apexcharts/apexcharts.min.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/chart.js/chart.umd.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/echarts/echarts.min.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/quill/quill.min.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/simple-datatables/simple-datatables.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/tinymce/tinymce.min.js'; ?>"></script>
    <script src="<?php echo URL . '/public/vendor/php-email-form/validate.js'; ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo URL . '/public/js/mainLogin.js'; ?>"></script>

</body>

</html>