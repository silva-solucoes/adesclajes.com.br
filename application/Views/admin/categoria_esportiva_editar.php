<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Esportes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/esportes'; ?>">Lista de Categorias</a></li>
                <li class="breadcrumb-item active">Editar Categoria</li>
            </ol>
        </nav>
        <?php
        Sessao::mensagem('editarCategoria');
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
                                <font style="vertical-align: inherit;">Formulário de Categoria </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Edição de dados</font>
                                </font>
                            </span>
                        </h5>

                        <form class="row g-3" action="<?php echo URL . '/admin/editarCategoria/' . $dados['exibirCategorias']->id_categoria; ?>" method="post">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="categoria" value="<?=$dados['exibirCategorias']->nome?>" required>
                                <label for="floatingName">Nome da Categoria*:</label>
                            </div>

                            <hr>
                            <div class="col-12">
                                <div class="col-md-6">
                                    <button type="submit" id="botao-editar"><i class="bi bi-pencil-square"></i> Editar Categoria</button>
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