<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Esportes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'painel'; ?>">Painel de Controle</a></li>
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
                            data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Cadastrar Nova Categoria</a>
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
                                        <tr data-index="0">
                                            <td><a href="#">#2457</a></td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Futebol</font>
                                                    </font>
                                                </a></td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-warning rounded-pill" href="#"
                                                                title="Editar Atleta"><i
                                                                    class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-danger rounded-pill" href="#"
                                                                title="Excluir Atleta"><i class="bi bi-trash3"></i></a>
                                                        </font>
                                                    </font>
                                                </span></td>
                                        </tr>
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
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName"
                                            placeholder="Your Name">
                                        <label for="floatingName">Nome da Categoria*:</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" name="CadUsuario" type="submit" value="cadastrar" class="">Cadastrar
                        Categoria</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>