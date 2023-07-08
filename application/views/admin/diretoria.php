<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Diretoria</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de membros</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Registrar Membro</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Membros da Diretoria </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Recentes</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-search">
                                    <form method="POST" action="<?= URL ?>/admin/exibirBuscaMembro">
                                        <input class="datatable-input" placeholder="Buscar por nome" type="search" title="Pesquisar na tabela" name="pesquisa" id="pesquisa">
                                    </form>
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 12.708333333333332%;"><a href="#" class="datatable-sorter">ID</a></th>
                                            <th data-sortable="true" style="width: 22.083333333333332%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Foto</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 35.41666666666667%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nome
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Função</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 17.5%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ações</font>
                                                    </font>
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        <?php foreach ($dados['exibirDirecao'] as $listar) : ?>
                                            <?php $i += 1; ?>
                                            <?php $numeroFormatado = str_pad($listar->id_membro, 4, '0', STR_PAD_LEFT); ?>
                                            <tr data-index="<?= $i ?>">
                                                <td><a href="#">#<?= $numeroFormatado ?></a></td>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><img src="<?php echo URL . '/public/uploads/direcao/' . $listar->fotoMembro; ?>" alt="Patrocinador 1" style="width:120px;"></font>
                                                    </font>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><?= $listar->nome_membro ?></font>
                                                        </font>
                                                    </a></td>
                                                <td><?= $listar->funcao ?></td>
                                                <td><span class="badge">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><a class="btn btn-warning rounded-pill" href="<?= URL ?>/admin/editMembro/<?= $listar->id_membro ?>" title="Editar Membro"><i class="bi bi-pencil-square"></i></a></font>
                                                            <font style="vertical-align: inherit;">
                                                            <?php if($listar->statusMembro == 1): ?>
                                                                <a class="btn btn-danger rounded-pill view_data" title="Desligar Membro" nome="<?php echo $listar->fotoMembro; ?>" id="<?php echo $listar->id_membro; ?>">
                                                                    <i class="fas fa-power-off"></i></i></a>
                                                            <?php elseif($listar->statusMembro == 2): ?>
                                                                <a class="btn btn-secondary rounded-pill ativar_data" title="Ativar Membro" nome="<?php echo $listar->fotoMembro; ?>" id="<?php echo $listar->id_membro; ?>">
                                                                    <i class="fas fa-power-off"></i></i></a>
                                                            <?php endif; ?>
                                                            </font>
                                                        </font>
                                                    </span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mostrando 1 a 5 de 5 entradas</font>
                                    </font>
                                </div>
                                <nav class="datatable-pagination">
                                    <ul class="datatable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- End Tabela dos Pré-Inscritos -->

        </div>
    </section>

    <!-- ======= Inserindo Modal CADASTRO DE PATROCINADOR ======= -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Novo Membro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Novo Membro</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo para adicionar novos membros
                                à direção da nossa Escolinha!</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?php echo URL . '/admin/cadastrarMembro'; ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
                                    <div class="form-floating">
                                        <img id="imagemPreview" class="rounded-circle img-fluid" src="<?php echo URL . '/public/images/semfoto.webp'; ?>" alt="Patrocinador 1" style="width:120px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-center">
                                        <div class="form-floating">
                                            <input class="form-control" accept=".jpg, .jpeg, .png" name="nomeImagem" type="file" id="formFile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="nomeMembro" placeholder="Your Name" required>
                                        <label for="floatingName">Nome do Membro*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="funcao" placeholder="Altura" required>
                                            <label for="floatingCity">Função*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="descricao" placeholder="Altura" required>
                                            <label for="floatingCity">Breve descrição da função*:</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="linkFacebook" value="#" required>
                                            <label for="floatingCity">Link do Perfil (Facebook):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="linkInstagram" value="#" required>
                                            <label for="floatingCity">Link do Perfil (Instagram):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="linkLinkedin" value="#" required>
                                            <label for="floatingCity">Link do Perfil (Linkedin):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="linkTikTok" value="#" required>
                                            <label for="floatingCity">Link do Perfil (TikTok):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCity" name="linkTwitter" value="#" required>
                                            <label for="floatingCity">Link do Perfil (Twitter):</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" type="submit" class="botao-editar"><i class="bi bi-plus-circle"></i> Cadastrar
                        Membro</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visulUsuarioModalLabel">Desligar Membro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja desligar o membro selecionada?
                    <span id="visul_usuario"></span>
                </div>
                <div class="modal-footer">
                    <a id="dataComfirmOK" class="btn botao-editar"><i class="bi bi-person-fill-x"></i> Desligar</a>
                    <button type="button" id="botao-cancelar" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="visulUsuarioModalAtivar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visulUsuarioModalLabel">Ativar Membro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja ativar o membro selecionada?
                    <span id="visul_usuario"></span>
                </div>
                <div class="modal-footer">
                    <a id="ativarComfirmOK" class="btn botao-editar"><i class="bi bi-person-fill-check"></i> Ativar</a>
                    <button type="button" id="botao-cancelar" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
<script>
    document.getElementById('formFile').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('imagemPreview').src = img.src;
            };
        }
    });

    $(document).ready(function() {
        $(document).on('click', '.view_data', function() {
            var user_id = $(this).attr("id");
            var user_name = $(this).attr("nome");
            // Verificar se há valor na variável "user_id".
            if (user_id !== '') {
                var dados = {
                    user_id: user_id,
                    user_name: user_name
                };
                // Exibir o modal de confirmação
                $('#visulUsuarioModal').modal('show');

                // Ação ao clicar no botão "Apagar"
                $('#dataComfirmOK').click(function() {
                    $.post('<?php echo URL; ?>/admin/desligarMembro', dados, function(retorna) {
                        // Carregar o conteúdo para o usuário
                        $("#visul_usuario").html(retorna);
                        // Fechar o modal após a exclusão
                        $('#visulUsuarioModal').modal('hide');
                        window.location.reload();
                    });
                });
            }
        });
    });

    $(document).ready(function() {
        $(document).on('click', '.ativar_data', function() {
            var user_id = $(this).attr("id");
            var user_name = $(this).attr("nome");
            // Verificar se há valor na variável "user_id".
            if (user_id !== '') {
                var dados = {
                    user_id: user_id,
                    user_name: user_name
                };
                // Exibir o modal de confirmação
                $('#visulUsuarioModalAtivar').modal('show');

                // Ação ao clicar no botão "Apagar"
                $('#ativarComfirmOK').click(function() {
                    $.post('<?php echo URL; ?>/admin/ativarMembro', dados, function(retorna) {
                        // Carregar o conteúdo para o usuário
                        $("#visul_usuario").html(retorna);
                        // Fechar o modal após a exclusão
                        $('#visulUsuarioModalAtivar').modal('hide');
                        window.location.reload();
                    });
                });
            }
        });
    });
</script>
<?php include_once 'footer.php'; ?>