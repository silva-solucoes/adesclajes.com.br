<?php include_once 'header.php'; ?>
<?php
setlocale(LC_TIME, 'portuguese');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Meu Perfil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Meu Perfil</li>
            </ol>
        </nav>
        <?php
        Sessao::mensagem('cadastroUser');
        ?>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?php echo URL . '/public/uploads/adms/' . $_SESSION['foto_user']; ?>" width="120" alt="Profile" class="rounded-circle">
                        <h2><?php echo $_SESSION['nome_user']; ?></h2>
                        <h3><?php echo $_SESSION['funcao_user']; ?></h3>
                        <!--
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>-->
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Visão Geral</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Sobre</h5>
                                <p class="small fst-italic">Meu Perfil é a página do <b>Usuário Administrador</b> fornece informações detalhadas sobre o usuário que desta página.</p>

                                <h5 class="card-title">Detalhes de Perfil</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nome Completo:</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['nome_user']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">CPF/CNPJ:</div>
                                    <div class="col-lg-9 col-md-8"><?=$dados['usuario']->cpf_cnpj?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telefone:</div>
                                    <div class="col-lg-9 col-md-8"><?=$dados['usuario']->telefone_usuario?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">E-mail:</div>
                                    <div class="col-lg-9 col-md-8"><?=$dados['usuario']->email_usuario?></div>
                                </div>

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>