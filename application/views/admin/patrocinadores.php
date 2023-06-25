<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Patrocinadores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/painel/index'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Gerenciar Patrocinadores</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?php
        Sessao::mensagem('patrocinador');
    ?>
    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#modalCadastrarPatrocinador"><i class="bi bi-plus-circle"></i> Novo
                            Patrocinador</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Patrocinadores </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Recentes</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <!--
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">entradas por página
                                            </font>
                                        </font>
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input" placeholder="Buscar por..." type="search"
                                        title="Pesquisar na tabela">
                                </div>
                            </div>
                            -->
                            <div class="datatable-container">
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 12.708333333333332%;"><a href="#"
                                                    class="datatable-sorter">ID</a></th>
                                            <th data-sortable="true" style="width: 22.083333333333332%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Foto</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 35.41666666666667%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nome do Patrocinador
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Link</font>
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
                                    <?php foreach($dados['info'] as $listar):?>
                                        <?php $numeroFormatado = str_pad($listar->id_secaoPatrocinio, 4, '0', STR_PAD_LEFT); ?>
                                        <?php $i += 1;?>
                                        <tr data-index="<?=$i?>">
                                            <td><a href="<?php echo URL . '/admin/patrocinioEditar/'.$listar->id_secaoPatrocinio; ?>">#<?=$numeroFormatado?></a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"><img
                                                            src="<?php echo URL . '/public/images/patrocinadores/'.$listar->img_patrocinio; ?>"
                                                            alt="Patrocinador 1" style="width:120px;"></font>
                                                </font>
                                            </td>
                                            <td><a href="<?php echo URL . '/admin/patrocinioEditar/'.$listar->id_secaoPatrocinio; ?>" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?=$listar->nomePatrocinador?></font>
                                                    </font>
                                                </a></td>
                                            <td><?=$listar->link_acesso?></td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-warning rounded-pill" href="<?php echo URL . '/admin/patrocinioEditar/'.$listar->id_secaoPatrocinio; ?>"
                                                                 title="Editar Patrocinador"><i
                                                                    class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;">
                                                            <a class="btn btn-danger rounded-pill view_data" title="Excluir Patrocinador" nome="<?php echo $listar->img_patrocinio; ?>" id="<?php echo $listar->id_secaoPatrocinio; ?>">
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
                                <!--
                                <div class="datatable-info">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mostrando 1 a 5 de 5 entradas</font>
                                    </font>
                                </div>
                                -->
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
    <div class="modal fade" id="modalCadastrarPatrocinador" tabindex="-1" aria-labelledby="modalCadastrarPatrocinadorLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalCadastrarPatrocinadorLabel">Cadastrar Novo Patrocinador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Patrocinadores</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário de patrocinadores agora mesmo e faça parte desse projeto incrível.</p>
                            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-lg-12">
                                    <form class="row g-3" action="<?php echo URL.'/admin/cadastrarPatrocinador';?>" method="post" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="nomePatrocinador" id="nomePatrocinador" placeholder="Nome do Patrocinador">
                                                <label for="nomePatrocinador">Nome do Patrocinador*:</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="linkPatrocinador" placeholder="URL do site/rede social" id="urlPatrocinador" style="height: 100px;"></textarea>
                                                <label for="urlPatrocinador">URL do site/rede social*:</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="fotoPatrocinador">Foto do patrocinador*:</label>
                                            <div class="form-floating">
                                                <input class="form-control" type="file" accept=".jpg, .jpeg, .png, .webp" name="fotoPatrocinador" id="fotoPatrocinador">
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="botao-cadastrar-patrocinador" type="submit" class="btn btn-primary">Cadastrar Patrocinador</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="visulUsuarioModalLabel">Excluir Patrocinador</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    Tem certeza que deseja excluir o patrocinador selecionado?
					<span id="visul_usuario"></span>
				</div>
				<div class="modal-footer">
                    <a class="btn btn-primary" id="dataComfirmOK">Excluir</a>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
    
    <script type="text/javascript">
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
                        $.post('<?php echo URL; ?>/admin/excluirPatrocinador', dados, function(retorna) {
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
<!-- Modal 
<div class="modal fade" id="modalExclusao">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Excluir Patrocinador</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>Tem certeza de que deseja excluir este patrocinador? <span id="id"></span></p>
                <input type="hidden" id="patrocinadorId">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="excluirPatrocinador()">Excluir</button>
            </div>
      
        </div>
    </div>
</div>-->

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>