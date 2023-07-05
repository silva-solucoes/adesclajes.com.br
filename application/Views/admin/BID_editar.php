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
                                    <font style="vertical-align: inherit;">editar</font>
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
                                        <p class="small fst-italic">A seção "Dados do Atleta" permite ao usuário atualizar as informações e imagens do atleta.</p>
                                        <form class="row g-3" action="<?php echo URL . '/admin/editarDadosAtleta/' . $dados['exibirJogador']->id_atleta; ?>" method="post" enctype="multipart/form-data">
                                            <div class="card">
                                                <div class="card-header">Formulário de Edição</div>
                                                <div class="card-body">
                                                    <div class="row g-3 mt-3">

                                                        <div class="row">
                                                            <div class="col-md-4 text-left">
                                                                <div class="form-floating">
                                                                    <img class="rounded-circle img-fluid" id="imagemPreview" src="<?php echo URL . '/public/uploads/atletas/' . $dados['exibirJogador']->foto_atleta ?>" alt="Imagem de Perfil" style="width:120px; height: 120px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 text-left mt-5">
                                                                <label for="fotoInput" class="btn btn-primary btn-sm" title="Atualizar Foto">
                                                                    <i class="bi bi-upload"></i> Atualizar Foto
                                                                </label>
                                                                <input type="file" id="fotoInput" name="fotoPerfil" accept=".jpg, .jpeg, .png" style="display: none">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName" placeholder="Nome Completo" value="<?= $dados['exibirJogador']->nome_atleta ?>">
                                                                <label for="floatingName">Nome Completo*:</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                <?= $dados['nomeUser_erro'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating">
                                                                <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="DD/MM/AAAA" value="<?= $dados['exibirJogador']->dtNascimento_atleta ?>">
                                                                <label for="floatingName">Data de Nascimento:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" name="genero" id="floatingSelect" aria-label="State">
                                                                    <?php if ($dados['exibirJogador']->sexo_atleta == 1) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->sexo_atleta ?>">Feminino</option>
                                                                        <option value="2">Masculino</option>
                                                                    <?php elseif ($dados['exibirJogador']->sexo_atleta == 2) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->sexo_atleta ?>">Masculino</option>
                                                                        <option value="1">Feminino</option>
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
                                                                    <input type="text" class="form-control" name="nomeEscola" id="nomeEscola" value="<?= $dados['exibirJogador']->nomeEscolar ?>">
                                                                    <label for="floatingCity">Nome da Escola*:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" name="nivel" id="nivel" aria-label="State">
                                                                    <?php if ($dados['exibirJogador']->nivelEnsino == 1) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Fundamental I</option>
                                                                        <option value="2">Ensino Fundamental II</option>
                                                                        <option value="3">Ensino Médio</option>
                                                                        <option value="4">Ensino Superior</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 2) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Fundamental II</option>
                                                                        <option value="1">Ensino Fundamental I</option>
                                                                        <option value="3">Ensino Médio</option>
                                                                        <option value="4">Ensino Superior</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 3) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Médio</option>
                                                                        <option value="1">Ensino Fundamental I</option>
                                                                        <option value="2">Ensino Fundamental II</option>
                                                                        <option value="4">Ensino Superior</option>
                                                                    <?php elseif ($dados['exibirJogador']->nivelEnsino == 4) : ?>
                                                                        <option selected value="<?= $dados['exibirJogador']->nivelEnsino ?>">Ensino Superior</option>
                                                                        <option value="1">Ensino Fundamental I</option>
                                                                        <option value="2">Ensino Fundamental II</option>
                                                                        <option value="3">Ensino Médio</option>
                                                                    <?php endif; ?>
                                                                </select>
                                                                <label for="floatingSelect">Nível de Ensino*:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="turma" id="turma" value="<?= $dados['exibirJogador']->turma ?>">
                                                                    <label for="floatingCity">Turma/Série:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="turno" id="turno" value="<?= $dados['exibirJogador']->turno ?>">
                                                                    <label for="floatingCity">Turno:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="enderecoEcola" id="enderecoEcola" value="<?= $dados['exibirJogador']->logradouro ?>">
                                                                    <label for="floatingCity">Endereço da Escola:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="numero" id="numero" value="<?= $dados['exibirJogador']->nLogradouro ?>">
                                                                    <label for="floatingCity">Nº:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-8">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomeMae" id="nomeMae" value="<?= $dados['exibirJogador']->nomeMae_atleta ?>">
                                                                    <label for="floatingCity">Nome da Mãe*:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telMae" id="telMae" maxlength="11" oninput="formatPhone(this)" value="<?= $dados['exibirJogador']->celularMae_atleta ?>">
                                                                    <label for="floatingCity">Telefone da Mãe:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomePai" id="nomePai" value="<?= $dados['exibirJogador']->nomePai_atleta ?>">
                                                                    <label for="floatingCity">Nome da Pai:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telPai" id="telPai" maxlength="11" oninput="formatPhone(this)" value="<?= $dados['exibirJogador']->celularPai_atleta ?>">
                                                                    <label for="floatingCity">Telefone da Pai:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i>
                                                        Salvar Alterações</button>
                                                </div>

                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade profile-edit pt-1" id="profile-edit">
                                        <p class="small fst-italic">A seção "Dados do Responsável" é dedicada a visualizar as principais informações do responsável pela criança/adolecente.</p>
                                        <!-- Profile Edit Form -->
                                        <form action="<?php echo URL . '/admin/editarResponsavel/' . $dados['exibirJogador']->id_atleta; ?>" method="post" enctype="multipart/form-data">
                                            <div class="card">
                                                <div class="card-header">Formulário de Visualização</div>
                                                <div class="card-body">
                                                    <div class="row g-3 mb-3 mt-3">
                                                        <div class="col-md-5">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="nomeResponsavel" id="nomeResponsavel" value="<?= $dados['exibirJogador']->nomeResponsavel ?>">
                                                                    <label for="floatingCity">Nome do Responsável Legal:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <select name="grauParentesco" class="form-control" id="grauParentesco">
                                                                        <?php if ($dados['exibirJogador']->grauParentesco == '') : ?>
                                                                            <option selected disabled>Selecione</option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Pai') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Mãe') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Avô') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Avó') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Tio') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Tia') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Irmão') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                            <option value="Irmã">Irmã</option>
                                                                        <?php elseif ($dados['exibirJogador']->grauParentesco == 'Irmã') : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->grauParentesco ?>"><?= $dados['exibirJogador']->grauParentesco ?></option>
                                                                            <option value="Pai">Pai</option>
                                                                            <option value="Mãe">Mãe</option>
                                                                            <option value="Avô">Avô</option>
                                                                            <option value="Avó">Avó</option>
                                                                            <option value="Tio">Tio</option>
                                                                            <option value="Tia">Tia</option>
                                                                            <option value="Irmão">Irmão</option>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <label for="floatingCity">Grau de Parentesco:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="tel" class="form-control" name="telResponsavel" id="telResponsavel" maxlength="11" oninput="formatPhone(this)" value="<?= $dados['exibirJogador']->celularResponsavel ?>">
                                                                    <label for="floatingCity">Telefone do/a Responsável:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="enderecoResponsavel" id="enderecoResponsavel" value="<?= $dados['exibirJogador']->logradouraResponsavel ?>">
                                                                    <label for="floatingCity">Endereço do/a Responsável:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="numeroResponsavel" id="numeroResponsavel" value="<?= $dados['exibirJogador']->nLougradoura ?>">
                                                                    <label for="floatingCity">Nº:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="bairroResponsavel" id="bairroResponsavel" value="<?= $dados['exibirJogador']->bairro ?>">
                                                                    <label for="floatingCity">Bairro:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="cidade" id="cidade" value="<?= $dados['exibirJogador']->cidadeR ?>">
                                                                    <label for="floatingCity">Cidade:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="ufResponsavel" id="ufResponsavel" value="<?= $dados['exibirJogador']->uf ?>">
                                                                    <label for="floatingCity">UF:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" maxlength="9" name="cepResponsavel" id="cepResponsavel" oninput="formatarCEP('cepResponsavel'); buscarCidadeUF(this.value)" value="<?= $dados['exibirJogador']->cep ?>">
                                                                    <label for="floatingCity">CEP:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                </div>

                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade pt-1" id="profile-settings">
                                        <p class="small fst-italic">A seção "Dados Técnicos do Atleta" é dedicada a visualizar as informações técnicas do atleta.</p>
                                        <!-- Settings Form -->

                                        <div class="row mb-3">
                                            <form action="<?php echo URL . '/admin/editarTecnico/' . $dados['exibirJogador']->id_atleta; ?>" method="post" enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-header">Formulário de Visualização</div>
                                                    <div class="card-body">
                                                        <div class="row g-3 mb-3 mt-3">
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="categoria" id="categoria" aria-label="State" onchange="mostrarPosicoes(this.value)">
                                                                        <?php if ($dados['exibirJogador']->categoriaEsportiva == 1) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futebol</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futsal</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Fut7</option>
                                                                        <?php elseif ($dados['exibirJogador']->categoriaEsportiva == 2) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futsal</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futebol</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Fut7</option>
                                                                        <?php elseif ($dados['exibirJogador']->categoriaEsportiva == 3) : ?>
                                                                            <option selected value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Fut7</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futebol</option>
                                                                            <option value="<?= $dados['exibirJogador']->categoriaEsportiva ?>">Futsal</option>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <label for="floatingSelect">Categoria Esportiva*:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" name="nivelEsportivo" id="nivelEsportivo" aria-label="State" onchange="reverterSelecao()">
                                                                            <?php if ($dados['idade'] == 7) : ?>
                                                                                <option selected value="7">Sub-7</option>
                                                                            <?php elseif ($dados['idade'] == 8) : ?>
                                                                                <option selected value="8">Sub-8</option>
                                                                            <?php elseif ($dados['idade'] == 9) : ?>
                                                                                <option selected value="9">Sub-9</option>
                                                                            <?php elseif ($dados['idade'] == 10) : ?>
                                                                                <option selected value="10">Sub-10</option>
                                                                            <?php elseif ($dados['idade'] == 11) : ?>
                                                                                <option selected value="11">Sub-11</option>
                                                                            <?php elseif ($dados['idade'] == 12) : ?>
                                                                                <option selected value="12">Sub-12</option>
                                                                            <?php elseif ($dados['idade'] == 13) : ?>
                                                                                <option selected value="13">Sub-13</option>
                                                                            <?php elseif ($dados['idade'] == 14) : ?>
                                                                                <option selected value="14">Sub-14</option>
                                                                            <?php elseif ($dados['idade'] == 15) : ?>
                                                                                <option selected value="15">Sub-15</option>
                                                                            <?php elseif ($dados['idade'] == 16) : ?>
                                                                                <option selected value="16">Sub-16</option>
                                                                            <?php elseif ($dados['idade'] == 17) : ?>
                                                                                <option selected value="17">Sub-17</option>
                                                                            <?php elseif ($dados['idade'] == 18) : ?>
                                                                                <option selected value="18">Sub-18</option>
                                                                            <?php elseif ($dados['idade'] == 19) : ?>
                                                                                <option selected value="19">Sub-19</option>
                                                                            <?php elseif ($dados['idade'] == 20) : ?>
                                                                                <option selected value="20">Sub-20</option>
                                                                            <?php endif; ?>
                                                                        </select>
                                                                        <label for="floatingCity">Nível Esportivo:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                // Função para reverter a seleção do select para o valor original
                                                                function reverterSelecao() {
                                                                    var select = document.getElementById("nivelEsportivo");
                                                                    var valorOriginal = select.dataset.valorOriginal;
                                                                    select.value = valorOriginal;
                                                                }

                                                                // Armazenar o valor original do select ao carregar a página
                                                                window.addEventListener("DOMContentLoaded", function() {
                                                                    var select = document.getElementById("nivelEsportivo");
                                                                    select.dataset.valorOriginal = select.value;
                                                                });
                                                            </script>
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="posicaoP" id="posicaoP" aria-label="State">
                                                                        <option selected value="<?= $dados['exibirJogador']->posicaoPrincipal ?>"><?= $dados['exibirJogador']->posicaoPrincipal ?></option>
                                                                    </select>
                                                                    <label for="floatingSelect">Posição Desejada*:</label>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                document.addEventListener("DOMContentLoaded", function() {
                                                                    const categoriaSelect = document.getElementById("categoria");
                                                                    const posicaoSelect = document.getElementById("posicaoP");

                                                                    mostrarPosicoes(categoriaSelect.value); // Mostrar posições iniciais quando a página carregar

                                                                    categoriaSelect.addEventListener("change", function() {
                                                                        mostrarPosicoes(this.value);
                                                                    });

                                                                    function mostrarPosicoes(categoria) {
                                                                        posicaoSelect.innerHTML = ""; // Limpar as opções existentes

                                                                        if (categoria === "1") { // Futebol
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoPrincipal ?>"><?= $dados['exibirJogador']->posicaoPrincipal ?></option>
                                                                            <option value="Goleiro">Goleiro</option>
                                                                            <option value="Zagueiro">Zagueiro</option>
                                                                            <option value="Lateral">Lateral</option>
                                                                            <option value="Volante">Volante</option>
                                                                            <option value="Meia">Meia</option>
                                                                            <option value="Ponta">Ponta</option>
                                                                            <option value="Atacante">Atacante</option>
                                                                        `;
                                                                        } else if (categoria === "2") { // Futsal
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoPrincipal ?>"><?= $dados['exibirJogador']->posicaoPrincipal ?></option>
                                                                            <option value="Goleiro">Goleiro</option>
                                                                            <option value="Fixo">Fixo</option>
                                                                            <option value="Ala Esquerda">Ala Esquerda</option>
                                                                            <option value="Ala Direita">Ala Direita</option>
                                                                            <option value="Pivô">Pivô</option>
                                                                        `;
                                                                        } else if (categoria === "3") { // Fut7
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoPrincipal ?>"><?= $dados['exibirJogador']->posicaoPrincipal ?></option>
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
                                                                });
                                                            </script>
                                                            <div class="col-md-3">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select" name="posicaoS" id="posicaoS" aria-label="State">
                                                                        <option selected value="<?= $dados['exibirJogador']->posicaoSecundaria ?>"><?= $dados['exibirJogador']->posicaoSecundaria ?></option>
                                                                    </select>
                                                                    <label for="floatingSelect">Posição Secundária:</label>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                document.addEventListener("DOMContentLoaded", function() {
                                                                    const categoriaSelect = document.getElementById("categoria");
                                                                    const posicaoSelect = document.getElementById("posicaoS");

                                                                    mostrarPosicoes(categoriaSelect.value); // Mostrar posições iniciais quando a página carregar

                                                                    categoriaSelect.addEventListener("change", function() {
                                                                        mostrarPosicoes(this.value);
                                                                    });

                                                                    function mostrarPosicoes(categoria) {
                                                                        posicaoSelect.innerHTML = ""; // Limpar as opções existentes

                                                                        if (categoria === "1") { // Futebol
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoSecundaria ?>"><?= $dados['exibirJogador']->posicaoSecundaria ?></option>
                                                                            <option value="Goleiro">Goleiro</option>
                                                                            <option value="Zagueiro">Zagueiro</option>
                                                                            <option value="Lateral">Lateral</option>
                                                                            <option value="Volante">Volante</option>
                                                                            <option value="Meia">Meia</option>
                                                                            <option value="Ponta">Ponta</option>
                                                                            <option value="Atacante">Atacante</option>
                                                                        `;
                                                                        } else if (categoria === "2") { // Futsal
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoSecundaria ?>"><?= $dados['exibirJogador']->posicaoSecundaria ?></option>
                                                                            <option value="Goleiro">Goleiro</option>
                                                                            <option value="Fixo">Fixo</option>
                                                                            <option value="Ala Esquerda">Ala Esquerda</option>
                                                                            <option value="Ala Direita">Ala Direita</option>
                                                                            <option value="Pivô">Pivô</option>
                                                                        `;
                                                                        } else if (categoria === "3") { // Fut7
                                                                            posicaoSelect.innerHTML += `
                                                                            <option selected value="<?= $dados['exibirJogador']->posicaoSecundaria ?>"><?= $dados['exibirJogador']->posicaoSecundaria ?></option>
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
                                                                });
                                                            </script>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <?php $numero_formatado = str_replace('.', ',', $dados['exibirJogador']->altura_atleta); ?>
                                                                        <input type="text" class="form-control" maxlength="4" name="altura" id="altura" value="<?= $numero_formatado ?>">
                                                                        <label for="floatingCity">Altura do Atleta*:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" maxlength="4" name="peso" id="peso" value="<?= $dados['exibirJogador']->peso_atleta ?>" oninput="formatarPeso()">
                                                                        <label for="floatingCity">Peso do Atleta:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function formatarPeso() {
                                                                    let pesoInput = document.getElementById("peso");
                                                                    let peso = pesoInput.value.replace(/\D/g, ""); // remove todos os caracteres não numéricos

                                                                    // insere os pontos e o traço na formatação padrão do altura
                                                                    peso = peso.replace(/(\d{2})(\d)/, "$1,$2");

                                                                    pesoInput.value = peso;
                                                                }
                                                            </script>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" name="tamanhoUniforme" id="tamanhoUniforme" value="<?= $dados['exibirJogador']->nUniforme_atleta ?>">
                                                                        <label for="floatingCity">Tamanho do Uniforme:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" maxlength="2" name="numCalcado" id="numCalcado" value="<?= $dados['exibirJogador']->nPe_atleta ?>">
                                                                        <label for="floatingCity">Número do Calçado:</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    
                                    <div class="tab-pane fade pt-1" id="profile-change-password">
                                        <p class="small fst-italic">A seção "Estatísticas Gerais" é dedicada a monitora o desempenho do atleta durante o ano.</p>
                                        <!-- Change Password Form -->
                                        <form action="<?php echo URL . '/admin/editarEstatisticas'; ?>" method="post" enctype="multipart/form-data">

                                            <div class="row mb-3">
                                                <div class="card">
                                                    <div class="card-header">Formulário de Edição</div>
                                                    <div class="card-body">
                                                        <div class="row g-3 mb-3 mt-3">

                                                            <div class="col-md-6">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" name="ano" id="ano" aria-label="State" onchange="carregarDados()">
                                                                            <?php foreach ($dados['anos'] as $ano) : ?>
                                                                                <option selected value="<?= $ano = date("Y", strtotime($ano)); ?>"><?= $ano = date("Y", strtotime($ano)); ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                        <label for="floatingSelect">Selecione o ano:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="quantidadeJogos" name="quantidadeJogos" value="" title="Insira a quantidade de jogos">
                                                                <label for="quantidadeJogos">Jogos:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="golsMarcados" name="golsMarcados" value="" title="Insira a quantidade de Gols Marcados">
                                                                <label for="golsMarcados">Gols Marcados:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="golsPorPartida" name="golsPorPartida" value="" title="Campo automático" disabled>
                                                                <label for="golsPorPartida">Gols por Partida:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="vitorias" name="vitorias" value="" title="Insira a quantidade de vitórias">
                                                                <label for="vitorias">Vitórias:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="empates" name="empates" value="" title="Insira a quantidade de empates">
                                                                <label for="empates">Empates:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="derrotas" name="derrotas" value="" title="Insira a quantidade de derrotas">
                                                                <label for="derrotas">Derrotas:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="faltas" name="faltas" value="" title="Insira a quantidade de faltas">
                                                                <label for="faltas">Faltas:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="cartoesVermelhos" name="cartoesVermelhos" value="" title="Insira a quantidade de Cartões Vermelhos">
                                                                <label for="cartoesVermelhos">Cartões Vermelhos:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="cartoesAmarelos" name="cartoesAmarelos" value="" title="Insira a quantidade de Cartões Amarelos">
                                                                <label for="cartoesAmarelos">Cartões Amarelos:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="torneios" name="torneios" value="" title="Insira a quantidade de Torneios">
                                                                <label for="torneios">Torneios:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="number" id="amistosos" name="amistosos" value="" title="Insira a quantidade de Amistosos">
                                                                <label for="amistosos">Amistosos:</label>
                                                            </div>

                                                            <div class="col-md-3 form-floating">
                                                                <input class="form-control" type="text" id="aproveitamento" name="aproveitamento" value="" title="Campo automático" disabled>
                                                                <label for="aproveitamento">Aproveitamento do Atleta:</label>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <script type="text/javascript">
                                                        $(function() {
                                                            $('#ano').change(function() {
                                                                if ($(this).val()) {
                                                                    $('#quantidadeJogos').hide();
                                                                    $('.carregando').show();
                                                                    $.getJSON('sub_categorias_post.php?search=', {
                                                                        id_categoria: $(this).val(),
                                                                        ajax: 'true'
                                                                    }, function(j) {
                                                                        var options = '<option value="">Escolha Subcategoria</option>';
                                                                        for (var i = 0; i < j.length; i++) {
                                                                            options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
                                                                        }
                                                                        $('#id_sub_categoria').html(options).show();
                                                                        $('.carregando').hide();
                                                                    });
                                                                } else {
                                                                    $('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success botaoFim"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
                                                    </div>

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
    document.getElementById('fotoInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('imagemPreview').src = img.src;
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

    function formatarCEP(inputId) {
        // Obtém o elemento input pelo ID
        let input = document.getElementById(inputId);

        // Remove caracteres especiais do CEP
        let cep = input.value.replace(/\D/g, '');

        // Formata o CEP no formato "99999-999"
        cep = cep.replace(/^(\d{5})(\d)/, '$1-$2');

        // Atualiza o valor do input com o CEP formatado
        input.value = cep;
    }

    function buscarCidadeUF(cep) {
        // Remove caracteres especiais do CEP
        cep = cep.replace(/\D/g, '');

        // Verifica se o CEP possui 8 dígitos
        if (cep.length === 8) {
            // Realiza a requisição para obter a cidade e UF do CEP
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    // Verifica se os dados foram retornados com sucesso
                    if (!data.erro) {
                        // Atualiza os campos de cidade e UF com os valores obtidos
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('ufResponsavel').value = obterUFCompleta(data.uf);
                        document.getElementById('bairroResponsavel').value = data.bairro;
                    }
                })
                .catch(error => console.log(error));
        }
    }


    function obterUFCompleta(uf) {
        // Mapeia o código da UF para o nome completo correspondente
        const ufCompleta = {
            AC: 'Acre',
            AL: 'Alagoas',
            AM: 'Amazonas',
            AP: 'Amapá',
            BA: 'Bahia',
            CE: 'Ceará',
            DF: 'Distrito Federal',
            ES: 'Espírito Santo',
            GO: 'Goiás',
            MA: 'Maranhão',
            MG: 'Minas Gerais',
            MS: 'Mato Grosso do Sul',
            MT: 'Mato Grosso',
            PA: 'Pará',
            PB: 'Paraíba',
            PE: 'Pernambuco',
            PI: 'Piauí',
            PR: 'Paraná',
            RJ: 'Rio de Janeiro',
            RN: 'Rio Grande do Norte',
            RO: 'Rondônia',
            RR: 'Roraima',
            RS: 'Rio Grande do Sul',
            SC: 'Santa Catarina',
            SE: 'Sergipe',
            SP: 'São Paulo',
            TO: 'Tocantins'
        };

        return ufCompleta[uf] || '';
    }
</script>
<?php include_once 'footer.php'; ?>