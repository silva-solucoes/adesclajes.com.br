<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Patrocinadores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Gerenciar Patrocinadores</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i> Novo
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
                                                    <font style="vertical-align: inherit;"><img
                                                            src="<?php echo URL . 'public/images/patrocinadores/client-10.png'; ?>"
                                                            alt="Patrocinador 1" style="width:120px;"></font>
                                                </font>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">ADESC Lajes</font>
                                                    </font>
                                                </a></td>
                                            <td>http://localhost/backup/adesclajes.com.br/</td>
                                            <td><span class="badge">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-warning rounded-pill" href="#"
                                                                title="Editar Patrocinador"><i
                                                                    class="bi bi-pencil-square"></i></a></font>
                                                        <font style="vertical-align: inherit;"><a
                                                                class="btn btn-danger rounded-pill" href="#"
                                                                title="Excluir Patrocinador"><i
                                                                    class="bi bi-trash3"></i></a></font>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Novo Patrocinador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-5 bt-5 text-center">Não perca a chance de fazer parte da Escolinha Esportiva
                        ADESC!<br>Inscreva-se agora
                        mesmo preenchendo nosso formulário e garanta seu lugar na equipe de sucesso!</p>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-12">
                            <h3 class="pt-0" id="tituloForm">Formulário de Pré-Inscrição</h3>

                            <form action="<?php echo URL . 'Cadastrar' ?>" method="POST"
                                class="needs-validation borda-form php-inscricao-form" novalidate>
                                <!-- Tab Content -->
                                <div class="tab-content">
                                    <!-- Informações do Atleta -->
                                    <div class="tab-pane fade show active" id="tab1">

                                        <p class="fst-italic">Informações Pessoais</p>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="name">Nome Completo:</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Nome do Atleta completo" id="name" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">Data de Nascimento:</label>
                                                <input type="date" name="dataNascimento" class="form-control"
                                                    id="dataNascimento" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="name">Gêrero:</label>
                                                <select name="sexo" class="form-select"
                                                    aria-label="Default select example" required>
                                                    <option selected>Selecione</option>
                                                    <option value="1">Feminino</option>
                                                    <option value="2">Masculino</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="name">Nível de Ensino:</label>
                                                <select name="nivel_ensino" class="form-select"
                                                    aria-label="Default select example" required>
                                                    <option selected>Selecione o nível</option>
                                                    <option value="1">Ensino Fundamental I</option>
                                                    <option value="2">Ensino Fundamental II</option>
                                                    <option value="3">Ensino Médio</option>
                                                    <option value="4">Ensino Superior</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Nome da Escola:</label>
                                                <input type="text" name="nomeEscola" class="form-control"
                                                    placeholder="Nome completo da Escola" id="nomeEscola" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Nome da sua Mãe:</label>
                                                <input type="text" name="nomeMae" class="form-control"
                                                    placeholder="Nome da sua Mãe" id="nomeMae" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Nome da seu Pai:</label>
                                                <input type="text" name="nomePai" class="form-control"
                                                    placeholder="Nome do seu pai" id="nomePai" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Telefone do Responsável:</label>
                                                <input type="tel" name="telRespon" class="form-control" maxlength="11"
                                                    placeholder="(00)00000-0000" id="phone" oninput="formatPhone(this)"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Categoria Esportiva:</label>
                                                <select name="categoria_esportiva" class="form-select"
                                                    aria-label="Default select example" required>
                                                    <option selected>Selecione uma categoria</option>
                                                    <option value="1">Futebol</option>
                                                    <option value="2">Futsal</option>
                                                    <option value="3">Fut7</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Posição:</label>
                                                <select name="posicao" class="form-select"
                                                    aria-label="Default select example" required>
                                                    <option selected>Selecione</option>
                                                    <option value="1">Goleiro</option>
                                                    <option value="2">Zagueiro</option>
                                                    <option value="3">Lateral</option>
                                                    <option value="4">Volante</option>
                                                    <option value="5">Meia</option>
                                                    <option value="6">Ponta</option>
                                                    <option value="7">Atacante</option>
                                                    <option value="8">Pivô</option>
                                                    <option value="9">Fixo</option>
                                                    <option value="10">Ala Esquerda</option>
                                                    <option value="11">Ala Direita</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Altura:</label>
                                                <input type="text" name="altura" class="form-control" maxlength="4"
                                                    placeholder="Ex:1,60" id="alturaInput" oninput="formatAltura()"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Digite uma frase motivacional:</label>
                                                <textarea class="form-control" name="message" rows="5"
                                                    required></textarea>
                                            </div>
                                        </div>

                                    </div><!-- End Tab 1 Content -->

                                </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="botao-inscricao" name="CadUsuario" type="submit" value="cadastrar" class="">Finalizar
                        Inscrição</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>