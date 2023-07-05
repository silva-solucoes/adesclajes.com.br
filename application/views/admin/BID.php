<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar BID</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Lista BID</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="btn btn-primary rounded-pill espaco" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-fill-add"></i> Registrar Atleta</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Registros do BID </font>
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
                                    <!--
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
                                    -->
                                </div>
                                <div class="datatable-search">
                                    <form method="POST" action="<?= URL ?>/admin/buscarBID">
                                        <input class="datatable-input" placeholder="Buscar por..." type="search" title="Pesquisar na tabela" name="pesquisa" id="pesquisa">
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
                                                        <font style="vertical-align: inherit;">Nome do Atleta
                                                        </font>
                                                    </font>
                                                </a></th>
                                            <th data-sortable="true" style="width: 12.291666666666666%;"><a href="#" class="datatable-sorter">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Categória</font>
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
                                        <?php $i = 0; ?>
                                        <?php foreach ($dados['buscar'] as $listar) : ?>
                                            <?php $numeroFormatado = str_pad($listar->id_inscricao, 4, '0', STR_PAD_LEFT); ?>
                                            <?php $i += 1; ?>
                                            <tr data-index="<?= $i ?>">
                                                <td><a href="#">#<?= $numeroFormatado ?></a></td>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><img src="<?php echo URL . '/public/uploads/atletas/' . $listar->foto_atleta; ?>" alt="Patrocinador 1" style="width:120px;"></font>
                                                    </font>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><?= $listar->nome_atleta ?></font>
                                                        </font>
                                                    </a></td>
                                                <?php foreach ($dados['exibirCategorias'] as $list) : ?>
                                                    <?php if ($listar->categoriaEsportiva == $list->id_categoria) : ?>
                                                        <td><?= $list->nome ?></td>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                <td><span class="badge">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><a class="btn btn-success rounded-pill" href="<?= URL ?>/admin/detalheAtleta/<?=$listar->id_inscricao?>" title="Visualizar Atleta"><i class="bi bi-eye"></i></a></font>
                                                            <font style="vertical-align: inherit;"><a class="btn btn-warning rounded-pill" href="<?= URL ?>/admin/editarAtleta/<?=$listar->id_inscricao?>" title="Editar Atleta"><i class="bi bi-pencil-square"></i></a></font>
                                                            <font style="vertical-align: inherit;"><a class="btn btn-danger rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" title="Desligar Atleta"><i class="fas fa-power-off"></i></i></a>
                                                            </font>
                                                        </font>
                                                    </span></td>
                                            </tr>

                                            <!-- Modal de Confirmação de Desligamento do Atleta-->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-shield-fill-exclamation"></i> Alerta</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tem certeza que deseja <b>Desligar</b> o atleta selecionado?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?php echo URL . '/admin/desligamentoSolicitacao/' . $listar->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulário de Registro no BID</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Preencha o formulário abaixo para adicionar novos talentos à nossa Escolinha!</h5>
                            <p class="mb-3 bt-5 text-center"></p>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="<?php echo URL . '/admin/enviarInscricao'; ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
                                    <div class="form-floating">
                                        <img id="logoPerfil" class="rounded-circle img-fluid" src="<?php echo URL . '/public/uploads/atletas/semfoto.webp'; ?>" alt="Patrocinador 1" style="width:120px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="col-md-4 text-center">
                                        <div class="form-floating">
                                            <input class="form-control" type="file" id="logoInput" name="logoPerfil" accept=".jpg, .jpeg, .png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" name="nomeAtleta" class="form-control" id="floatingName" placeholder="Your Name">
                                        <label for="floatingName">Nome do Atleta*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="date" name="dataAtleta" class="form-control" id="floatingCity" placeholder="Data e Hora">
                                            <label for="floatingCity">Data de Nascimento*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="genero" aria-label="State">
                                            <option selected>Selecione</option>
                                            <option value="1">Feminino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                        <label for="floatingSelect">Genero*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select name="categoria_esportiva" class="form-select" aria-label="Default select example" required onchange="mostrarPosicoes(this.value)">
                                            <option selected disabled>Selecione</option>
                                            <option value="1">Futebol</option>
                                            <option value="2">Futsal</option>
                                            <option value="3">Fut7</option>
                                        </select>
                                        <label for="categoria_esportiva">Categoria Esportiva:</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select name="posicao" class="form-select" id="posicao" aria-label="Default select example" required>
                                            <option selected disabled>Selecione</option>
                                        </select>
                                        <label for="posicao">Posição:</label>
                                    </div>
                                </div>

                                <script>
                                    function mostrarPosicoes(categoria) {
                                        const posicoes = document.getElementById("posicao");
                                        posicoes.innerHTML = ""; // Limpa as opções existentes

                                        if (categoria === "1") { // Futebol
                                            posicoes.innerHTML += `
                                            <option selected disabled>Selecione</option>
                                            <option value="Goleiro">Goleiro</option>
                                            <option value="Zagueiro">Zagueiro</option>
                                            <option value="Lateral">Lateral</option>
                                            <option value="Volante">Volante</option>
                                            <option value="Meia">Meia</option>
                                            <option value="Ponta">Ponta</option>
                                            <option value="Atacante">Atacante</option>
                                            `;
                                        } else if (categoria === "2") { // Futsal
                                            posicoes.innerHTML += `
                                            <option selected disabled>Selecione</option>
                                            <option value="Goleiro">Goleiro</option>
                                            <option value="Fixo">Fixo</option>
                                            <option value="Ala Esquerda">Ala Esquerda</option>
                                            <option value="Ala Direita">Ala Direita</option>
                                            <option value="Pivô">Pivô</option>
                                            `;
                                        } else if (categoria === "3") { // Fut7
                                            posicoes.innerHTML += `
                                            <option selected disabled>Selecione</option>
                                            <option value="Goleiro">Goleiro</option>
                                            <option value="Zagueiro">Zagueiro</option>
                                            <option value="Lateral">Lateral</option>
                                            <option value="Volante">Volante</option>
                                            <option value="Meia">Meia</option>
                                            <option value="Ponta">Ponta</option>
                                            <option value="Atacante">Atacante</option>
                                            `;
                                        }
                                    }
                                </script>
                                <div class="col-md-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="alturaAtleta" class="form-control" maxlength="4" id="alturaInput" oninput="formatAltura()" placeholder="Altura">
                                            <label for="floatingCity">Altura do Atleta*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="nomeEscola" class="form-control" id="floatingCity" placeholder="Autor">
                                            <label for="floatingCity">Nome da Escola*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="nivelEscolar" id="floatingSelect" aria-label="State">
                                            <option selected>Selecione o nível</option>
                                            <option value="1">Ensino Fundamental I</option>
                                            <option value="2">Ensino Fundamental II</option>
                                            <option value="3">Ensino Médio</option>
                                            <option value="4">Ensino Superior</option>
                                        </select>
                                        <label for="floatingSelect">Nível de Escolaridade*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="nomeMae" class="form-control" id="floatingCity" placeholder="Nome da Mãe">
                                            <label for="floatingCity">Nome da Mãe*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="nomePai" class="form-control" id="floatingCity" placeholder="Nome da Pai">
                                            <label for="floatingCity">Nome do Pai:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="tel" name="telResponsavel" class="form-control" maxlength="11" id="phone" oninput="formatPhone(this)" placeholder="(84)99999-9999">
                                            <label for="floatingCity">Telefone do Responsável*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" rows="20" required></textarea>
                                        <label for="name">Digite uma frase motivacional:</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="botao-editar" name="CadUsuario" type="submit" value="cadastrar" class=""><i class="bi bi-plus-circle"></i> Cadastar Atleta</button>
                    </form>
                    <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
<script>
    document.getElementById('logoInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('logoPerfil').src = img.src;
            };
        }
    });
    //edição de altura

    function formatAltura() {
        let alturaInput = document.getElementById("alturaInput");
        let altura = alturaInput.value.replace(/\D/g, ""); // remove todos os caracteres não numéricos

        // insere os pontos e o traço na formatação padrão do altura
        altura = altura.replace(/(\d{1})(\d)/, "$1.$2");

        alturaInput.value = altura;
    }
    //edição de telefone

    function formatPhone(phoneInput) {
        let phone = phoneInput.value.replace(/\D/g, ""); // remove todos os caracteres não numéricos

        // insere os parênteses, o traço e o nono dígito no número de telefone
        if (phone.length === 11) {
            phone = phone.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
        } else {
            phone = phone.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
        }

        phoneInput.value = phone; // atualiza o valor do campo com o número de telefone formatado
    }
</script>
<?php include_once 'footer.php'; ?>