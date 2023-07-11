<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Fotos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/fotos'; ?>">Lista de fotos</a></li>
                <li class="breadcrumb-item active">Editar Foto</li>
            </ol>
        </nav>
        <?php
        Sessao::mensagem('editarFoto');
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
                                <font style="vertical-align: inherit;">Formulário de Foto </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Edição de dados</font>
                                </font>
                            </span>
                        </h5>

                        <form class="row g-3" action="<?php echo URL . '/admin/editarFoto/'.$dados['exibirFoto']->id_pagFotos; ?>" method="post" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="fotoPatrocinadorEditar">Foto*:</label>
                                <div class="form-floating">
                                    <img id="Foto" width="300" src="<?= URL ?>/public/uploads/fotos/<?= $dados['exibirFoto']->foto_galeria ?>" alt="Imagem do patrocinador" id="fotoPatrocinadorPreview">
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" type="file" accept=".jpg, .jpeg, .png" name="nomeImagem" id="nomeFoto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="tituloImg" type="text" class="form-control" id="floatingName" value="<?= $dados['exibirFoto']->tl_pagFotos ?>" placeholder="Your Name" required>
                                    <label for="floatingName">Título da Imagem*:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="descricaoImg" type="text" class="form-control" id="floatingCity" value="<?= $dados['exibirFoto']->descricao_pagFotos ?>" placeholder="" required>
                                        <label for="floatingCity">Descrição*:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="exibirImg" aria-label="State">
                                        <?php if($dados['exibirFoto']->exibir == 1): ?>
                                        <option selected value="<?=$dados['exibirFoto']->exibir?>">Sim</option>
                                        <option value="2">Não</option>
                                        <?php elseif($dados['exibirFoto']->exibir == 2): ?>
                                        <option selected value="<?=$dados['exibirFoto']->exibir?>">Não</option>
                                        <option value="1">Sim</option>
                                        <?php endif; ?>
                                    </select>
                                    <label for="floatingSelect">Deseja exibir*:</label>
                                </div>
                            </div>

                            <hr>
                            <div class="col-12">
                                <div class="col-md-6">
                                    <button type="submit" id="botao-editar"><i class="bi bi-pencil-square"></i> Editar Patrocinador</button>
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
                    <a href="<?php echo URL . '/admin/aceitarSolicitacao/' . $dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
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
                    <a href="<?php echo URL . '/admin/rejeitarSolicitacao/' . $dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
<script>
    document.getElementById('nomeFoto').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('Foto').src = img.src;
            };
        }
    });
</script>
<?php include_once 'footer.php'; ?>