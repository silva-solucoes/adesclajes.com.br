<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Patrocinadores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/patrocinio'; ?>">Gerenciar Patrocinadores</a></li>
                <li class="breadcrumb-item active">Editar Patrocinador</li>
            </ol>
        </nav>
        <?php
            Sessao::mensagem('patrocinador');
        ?>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Formulário de Patrocinador </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Edição de dados</font>
                                </font>
                            </span>
                        </h5>

                        <form class="row g-3" action="<?php echo URL.'/admin/editarPatrocinador/'.$dados['patrocinador']->id_secaoPatrocinio;?>" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nomePatrocinador" value="<?=$dados['patrocinador']->nomePatrocinador?>" placeholder="Nome do Patrocinador">
                                    <label for="nomePatrocinadorEditar">Nome do Patrocinador*:</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="linkPatrocinador" placeholder="URL do site/rede social" style="height: 100px;"><?=$dados['patrocinador']->link_acesso?></textarea>
                                    <label for="urlPatrocinadorEditar">URL do site/rede social*:</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="fotoPatrocinadorEditar">Foto do patrocinador*:</label>
                                <div class="form-floating">
                                    <img width="200" src="<?=URL?>/public/images/patrocinadores/<?=$dados['patrocinador']->img_patrocinio?>" alt="Imagem do patrocinador" id="fotoPatrocinadorPreview">
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" type="file" accept=".jpg, .jpeg, .png, .webp" name="fotoPatrocinador" id="fotoPatrocinadorEditar">
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="col-md-6">
                                <button id="botao-editar" type="submit"><i class="bi bi-pencil-square"></i> Editar Patrocinador</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div><!-- End Tabela dos Pré-Inscritos -->

        </div>
    </section>
   
    <!-- Modal de Confirmação de Aceite de Solicitação de Inscrição -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-shield-fill-exclamation"></i> Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja <b>aceitar</b> a solicitação de inscrição?
            </div>
            <div class="modal-footer">
            <a href="<?php echo URL . '/admin/aceitarSolicitacao/'.$dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal de Confirmação de rejeição de Solicitação de Inscrição-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-shield-fill-exclamation"></i> Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja <b>rejeitar</b> a solicitação de inscrição?
            </div>
            <div class="modal-footer">
            <a href="<?php echo URL . '/admin/rejeitarSolicitacao/'.$dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>