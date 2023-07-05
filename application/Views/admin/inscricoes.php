<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Inscrições</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista de Inscrições</li>
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
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Inscrições </font>
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
                                    <input class="datatable-input" placeholder="Buscar por..." type="search" title="Pesquisar na tabela">
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 12.708333333333332%;"><a href="#" class="datatable-sorter">Nº Inscrição</a></th>
                                            <th data-sortable="true" style="width: 22.083333333333332%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Atleta</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 35.41666666666667%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Categoria Esportiva</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Posição</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 17.5%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Status</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 17.5%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ação</font>
                                                    </font>
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        <?php foreach ($dados['infoInscricao'] as $listar) : ?>
                                            <?php $i += 1; ?>
                                            <?php $numeroFormatado = str_pad($listar->id_inscricao, 4, '0', STR_PAD_LEFT); ?>
                                            <tr data-index="<?= $i ?>">
                                                <td><a href="#">#<?= $numeroFormatado ?></a></td>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?= $listar->nome_atleta ?></font>
                                                    </font>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><?= $listar->nome ?></font>
                                                        </font>
                                                    </a></td>
                                                <td><?= $listar->posicaoPrincipal ?></td>
                                                <?php if ($listar->situacao_atleta == 4) : ?>
                                                    <td><span class="badge bg-secondary">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Desligado</font>
                                                            </font>
                                                        </span></td>
                                                <?php elseif ($listar->situacao_atleta == 3) : ?>
                                                    <td><span class="badge bg-danger">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Rejeitado</font>
                                                            </font>
                                                        </span></td>
                                                <?php elseif ($listar->situacao_atleta == 2) : ?>
                                                    <td><span class="badge bg-warning">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Pendente</font>
                                                            </font>
                                                        </span></td>
                                                <?php elseif ($listar->situacao_atleta == 1) : ?>
                                                    <td><span class="badge bg-success">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ativo</font>
                                                            </font>
                                                        </span></td>
                                                <?php endif; ?>
                                                <td>
                                                    <span class="badge">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><a class="btn btn-success rounded-pill open" href="<?php echo URL . '/admin/detalheInscricao/' . $listar->id_inscricao; ?>" title="Detalhe de Inscrição"><i class="bi bi-eye"></i></a></font>
                                                        </font>
                                                        </font>
                                                    </span>
                                                </td>
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

    <!-- ======= Model de Edição de Inscrição ======= -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edição de Situação de Inscrição</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Visualização de Dados</h5>
                            <p class="mb-3 bt-5 text-center">Analise cuidadosamente todos os dados dos novos inscritos para a validação das inscrições e inclusão ao quadro de atletas da ADESC Lajes.</p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?= URL ?>/admin/cadastrarUser" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-left">
                                    <div class="form-floating">
                                        <img class="rounded-circle img-fluid" id="imagemPreview" src="<?php echo URL . '/public/uploads/adms/semfoto.webp'; ?>" alt="Imagem de Perfil" style="width:120px; height: 120px;">
                                    </div>
                                </div>
                                <p id="modal-content"></p>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName" placeholder="Nome Completo" value="<?= $dados['individualInsc']->nome_atleta ?>" disabled>
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
                                            <input type="tel" class="form-control <?= $dados['telUser_erro'] ? 'is-invalid' : '' ?>" name="telUser" id="telefone-input" maxlength="14" oninput="formatarTelefone(this.value)" placeholder="(84)99999-9999">
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
                                            <input type="password" class="form-control" name="senhaUser" id="floatingCity" placeholder="Digite uma senha">
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
                    <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>