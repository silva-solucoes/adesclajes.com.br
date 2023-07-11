<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar de Notícias</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/noticia'; ?>">Lista de Notícias</a></li>
                <li class="breadcrumb-item active">Editar Notícia</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Formulário de Notícia </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Edição de dados</font>
                                </font>
                            </span>
                        </h5>
                        <form class="row g-3" action="<?php echo URL . '/admin/editarNoticia/' . $dados['exibirNoticia']->id_noticia; ?>" method="post" enctype="multipart/form-data">

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="tituloNoticia" class="form-control" id="titulo" value="<?= $dados['exibirNoticia']->tl_noticia ?>" placeholder="Título da Notícia" required>
                                    <label for="floatingName">Título da Notícia*:</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="floatingPassword">Conteúdo da Notícia*:</label>
                                <div class="form-floating">

                                    <textarea id="conteudoNoticia" name="editor1" required><?= $dados['exibirNoticia']->conteudo ?></textarea>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="descricao" placeholder="Address" id="descricao" style="height: 100px;" required><?= $dados['exibirNoticia']->descricao ?></textarea>
                                    <label for="floatingTextarea">Conteúdo curto da Notícia (Breve
                                        descrição)*:</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" name="autor" class="form-control" id="floatingCity" placeholder="Autor" value="<?= $dados['exibirNoticia']->nome_usuario ?>" disabled required>
                                        <label for="floatingCity">Autor*:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="datetime-local" name="dataAtualiza" class="form-control" id="floatingCity" value="<?= $dados['exibirNoticia']->dtCadastro ?>" placeholder="Data e Hora" required>
                                        <label for="floatingCity">Data de Publicação*:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="State" name="categoria" required>
                                        <option value="<?= $dados['exibirNoticia']->id_categoria ?>" selected><?= $dados['exibirNoticia']->nome ?></option>
                                        <?php foreach ($dados['exibirCategorias'] as $lerCategoria) : ?>
                                            <option value="<?= $lerCategoria->id_categoria ?>"><?= $lerCategoria->nome ?></option>
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
                                    <input class="form-control" type="file" name="fotoDestaque" accept=".jpg, .jpeg, .png" id="destaqueInput">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <img id="destaqueImg" src="<?= URL . '/public/uploads/noticias/' . $dados['exibirNoticia']->img_Noticia ?>" alt="Imagem Destaque" width="50%">
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="State" name="membro" required>
                                        <option value="<?= $dados['exibirNoticia']->id_membro ?>" selected><?= $dados['exibirNoticia']->nome_membro ?></option>
                                        <?php foreach ($dados['exibirDirecao'] as $lerMembro) : ?>
                                            <option value="<?= $lerMembro->id_membro ?>"><?= $lerMembro->nome_membro ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect">Membro de Direção*:</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Título" style="height: 100px;" name="comentarioTec" required><?= $dados['exibirNoticia']->comentario ?></textarea>
                                        <label for="floatingCity">Comentário Técnico*:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Meta-Título" id="meta-titulo" style="height: 100px;" name="metaTitulo" disabled><?= $dados['exibirNoticia']->metaTitulo ?></textarea>
                                        <label for="floatingCity">Meta-Título*:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Meta-Keywords" id="floatingTextarea" style="height: 100px;" name="metaChave" required><?= $dados['exibirNoticia']->metaKey ?></textarea>
                                    <label for="floatingZip">Meta-Keywords (palavras-chave)*:</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Meta-Decrição" id="meta-descricao" style="height: 100px;" name="metaDescricao" disabled><?= $dados['exibirNoticia']->metaDescricao ?></textarea>
                                    <label for="floatingZip">Meta-Descrição*:</label>
                                </div>
                            </div>

                            <div class="alert alert-warning" role="alert">
                                As <strong>palavras-chave</strong> devem ser separadas por ",". Exemplo: notícia,Adesc,online
                            </div>
                            <div class="mt-5 text-center">
                                <button id="botao-editar" type="submit"><i class="bi bi-pencil-square"></i> Editar Notícia</button>
                            </div>
                            <div class="row col-8 mt-3">
                                <!--
                                <div class="col-md-4 mt-2">
                                    <a href="<?= URL . '/admin/noticia' ?>" id="botao-cancelar"><i class="bi bi-reply"></i> Voltar</a>
                                </div>-->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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