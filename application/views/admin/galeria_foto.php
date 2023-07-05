<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Fotos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de fotos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-images"></i> Registrar Foto</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fotos </font>
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
                                    <form method="POST" action="<?= URL ?>/admin/exibirBuscaFoto">
                                        <input class="datatable-input" placeholder="Buscar por título" type="search" title="Pesquisar na tabela" name="pesquisa" id="pesquisa">
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
                                                        <font style="vertical-align: inherit;">Legenda ou Nome
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Exibir</font>
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
                                        <?php if (!empty($dados['exibirFotos']) || !is_null($dados['exibirFotos'])) : ?>
                                            <?php foreach ($dados['exibirFotos'] as $listar) : ?>
                                                <?php $i += 1; ?>
                                                <?php $numeroFormatado = str_pad($listar->id_pagFotos, 4, '0', STR_PAD_LEFT); ?>
                                                <tr data-index="<?= $i ?>">
                                                    <td><a href="#">#<?= $numeroFormatado ?></a></td>
                                                    <td>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><img src="<?php echo URL . '/public/uploads/fotos/' . $listar->foto_galeria; ?>" alt="Patrocinador 1" style="width:120px;"></font>
                                                        </font>
                                                    </td>
                                                    <td><a href="#" class="text-primary">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;"><?= $listar->tl_pagFotos ?></font>
                                                            </font>
                                                        </a></td>
                                                    <?php if ($listar->exibir == 1) : ?>
                                                        <td>Sim</td>
                                                    <?php elseif ($listar->exibir == 2) : ?>
                                                        <td>Não</td>
                                                    <?php endif; ?>
                                                    <td><span class="badge">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;"><a class="btn btn-warning rounded-pill" href="<?= URL ?>/admin/editFoto/<?= $listar->id_pagFotos ?>" title="Editar Atleta"><i class="bi bi-pencil-square"></i></a></font>
                                                                <font style="vertical-align: inherit;"><a class="btn btn-danger rounded-pill view_data" title="Excluir Foto" nome="<?php echo $listar->foto_galeria; ?>" id="<?php echo $listar->id_pagFotos; ?>">
                                                            <i class="bi bi-trash3"></i></a>
                                                                </font>
                                                            </font>
                                                        </span></td>
                                                </tr>

                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr data-index="<?= $i ?>">
                                                <td colspan="5">
                                                    <div class="alert alert-danger" role="alert">
                                                        Não há registros!
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Nova Foto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Registro da Foto</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo para adicionar novas fotos
                                à nossa Escolinha!</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?php echo URL . '/admin/cadastrarImagem'; ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
                                    <div class="form-floating">
                                        <img id="imagemPreview" class="img-fluid" src="<?php echo URL . '/public/images/semfoto.webp'; ?>" alt="Patrocinador 1" style="width:300px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-center">
                                        <div class="form-floating">
                                            <input class="form-control" accept=".jpg, .jpeg, .png" name="nomeImagem" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="tituloImg" type="text" class="form-control" id="floatingName" placeholder="Your Name">
                                        <label for="floatingName">Título da Imagem*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input name="descricaoImg" type="text" class="form-control" id="floatingCity" placeholder="Data e Hora">
                                            <label for="floatingCity">Descrição*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="exibirImg" aria-label="State">
                                            <option selected>Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <label for="floatingSelect">Deseja exibir*:</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-editar" name="CadUsuario" type="submit" value="cadastrar"><i class="bi bi-plus-circle"></i> Cadastrar Foto</button>
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
					<h5 class="modal-title" id="visulUsuarioModalLabel">Excluir Foto</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    Tem certeza que deseja excluir a foto selecionada?
					<span id="visul_usuario"></span>
				</div>
				<div class="modal-footer">
                    <a id="dataComfirmOK" class="btn botao-editar"><i class="bi bi-trash3-fill"></i> Excluir</a>
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
                        $.post('<?php echo URL; ?>/admin/excluirFoto', dados, function(retorna) {
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
</script>
<?php include_once 'footer.php'; ?>