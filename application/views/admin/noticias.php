<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar de Notícias</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de Notícias</li>
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
                            data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Nova Notícia</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Notícias </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Recentes</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
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
                                                        <font style="vertical-align: inherit;">Título
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Categória</font>
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
                                    <?php foreach($dados['exibirNoticias'] as $listar):?>
                                        <?php $numeroFormatado = str_pad($listar->id_noticia, 4, '0', STR_PAD_LEFT); ?>
                                        <?php $i += 1;?>
                                        <tr data-index="<?=$i?>">
                                            <td><a href="#">#<?=$numeroFormatado?></a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"><img
                                                            src="<?php echo URL . '/public/uploads/noticias/'.$listar->img_Noticia; ?>"
                                                            alt="<?=$listar->tl_noticia?>" style="width:120px;"></font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?=$listar->tl_noticia?></font>
                                                    </font>
                                                </a></td>
                                            <td><?=$listar->nome?></td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-warning rounded-pill view_editar" nome="<?php echo $listar->img_Noticia; ?>"
                                                                title="Editar Patrocinador" id="<?php echo $listar->id_noticia; ?>"><i
                                                                    class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-danger rounded-pill view_data" title="Excluir Notícia"
                                                                nome="<?php echo $listar->img_Noticia; ?>" coment="<?php echo $listar->id_coment_tec; ?>" id="<?php echo $listar->id_noticia; ?>">
                                                                <i class="bi bi-trash3"></i></a></font>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Nova Notícia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Notícia</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo e adicione novidades, eventos e informações
                                relevantes para manter nossa comunidade atualizada.</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?php echo URL.'/admin/cadastrarNoticias';?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" name="tituloNoticia" class="form-control" id="titulo"
                                            placeholder="Título da Notícia" required>
                                        <label for="floatingName">Título da Notícia*:</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="floatingPassword">Conteúdo da Notícia*:</label>
                                    <div class="form-floating">

                                        <textarea id="conteudoNoticia" name="editor1" required></textarea>
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="descricao" placeholder="Address" id="descricao"
                                            style="height: 100px;" required></textarea>
                                        <label for="floatingTextarea">Conteúdo curto da Notícia (Breve
                                            descrição)*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="autor" class="form-control" id="floatingCity"
                                                placeholder="Autor" value="<?=$_SESSION['nome_user']?>" disabled required>
                                            <label for="floatingCity">Autor*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="datetime-local" name="dataPublica" class="form-control" id="floatingCity"
                                                placeholder="Data e Hora" required>
                                            <label for="floatingCity">Data de Publicação*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="State" name="categoria" required>
                                            <option value="" selected disabled>Selecione</option>
                                        <?php foreach($dados['exibirCategorias'] as $lerCategoria): ?>
                                            <option value="<?=$lerCategoria->id_categoria?>"><?=$lerCategoria->nome?></option>
                                        <?php endforeach; ?>
                                        </select>
                                        <label for="floatingSelect">Categoria da Notícia*:</label>
                                    </div>
                                </div>
                                <!--
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="State">
                                            <option selected>Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <label for="floatingSelect">Ativar Comentários na Notícia?*:</label>
                                    </div>
                                </div>
                                -->
                                <hr>
                                <div class="col-6">
                                    <label for="floatingSelect">Foto de Destaque*:</label>
                                    <div class="form-floating">
                                        <input class="form-control" type="file" name="fotoDestaque" accept=".jpg, .jpeg, .png" id="destaqueInput" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-floating">
                                        <img id="destaqueImg" src="" alt="Imagem Destaque" width="50%" style="display: none;">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="State" name="membro" required>
                                            <option value="" selected disabled>Selecione</option>
                                        <?php foreach($dados['exibirDirecao'] as $lerMembro): ?>
                                            <option value="<?=$lerMembro->id_membro?>"><?=$lerMembro->nome_membro?></option>
                                        <?php endforeach; ?>
                                        </select>
                                        <label for="floatingSelect">Membro de Direção*:</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Meta-Título" style="height: 100px;" name="comentarioTec" required></textarea>
                                            <label for="floatingCity">Comentário Técnico*:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Meta-Título" id="meta-titulo" style="height: 100px;" name="metaTitulo" disabled></textarea>
                                            <label for="floatingCity">Meta-Título*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Keywords" id="floatingTextarea"
                                            style="height: 100px;" name="metaChave" required></textarea>
                                        <label for="floatingZip">Meta-Keywords (palavras-chave)*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Decrição" id="meta-descricao"
                                            style="height: 100px;" name="metaDescricao" disabled></textarea>
                                        <label for="floatingZip">Meta-Descrição*:</label>
                                    </div>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    As <strong>palavras-chave</strong> devem ser separadas por ",". Exemplo: notícia,Adesc,online
                                </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" name="CadUsuario" type="submit" value="cadastrar" class="btn btn-primary">Cadastrar
                        Notícia</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Edição de Notícia -->
    <div class="modal fade" id="editarNoticiaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarNoticiaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editarNoticiaModalLabel">Editar Notícia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Edição de Notícia</h5>
                            <p class="mb-3 bt-5 text-center">Edite os campos abaixo para atualizar a notícia.</p>
                            <!-- Formulário de Edição de Notícia -->
                            <form class="row g-3"  method="post" enctype="multipart/form-data" novalidate>
                                <span id="visul_usuario"></span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="AtualizarComfirmOK" type="" class="btn btn-primary">Atualizar Notícia</button>
                    </form>
                    <button id="botao-cancelar-edicao" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL EXCLUIR-->
    <div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="visulUsuarioModalLabel">Excluir Notícia</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    Tem certeza que deseja excluir a notícia selecionado?
					<span id="visul_usuario"></span>
				</div>
				<div class="modal-footer">
                    <a class="btn btn-primary" id="dataComfirmOK">Excluir</a>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
