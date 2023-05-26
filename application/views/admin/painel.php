<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Painel de Controle</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'painel'; ?>">Início</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Card ADM -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Quant. <span>| ADM</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1</h6>
                                        <span
                                            class="text-muted small pt-2 ps-1">administrador</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Card ADM -->

                    <!-- Card Funcionários -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Quant. <span>| Funcionários</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>2</h6>
                                        <span
                                            class="text-muted small pt-2 ps-1">funcionários</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Card Funcionários -->

                    <!-- Card Atletas -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Quant. <span>| Atletas</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span
                                            class="text-muted small pt-2 ps-1">atletas</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Card Atletas -->

                </div>
            </div><!-- End Right side columns -->
            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Pré-Inscritos </font>
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
                                                    class="datatable-sorter">Nº Inscrição</a></th>
                                            <th data-sortable="true" style="width: 22.083333333333332%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Atleta</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 35.41666666666667%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Categoria Esportiva</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Posição</font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 17.5%;"><a href="#"
                                                    class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Status</font>
                                                    </font>
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-index="0">
                                            <td><a href="#">#2457</a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">José Mateus Benjamin</font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Futebol</font>
                                                    </font>
                                                </a></td>
                                            <td>Goleiro</td>
                                            <td><span class="badge bg-warning">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Pendente</font>
                                                    </font>
                                                </span></td>
                                        </tr>
                                        <tr data-index="1">
                                            <td><a href="#">#2147</a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Fátima Ayla Tânia Duarte</font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Fut7</font>
                                                    </font>
                                                </a></td>
                                            <td>Zagueiro/a</td>
                                            <td><span class="badge bg-warning">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Pendente</font>
                                                    </font>
                                                </span></td>
                                        </tr>
                                        <tr data-index="2">
                                            <td><a href="#">#2049</a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Sophia Regina Isadora Alves</font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Futsal</font>
                                                    </font>
                                                </a></td>
                                            <td>Ala Direita</td>
                                            <td><span class="badge bg-success">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">aprovado</font>
                                                    </font>
                                                </span></td>
                                        </tr>
                                        <tr data-index="3">
                                            <td><a href="#">#2644</a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Edson Pietro Manuel</font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primar">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Fut7</font>
                                                    </font>
                                                </a></td>
                                            <td>Goleiro</td>
                                            <td><span class="badge bg-danger">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">rejeitado</font>
                                                    </font>
                                                </span></td>
                                        </tr>
                                        <tr data-index="4">
                                            <td><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">#2644</font>
                                                    </font>
                                                </a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Rafael Joaquim Yago</font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Fut7</font>
                                                    </font>
                                                </a></td>
                                            <td>Lateral Direita</td>
                                            <td><span class="badge bg-success">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">aprovado</font>
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

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>