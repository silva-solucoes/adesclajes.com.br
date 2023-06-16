<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Painel de Controle</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/painel/index'; ?>">Início</a></li>
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
                                        <h6><?=$dados['totalUser']->quantidade?></h6>
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
                                        <h6><?=$dados['totalFunc']?></h6>
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
                                        <h6><?=$dados['totalAtletas']?></h6>
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
                                    <?php $i = 0; ?>
                                    <?php foreach($dados['infoInscricao'] as $listar):?>
                                        <?php $i += 1;?>
                                        <?php $numeroFormatado = str_pad($listar->id_inscricao, 4, '0', STR_PAD_LEFT); ?>
                                        <tr data-index="<?=$i?>">
                                            <td><a href="#">#<?=$numeroFormatado?></a></td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"><?=$listar->nome_atleta?></font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?=$listar->nome?></font>
                                                    </font>
                                                </a></td>
                                            <td><?=$listar->posicaoPrincipal?></td>
                                            <?php if($listar->situacao_atleta == 3):?>
                                            <td><span class="badge bg-danger">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Rejeitado</font>
                                                    </font>
                                                </span></td>
                                            <?php elseif($listar->situacao_atleta == 2):?>
                                            <td><span class="badge bg-warning">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Pendente</font>
                                                    </font>
                                                </span></td>
                                            <?php elseif($listar->situacao_atleta == 1):?>
                                            <td><span class="badge bg-success">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ativo</font>
                                                    </font>
                                                </span></td>
                                            <?php endif; ?>
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

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>