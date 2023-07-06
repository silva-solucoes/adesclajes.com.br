<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Esportes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de Categorias Esportivas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-bar-chart-steps"></i> Registrar Categoria</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Categoria Esportiva </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Recentes</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            
                            <div class="datatable-container">
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 12.708333333333332%;"><a href="#"
                                                    class="datatable-sorter">ID</a></th>
                                            <th data-sortable="true" style="width: 22.083333333333332%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Categoria Esportiva</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 17.5%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ações</font>
                                                    </font>
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; ?>
                                    <?php foreach($dados['exibirCategorias'] as $listar):?>
                                        <?php $i += 1;?>
                                        <?php $numeroFormatado = str_pad($listar->id_categoria, 4, '0', STR_PAD_LEFT); ?>
                                        <tr data-index="<?=$i?>">
                                            <td><a href="#">#<?=$numeroFormatado?></a></td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?=$listar->nome?></font>
                                                    </font>
                                                </a></td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a class="btn btn-warning rounded-pill" href="<?= URL ?>/admin/editCategoria/<?= $listar->id_categoria ?>" title="Editar Categoria"><i class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;"><a class="btn btn-danger rounded-pill view_data" title="Excluir Categoria" id="<?php echo $listar->id_categoria; ?>">
                                                            <i class="bi bi-trash3"></i></a>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Categoria Esportiva</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Categoria Esportiva</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo para adicionar novas categorias esportivas
                                à nossa Escolinha!</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?php echo URL . '/admin/cadastrarCategoria'; ?>" method="post">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="categoria"
                                            placeholder="Your Name" required>
                                        <label for="floatingName">Nome da Categoria*:</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" type="submit" class="botao-editar"><i class="bi bi-plus-circle"></i> Cadastrar
                        Categoria</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="visulUsuarioModalLabel">Excluir Categoria</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    Tem certeza que deseja excluir a categoria selecionada?
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
    $(document).ready(function() {
            $(document).on('click', '.view_data', function() {
                var user_id = $(this).attr("id");
                // Verificar se há valor na variável "user_id".
                if (user_id !== '') {
                    var dados = {
                        user_id: user_id,
                    };
                    // Exibir o modal de confirmação
                    $('#visulUsuarioModal').modal('show');

                    // Ação ao clicar no botão "Apagar"
                    $('#dataComfirmOK').click(function() {
                        $.post('<?php echo URL; ?>/admin/excluirCategoria', dados, function(retorna) {
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