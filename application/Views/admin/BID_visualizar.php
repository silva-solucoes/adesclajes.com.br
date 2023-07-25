<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar BID</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/BID'; ?>">Listar BID</a></li>
                <li class="breadcrumb-item active">Detalhes do Atleta</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Tabela dos Pré-Inscritos -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Detalhes do Atleta </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">visualizar</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Dados do Atleta</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Dados do Responsável</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Dados Técnicos</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Estatísticas Gerais</button>
                                    </li>

                                </ul>

                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <p class="small fst-italic">A seção "Dados do Atleta" é dedicada a visualizar as principais informações e imagens do atleta.</p>
                                        <form class="row g-3" action="<?php echo URL . '/admin/editarLogoSite'; ?>" method="post" enctype="multipart/form-data">
                                            <div class="card">
                                                <div class="card-header">Formulário de Visualização</div>
                                                <div class="card-body">
                                                    <div class="row g-3 mt-3">

                                                        <div class="col-md-12 text-left">
                                                            <div class="form-floating">
                                                                <?php if ($dados['exibirJogador']->foto_atleta == 'semfoto.webp') : ?>
                                                                    <img class="rounded-circle img-fluid" id="imagemPreview" src="<?php echo URL . '/public/images/' . $dados['exibirJogador']->foto_atleta ?>" alt="Imagem de Perfil" style="width:120px; height: 120px;">
                                                                <?php else : ?>
                                                                    <img class="rounded-circle img-fluid" id="imagemPreview" src="<?php echo URL . '/public/uploads/atletas/' . $dados['exibirJogador']->foto_atleta ?>" alt="Imagem de Perfil" style="width:120px; height: 120px;">
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName" placeholder="Nome Completo" value="<?= $dados['exibirJogador']->nome_atleta ?>" disabled>
                                                                <label for="floatingName">Nome Completo*:</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= $dados['nomeUser_erro'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating">
                                                                <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="DD/MM/AAAA" value="<?= $dados['exibirJogador']->dtNascimento_atleta ?>" disabled>
                                                                <label for="floatingName">Data de Nascimento:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" name="idade" id="idade" value="<?= $dados['idade'] ?>" placeholder="Idade do Atleta" disabled>
                                                                <label for="floatingName">Idade do Atleta:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" name="genero" id="floatingSelect" aria-label="State" disabled>
                                                                    <?php if ($dados['exibirJogador']->sexo_atleta == 1) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->sexo_atleta ?>">Feminino</option>
                                                                    <?php elseif ($dados['exibirJogador']->sexo_atleta == 2) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->sexo_atleta ?>">Masculino</option>
                                                                    <?php endif; ?>
                                                                </select>
                                                                <label for="floatingSelect">Genero*:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" name="message" rows="20" disabled><?= $dados['exibirJogador']->frase ?></textarea>
                                                                    <label for="floatingCity">Frase motivacional*:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-6">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomeEscola" id="nomeEscola" value="<?= $dados['exibirJogador']->nomeEscolar ?>" disabled>
                                                                    <label for="floatingCity">Nome da Escola*:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" name="nivel" id="nivel" aria-label="State" disabled>
                                                                    <?php if ($dados['exibirJogador']->nivelEnsino == 1) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Fundamental I</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 2) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Fundamental II</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 3) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Médio</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 4) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Superior</option>
                                                                    <?php endif; ?>
                                                                </select>
                                                                <label for="floatingSelect">Nível de Ensino*:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="turma" id="turma" value="<?= $dados['exibirJogador']->turma ?>" disabled>
                                                                    <label for="floatingCity">Turma/Série:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="turno" id="turno" value="<?= $dados['exibirJogador']->turno ?>" disabled>
                                                                    <label for="floatingCity">Turno:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="enderecoEcola" id="enderecoEcola" value="<?= $dados['exibirJogador']->logradouro ?>" disabled>
                                                                    <label for="floatingCity">Endereço da Escola:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="numero" id="numero" value="<?= $dados['exibirJogador']->nLogradouro ?>" disabled>
                                                                    <label for="floatingCity">Nº:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-8">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomeMae" id="nomeMae" value="<?= $dados['exibirJogador']->nomeMae_atleta ?>" disabled>
                                                                    <label for="floatingCity">Nome da Mãe*:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telMae" id="telMae" value="<?= $dados['exibirJogador']->celularMae_atleta ?>" disabled>
                                                                    <label for="floatingCity">Telefone da Mãe:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomePai" id="nomePai" value="<?= $dados['exibirJogador']->nomePai_atleta ?>" disabled>
                                                                    <label for="floatingCity">Nome da Pai:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telPai" id="telPai" value="<?= $dados['exibirJogador']->celularPai_atleta ?>" disabled>
                                                                    <label for="floatingCity">Telefone da Pai:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i>
                                                        Salvar Alterações</button>
                                                </div>
                                                -->
                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade profile-edit pt-1" id="profile-edit">
                                        <p class="small fst-italic">A seção "Dados do Responsável" é dedicada a visualizar as principais informações do responsável pela criança/adolecente.</p>
                                        <!-- Profile Edit Form -->
                                        <form action="<?php echo URL . '/admin/editarDestaques'; ?>" method="post" enctype="multipart/form-data">
                                            <div class="card">
                                                <div class="card-header">Formulário de Visualização</div>
                                                <div class="card-body">
                                                    <div class="row g-3 mb-3 mt-3">
                                                        <div class="col-md-5">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomeResponsavel" id="nomeResponsavel" value="<?= $dados['exibirJogador']->nomeResponsavel ?>" disabled>
                                                                    <label for="floatingCity">Nome do Responsável Legal:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="grauParentesco" id="grauParentesco" value="<?= $dados['exibirJogador']->grauParentesco ?>" disabled>
                                                                    <label for="floatingCity">Grau de Parentesco:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telResponsavel" id="telResponsavel" value="<?= $dados['exibirJogador']->celularResponsavel ?>" disabled>
                                                                    <label for="floatingCity">Telefone do/a Responsável:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="enderecoResponsavel" id="enderecoResponsavel" value="<?= $dados['exibirJogador']->logradouraResponsavel ?>" disabled>
                                                                    <label for="floatingCity">Endereço do/a Responsável:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="numeroResponsavel" id="numeroResponsavel" value="<?= $dados['exibirJogador']->nLougradoura ?>" disabled>
                                                                    <label for="floatingCity">Nº:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="bairroResponsavel" id="bairroResponsavel" value="<?= $dados['exibirJogador']->bairro ?>" disabled>
                                                                    <label for="floatingCity">Bairro:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="ufResponsavel" id="ufResponsavel" value="<?= $dados['exibirJogador']->uf ?>" disabled>
                                                                    <label for="floatingCity">UF:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="cepResponsavel" id="cepResponsavel" value="<?= $dados['exibirJogador']->cep ?>" disabled>
                                                                    <label for="floatingCity">CEP:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                </div>
                                                -->
                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade pt-1" id="profile-settings">
                                        <p class="small fst-italic">A seção "Dados Técnicos do Atleta" é dedicada a visualizar as informações técnicas do atleta.</p>
                                        <!-- Settings Form -->

                                        <div class="row mb-3">
                                            <form action="<?php echo URL . '/admin/editarRodape'; ?>" method="post" enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-header">Formulário de Visualização</div>
                                                    <div class="card-body">
                                                        <div class="row g-3 mb-3 mt-3">
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="categoria" id="categoria" aria-label="State" disabled>
                                                                        <?php if ($dados['exibirJogador']->categoriaEsportiva == 1) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futebol</option>
                                                                        <?php elseif ($dados['exibirJogador']->categoriaEsportiva == 2) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futsal</option>
                                                                        <?php elseif ($dados['exibirJogador']->categoriaEsportiva == 3) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Fut7</option>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <label for="floatingSelect">Categoria Esportiva*:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="nivelEsportivo" id="nivelEsportivo" value="<?= $dados['exibirJogador']->nivelEsportivo ?>" disabled>
                                                                        <label for="floatingCity">Nível Esportivo:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="posicaoP" id="posicaoP" aria-label="State" disabled>
                                                                        <option selected value="<?= $dados['exibirJogador']->posicaoPrincipal ?>"><?= $dados['exibirJogador']->posicaoPrincipal ?></option>
                                                                    </select>
                                                                    <label for="floatingSelect">Posição Desejada*:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="posicaoS" id="posicaoS" aria-label="State" disabled>
                                                                        <option selected value="<?= $dados['exibirJogador']->posicaoSecundaria ?>"><?= $dados['exibirJogador']->posicaoSecundaria ?></option>
                                                                    </select>
                                                                    <label for="floatingSelect">Posição Secundária:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="altura" id="altura" value="<?= $dados['exibirJogador']->altura_atleta ?>" disabled>
                                                                        <label for="floatingCity">Altura do Atleta*:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="peso" id="peso" value="<?= $dados['exibirJogador']->peso_atleta ?>" disabled>
                                                                        <label for="floatingCity">Peso do Atleta:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="tamanhoUniforme" id="tamanhoUniforme" value="<?= $dados['exibirJogador']->nUniforme_atleta ?>" disabled>
                                                                        <label for="floatingCity">Tamanho do Uniforme:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="numCalcado" id="numCalcado" value="<?= $dados['exibirJogador']->nPe_atleta ?>" disabled>
                                                                        <label for="floatingCity">Número do Calçado:</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                    </div>
                                                    -->
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade pt-1" id="profile-change-password">
                                        <p class="small fst-italic">A seção "Estatísticas Gerais" é dedicada a monitora o desempenho do atleta durante o ano.</p>
                                        <!-- Change Password Form -->
                                        <form action="<?php echo URL . '/admin/editarInfoInscricao'; ?>" method="post" enctype="multipart/form-data">

                                            <div class="row mb-3">
                                                <div class="card">
                                                    <div class="card-header">Formulário de Visualização</div>
                                                    <div class="card-body">
                                                        <div class="row g-3 mb-3 mt-3">

                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="card info-card jogos-card">

                                                                    <div class="card-body">

                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-futbol"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantJogos ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Jogos</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div><!-- End Sales Card -->

                                                            <!-- Revenue Card -->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="card info-card revenue-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-futbol"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantGols ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Gols Marcados</span>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div><!-- End Revenue Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card golsPartidas-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-futbol"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <?php
                                                                                $r1 = $dados['exibirJogador']->quantGols;
                                                                                $r2 = $dados['exibirJogador']->quantJogos;
                                                                                $golsPartida = 0;

                                                                                if ($r2 != 0) {
                                                                                    $golsPartida = $r1 / $r2;
                                                                                }

                                                                                // Trocar ponto por vírgula nas variáveis
                                                                                $r1 = str_replace('.', ',', $r1);
                                                                                $r2 = str_replace('.', ',', $r2);
                                                                                $golsPartida = str_replace('.', ',', $golsPartida);
                                                                                ?>
                                                                                <h2><?= $golsPartida ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Gols por partida</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card vitorias-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="bi bi-trophy-fill"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantVitorias; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Vitórias</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card empate-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-equals"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantEmpates; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Empates</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card derrotas-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-times"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantDerrotas; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Derrotas</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card customers-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-times-circle"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantFaltas; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Faltas</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card vermelho-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="bi bi-file-fill"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantCartVermelho; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Cartões Vermelho</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card amarelo-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="bi bi-file-fill"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantCartAmarelo; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Cartões Amarelo</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card campeonato-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-trophy"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantTorneio; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Torneios</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">

                                                                <div class="card info-card amistoso-card">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="fas fa-handshake"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <h2><?= $dados['exibirJogador']->quantAmistosos; ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Amistosos</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                            <!-- Customers Card -->
                                                            <div class="col-xxl-4 col-xl-12">
                                                                <?php
                                                                $nV = $dados['exibirJogador']->quantVitorias;
                                                                $nE = $dados['exibirJogador']->quantEmpates;
                                                                $nT = $dados['exibirJogador']->quantJogos;
                                                                $nD = $dados['exibirJogador']->quantDerrotas;
                                                                ?>
                                                                <div class="card info-card <?php echo ($nD > $nV && $nD > $nE) ? "aproveitamentoRuim-card" : (($nE > $nD && $nE > $nV) ? "aproveitamentoMedio-card" : (($nV > $nD && $nV > $nE) ? "aproveitamentoBom-card" : (($nV == $nE) ? "aproveitamentoMedio-card" : "aproveitamentoPadrao-card"))); ?>">

                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                                <i class="<?php echo ($nD > $nV && $nD > $nE) ? "bi bi-emoji-frown-fill" : (($nE > $nD && $nE > $nV) ? "bi bi-emoji-neutral-fill" : (($nV > $nD && $nV > $nE) ? "bi bi-emoji-smile-fill" : (($nV == $nE) ? "bi bi-emoji-neutral-fill" : "bi bi-emoji-smile-fill"))); ?>"></i>
                                                                            </div>
                                                                            <div class="ps-3 mt-3 text-center">
                                                                                <?php
                                                                                //Para saber a % de vitórias:
                                                                                $porV = ($nV / ($nV + $nD + $nE)) * 100;
                                                                                //Para saber a % de derrotas:
                                                                                //$porD = ($nD/($nV+$nD+$nE))*100;
                                                                                //Para saber a % de empates:
                                                                                $porE = $nE / (($nV + $nD + $nE) * 100);
                                                                                $aproveitamento = $porV + $porE;
                                                                                $aproveitamentoFormatado = number_format($aproveitamento, 1, ',', '.');
                                                                                ?>
                                                                                <h2><?= $aproveitamentoFormatado . '%' ?></h2>
                                                                                <span class="text-muted small pt-2 ps-1">Aproveitamento</span>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div><!-- End Customers Card -->

                                                        </div>

                                                    </div>
                                                    <!--
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success botaoFim"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>

                                        </form><!-- End Change Password Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"><b>Atleta:</b> <?= $dados['exibirJogador']->nome_atleta ?> | Data de Registro: <?= $dataCriacao = date('d/m/Y', strtotime($dados['exibirJogador']->dtRegistro)) ?> - Data de Atualização: <?= $dataAtualiza = date('d/m/Y', strtotime($dados['exibirJogador']->dt_edicao)) ?></font>
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