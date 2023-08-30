<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Administradores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de Usuários</li>
            </ol>
        </nav>
        <?php
        Sessao::mensagem('cadastroUser');
        ?>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Registrar Usuário</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Usuários </font>
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
                                    <form method="POST" action="<?= URL ?>/admin/exibirBuscaUser">
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
                                        <?php foreach ($dados['user'] as $ler) : ?>
                                            <tr data-index="0">

                                                <td><a href="<?= URL . '/admin/editUser/' . $ler->id_usuario ?>">#<?= $ler->id_usuario ?></a></td>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><img src="<?php echo URL . '/public/uploads/adms/' . $ler->foto_user; ?>" alt="Patrocinador 1" style="width:120px;"></font>
                                                    </font>
                                                </td>
                                                <td><a href="<?= URL . '/admin/editUser/' . $ler->id_usuario ?>" title="Editar <?= $ler->nome_usuario ?>" class="text-primary">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><?= $ler->nome_usuario ?></font>
                                                        </font>
                                                    </a></td>
                                                <td><?= $ler->nome_status ?></td>
                                                <td><span class="badge">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><a class="btn btn-warning rounded-pill" href="<?= URL . '/admin/editUser/' . $ler->id_usuario ?>" title="Editar Usuário"><i class="bi bi-pencil-square"></i></a></font>
                                                            <font style="vertical-align: inherit;">
                                                                <?php if ($ler->status == 1) : ?>
                                                                    <a class="btn btn-danger rounded-pill view_data" title="Desligar Usuário" id="<?php echo $ler->id_usuario; ?>">
                                                                        <i class="fas fa-power-off"></i></i></a>
                                                                <?php elseif ($ler->status == 2  && $ler->chave_ativae == '') : ?>
                                                                    <a class="btn btn-secondary rounded-pill ativar_data" title="Ativar Usuário" id="<?php echo $ler->id_usuario; ?>">
                                                                        <i class="fas fa-power-off"></i></i></a>
                                                                <?php elseif ($ler->status == 2  && $ler->chave_ativae != '') : ?>
                                                                    <a class="btn btn-secondary rounded-pill ativar_data" title="Usuário não ativou a conta" id="<?php echo $ler->id_usuario; ?>" disabled>
                                                                        <i class="fas fa-power-off"></i></i></a>
                                                                <?php endif; ?>
                                                            </font>
                                                            <?php if ($ler->status == 2  && $ler->chave_ativae != '') : ?>
                                                                <font style="vertical-align: inherit;">
                                                                    <a class="btn btn-warning rounded-pill ativar_enviar" title="Enviar Ativação de Conta" id="<?php echo $ler->id_usuario; ?>">
                                                                        <i class="bi bi-envelope-plus"></i></a>
                                                                </font>
                                                            <?php endif; ?>
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
                                        <font style="vertical-align: inherit;">Mostrando entradas</font>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Novo Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulário de Usuário</h5>
                            <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo para adicionar novos Usuários
                                à nossa Escolinha!</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?= URL ?>/admin/cadastrarUser" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-left">
                                    <div class="form-floating">
                                        <img class="rounded-circle img-fluid" id="imagemPreview" src="<?php echo URL . '/public/uploads/adms/semfoto.webp'; ?>" alt="Imagem de Perfil" style="width:120px; height: 120px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-center">
                                        <div class="form-floating <?= $dados['upload_erro'] ? 'is-invalid' : '' ?>">
                                            <input class="form-control" type="file" name="fotoPerfil" id="formFile">
                                        </div>
                                        <div class="invalid-feedback"><?= $dados['upload_erro'] ?></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName" placeholder="Nome Completo">
                                        <label for="floatingName">Nome Completo*:</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $dados['nomeUser_erro'] ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="cpfUser" id="cpf-input" oninput="formatarCPF(this.value)" placeholder="000.000.000-00">
                                        <label for="floatingName">CPF:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control <?= $dados['telUser_erro'] ? 'is-invalid' : '' ?>" name="telUser" id="telefone-input" maxlength="15" oninput="formatarTelefone(this.value)" placeholder="(84)99999-9999">
                                            <label for="floatingCity">Telefone*:</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= $dados['telUser_erro'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="funcaoUser" id="floatingSelect" aria-label="State">
                                            <option selected>Selecione</option>
                                            <?php foreach ($dados['funcao'] as $listar) : ?>
                                                <option value="<?= $listar->id_funcao ?>"><?= $listar->nome_status ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="floatingSelect">Função*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="emailUser" id="floatingCity" placeholder="Digite o e-mail válido">
                                            <label for="floatingCity">E-mail*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="senhaUser" id="floatingCity" value="adesc@lajes1997" title="Senha Padrão" placeholder="adesc@lajes1997" readonly>
                                            <label for="floatingCity">Senha*:</label>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" type="submit" class="botao-editar"><i class="bi bi-plus-circle"></i> Cadastrar
                        Usuário</button>
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
                    <h5 class="modal-title" id="visulUsuarioModalLabel">Desligar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja desligar o usuário selecionado?
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
                    <h5 class="modal-title" id="visulUsuarioModalLabel">Ativar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja ativar o usuário selecionado?
                    <span id="visul_usuario"></span>
                </div>
                <div class="modal-footer">
                    <a id="ativarComfirmOK" class="btn botao-editar"><i class="bi bi-person-fill-check"></i> Ativar</a>
                    <button type="button" id="botao-cancelar" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="visulUsuarioModalEnviarAtivar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visulUsuarioModalLabel">Envio de E-mail de Ativação de Conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja enviar o e-mail de ativação de conta para o usuário selecionado?
                    <span id="visul_usuario"></span>
                </div>
                <div class="modal-footer">
                    <a id="ativarEnviarComfirmOK" class="btn botao-editar"><i class="bi bi-envelope-plus"></i> Enviar</a>
                    <button type="button" id="botao-cancelar" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
<script>
    function formatarTelefone(telefone) {
        // Remove qualquer caractere que não seja número
        telefone = telefone.replace(/\D/g, '');

        // Verifica se o número de telefone tem um formato válido
        if (telefone.length === 11) {
            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (telefone.length === 9) {
            telefone = telefone.replace(/(\d{5})(\d{4})/, '$1-$2');
        }

        // Atualiza o valor do input com o telefone formatado
        document.getElementById('telefone-input').value = telefone;
    }
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
                    $.post('<?php echo URL; ?>/admin/desligarUser', dados, function(retorna) {
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
                    $.post('<?php echo URL; ?>/admin/ativarUser', dados, function(retorna) {
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

    $(document).ready(function() {
        $(document).on('click', '.ativar_enviar', function() {
            var user_id = $(this).attr("id");
            var user_name = $(this).attr("nome");
            // Verificar se há valor na variável "user_id".
            if (user_id !== '') {
                var dados = {
                    user_id: user_id,
                    user_name: user_name
                };
                // Exibir o modal de confirmação
                $('#visulUsuarioModalEnviarAtivar').modal('show');

                // Ação ao clicar no botão "Apagar"
                $('#ativarEnviarComfirmOK').click(function() {
                    $.post('<?php echo URL; ?>/admin/reenviarAtivacao', dados, function(retorna) {
                        // Carregar o conteúdo para o usuário
                        $("#visul_usuario").html(retorna);
                        // Fechar o modal após a exclusão
                        $('#visulUsuarioModalEnviarAtivar').modal('hide');
                        window.location.reload();
                    });
                });
            }
        });
    });
</script>
<?php include_once 'footer.php'; ?>