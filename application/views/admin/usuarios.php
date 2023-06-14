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
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Novo Usuário</a>
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
                                                        <font style="vertical-align: inherit;">Nome
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Função</font>
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
                                    <?php foreach ($dados['user'] as $ler): ?>
                                        <tr data-index="0">
                                            
                                            <td><a href="#">#<?=$ler->id_usuario?></a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"><img
                                                            src="<?php echo URL . '/public/uploads/adms/'.$ler->foto_user; ?>"
                                                            alt="Patrocinador 1" style="width:120px;"></font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?=$ler->nome_usuario?></font>
                                                    </font>
                                                </a></td>
                                            <td><?=$ler->nome_status?></td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-warning rounded-pill" href="<?=$ler->id_usuario?>"
                                                                title="Editar Atleta"><i
                                                                    class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-danger rounded-pill" href="<?=$ler->id_usuario?>"
                                                                title="Excluir Atleta"><i class="bi bi-trash3"></i></a>
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
                            <form class="row g-3" action="<?=URL?>/admin/cadastrarUser" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-left">
                                    <div class="form-floating">
                                        <img class="rounded-circle img-fluid" id="imagemPreview"
                                            src="<?php echo URL . '/public/uploads/adms/semfoto.jpg'; ?>" alt="Imagem de Perfil"
                                            style="width:120px; height: 120px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-center">
                                        <div class="form-floating <?=$dados['upload_erro'] ? 'is-invalid' : '' ?>">
                                            <input class="form-control" type="file" name="fotoPerfil" id="formFile">
                                        </div>
                                        <div class="invalid-feedback"><?=$dados['upload_erro']?></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName"
                                            placeholder="Nome Completo">
                                        <label for="floatingName">Nome Completo*:</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $dados['nomeUser_erro'] ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="cpfUser" id="cpf-input" oninput="formatarCPF(this.value)"
                                            placeholder="000.000.000-00">
                                        <label for="floatingName">CPF:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control <?= $dados['telUser_erro'] ? 'is-invalid' : '' ?>" name="telUser" id="telefone-input" maxlength="14" oninput="formatarTelefone(this.value)"
                                                placeholder="(84)99999-9999">
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
                                            <?php foreach($dados['funcao'] as $listar):?>
                                            <option value="<?=$listar->id_funcao?>"><?=$listar->nome_status?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="floatingSelect">Função*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="emailUser" id="floatingCity"
                                                placeholder="Digite o e-mail válido">
                                            <label for="floatingCity">E-mail*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="senhaUser" id="floatingCity"
                                                placeholder="Digite uma senha">
                                            <label for="floatingCity">Senha*:</label>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" name="CadUsuario" type="submit" value="cadastrar" class="">Cadastrar
                        Usuário</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>