</main><!-- End #main -->
<script>
    document.getElementById('destaqueInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('destaqueImg').style.display = 'block';
                document.getElementById('destaqueImg').src = img.src;
            };
        }
    });
    // Obtém referências para os elementos
    var inputTitulo = document.getElementById("titulo");
    var inputMetaTitulo = document.getElementById("meta-titulo");

    // Adiciona o evento de keyup ao campo "título"
    inputTitulo.addEventListener("keyup", function() {
        // Copia o valor do campo "título" para o campo "meta-título"
        inputMetaTitulo.value = inputTitulo.value;
    });
    // Obtém referências para os elementos
    var inputDescricao = document.getElementById("descricao");
    var inputMetaDescricao = document.getElementById("meta-descricao");

    // Adiciona o evento de keyup ao campo "título"
    inputDescricao.addEventListener("keyup", function() {
        // Copia o valor do campo "título" para o campo "meta-título"
        inputMetaDescricao.value = inputDescricao.value;
    });

    $(document).ready(function() {
            $(document).on('click', '.view_data', function() {
                var user_id = $(this).attr("id");
                var user_name = $(this).attr("nome");
                // Verificar se há valor na variável "user_id".
                if (user_id !== '') {
                    var dados = {
                        user_id: user_id,
                        user_name: user_name,
                    };
                    // Exibir o modal de confirmação
                    $('#visulUsuarioModal').modal('show');

                    // Ação ao clicar no botão "Apagar"
                    $('#dataComfirmOK').click(function() {
                        $.post('<?php echo URL; ?>/admin/excluirNoticia', dados, function(retorna) {
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
            $(document).on('click', '.view_editar', function() {
                var user_id = $(this).attr("id");
                var user_name = $(this).attr("nome");
                // Verificar se há valor na variável "user_id".
                if (user_id !== '') {
                    var dados = {
                        user_id: user_id,
                        user_name: user_name,
                    };
                    
                    // Enviar uma solicitação AJAX para buscar as informações do banco de dados
                    $.post('<?php echo URL; ?>/admin/exibirNoticia', dados, function(retorna) {
                        // Carregar o conteúdo para o usuário
						$("#visul_usuario").html(retorna);
                        // Chamar o plugin Trumbowyg no elemento #editarConteudoNoticia
                        $('#editarConteudoNoticia').trumbowyg();
                        // Aplicar estilos e funcionalidades do Bootstrap ao formulário
                        $("#editarNoticiaModal form").removeClass("row g-3").addClass("row g-3");
                        // Obtém referências para os elementos
                        
                        // Exibir o modal de confirmação
                        $('#editarNoticiaModal').modal('show');
                    });
                    // Ação ao clicar no botão "Apagar"
                    $('#AtualizarComfirmOK').click(function() {
                        $.post('<?php echo URL; ?>/admin/editarNoticia', dados, function(retorna) {
                            // Carregar o conteúdo para o usuário
                            $("#visul_usuario").html(retorna);
                            // Fechar o modal após a exclusão
                            //$('#editarNoticiaModal').modal('hide');
                            //window.location.reload();
                        });
                    });
                }
            });
        });
</script>
<?php include_once 'footer.php'; ?>