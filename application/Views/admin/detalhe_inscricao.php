<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Inscrições</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/inscricao'; ?>">Lista de Inscrições</a></li>
                <li class="breadcrumb-item active">Detalhe da Inscrição</li>
            </ol>
        </nav>
        <?php
            Sessao::mensagem('situacao');
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
                                <font style="vertical-align: inherit;">Detalhe de Incrição </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Análise de Solicitação de Inscrição</font>
                                </font>
                            </span>
                        </h5>

                        <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 text-left">
                                <div class="form-floating">
                                    <?php if($dados['individualInsc']->foto_atleta == 'semfoto.webp'):?>
                                        <img class="rounded-circle img-fluid" id="imagemPreview"
                                            src="<?php echo URL . '/public/images/'.$dados['individualInsc']->foto_atleta ?>" alt="Imagem de Perfil"
                                            style="width:120px; height: 120px;">
                                    <?php else: ?>
                                        <img class="rounded-circle img-fluid" id="imagemPreview"
                                            src="<?php echo URL . '/public/uploads/atletas/'.$dados['individualInsc']->foto_atleta ?>" alt="Imagem de Perfil"
                                            style="width:120px; height: 120px;">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <input type="text" class="form-control <?= $dados['nomeUser_erro'] ? 'is-invalid' : '' ?>" name="nomeUser" id="floatingName"
                                            placeholder="Nome Completo" value="<?=$dados['individualInsc']->nome_atleta?>" disabled>
                                    <label for="floatingName">Nome Completo*:</label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $dados['nomeUser_erro'] ?>
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="DD/MM/AAAA" value="<?=$dados['individualInsc']->dtNascimento_atleta?>" disabled>
                                        <label for="floatingName">Data de Nascimento:</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="genero" id="floatingSelect" aria-label="State" disabled>
                                            <?php if($dados['individualInsc']->sexo_atleta == 1): ?>
                                            <option selected value="<?=$dados['individualInsc']->sexo_atleta?>">Feminino</option>
                                            <?php elseif($dados['individualInsc']->sexo_atleta == 2): ?>
                                            <option selected value="<?=$dados['individualInsc']->sexo_atleta?>">Masculino</option>
                                            <?php endif; ?>
                                        </select>
                                        <label for="floatingSelect">Genero*:</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="nivel" id="nivel" aria-label="State" disabled>
                                        <?php if($dados['individualInsc']->nivelEnsino == 1): ?>
                                            <option selected value="<?=$dados['individualInsc']->nivelEnsino?>">Ensino Fundamental I</option>
                                        <?php elseif($dados['individualInsc']->nivelEnsino == 2): ?>
                                            <option selected value="<?=$dados['individualInsc']->nivelEnsino?>">Ensino Fundamental II</option>
                                        <?php elseif($dados['individualInsc']->nivelEnsino == 3): ?>
                                            <option selected value="<?=$dados['individualInsc']->nivelEnsino?>">Ensino Médio</option>
                                        <?php elseif($dados['individualInsc']->nivelEnsino == 4): ?>
                                            <option selected value="<?=$dados['individualInsc']->nivelEnsino?>">Ensino Superior</option>
                                        <?php endif; ?>
                                        </select>
                                        <label for="floatingSelect">Nível de Ensino*:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomeEscola" id="nomeEscola"
                                                value="<?=$dados['individualInsc']->nomeEscolar?>" disabled>
                                            <label for="floatingCity">Nome da Escola*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomeMae" id="nomeMae"
                                                value="<?=$dados['individualInsc']->nomeMae_atleta?>" disabled>
                                            <label for="floatingCity">Nome da Mãe*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomePai" id="nomePai"
                                                value="<?=$dados['individualInsc']->nomePai_atleta?>" disabled>
                                            <label for="floatingCity">Nome da Pai:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" name="tel" id="tel"
                                                value="<?=$dados['individualInsc']->celularResponsavel?>" disabled>
                                            <label for="floatingCity">Telefone do Responsável*:</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="categoria" id="categoria" aria-label="State" disabled>
                                        <?php if($dados['individualInsc']->categoriaEsportiva == 1): ?>
                                            <option selected value="<?=$dados['individualInsc']->categoriaEsportiva?>">Futebol</option>
                                        <?php elseif($dados['individualInsc']->categoriaEsportiva == 2): ?>
                                            <option selected value="<?=$dados['individualInsc']->categoriaEsportiva?>">Futsal</option>
                                        <?php elseif($dados['individualInsc']->categoriaEsportiva == 3): ?>
                                            <option selected value="<?=$dados['individualInsc']->categoriaEsportiva?>">Fut7</option>
                                        <?php endif; ?>
                                        </select>
                                        <label for="floatingSelect">Categoria Esportiva*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="categoria" id="categoria" aria-label="State" disabled>
                                            <option selected value="<?=$dados['individualInsc']->posicaoPrincipal?>"><?=$dados['individualInsc']->posicaoPrincipal?></option>
                                        </select>
                                        <label for="floatingSelect">Posição Desejada*:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="altura" id="altura"
                                                value="<?=$dados['individualInsc']->altura_atleta?>" disabled>
                                            <label for="floatingCity">Altura do Atleta*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" rows="5" disabled><?=$dados['individualInsc']->frase?></textarea>
                                            <label for="floatingCity">Frase motivacional*:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5 mb-4">
                                    <div class="col-md-12 text-center">
                                        <?php if($dados['individualInsc']->situacao_atleta != 2 AND $dados['individualInsc']->situacao_atleta != 3 AND $dados['individualInsc']->situacao_atleta != 4): ?>
                                            <div class="alert alert-success" role="alert">
                                                <h4 class="alert-heading">O atleta já foi analisado e aceito!</h4>
                                                <p>Pedimos que entre em contato com o número do responsável para agendar o primeiro contato com o atleta e fornecer as primeiras orientações. Além disso, solicitamos que preencha o restante dos dados do atleta na guia Gerenciar BID para que o cadastro fique completo.</p>
                                                <hr>
                                                <p class="mb-0">Muito obrigado por contribuir para o crescimento e sucesso da nossa equipe.</p>
                                            </div>
                                        <?php elseif($dados['individualInsc']->situacao_atleta == 3): ?>
                                        <?php else: ?>
                                        <button id="botao-aceitar" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-fill-check"></i> Aceitar Solicitação</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5 mb-4">
                                    <div class="col-md-12 text-center">
                                        <?php if($dados['individualInsc']->situacao_atleta != 4 AND $dados['individualInsc']->situacao_atleta != 2 AND $dados['individualInsc']->situacao_atleta != 1): ?>
                                            <div class="alert alert-danger" role="alert">
                                                <h4 class="alert-heading">O atleta já foi analisado e rejeitado/a!</h4>
                                                <p>Solicitamos que entre em contato com o número do responsável para comunicar a rejeição da inscrição do atleta e explicar o motivo dessa decisão. Caso o motivo que levou à rejeição seja resolvido dentro do prazo de inscrição, pedimos ao responsável que faça uma nova inscrição por meio do site oficial da ADESC Lajes.</p>
                                                <hr>
                                                <p class="mb-0">Muito obrigado por contribuir para o crescimento e sucesso da nossa equipe.</p>
                                            </div>
                                        <?php elseif($dados['individualInsc']->situacao_atleta == 1): ?>
                                        <?php else: ?>
                                        <button id="botao-rejeitar" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-person-fill-x"></i> Rejeitar Solicitação</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5 mb-4">
                                    <div class="col-md-12 text-center">
                                        <?php if($dados['individualInsc']->situacao_atleta != 3 AND $dados['individualInsc']->situacao_atleta != 2 AND $dados['individualInsc']->situacao_atleta != 1): ?>
                                            <div class="alert alert-danger" role="alert">
                                                <h4 class="alert-heading">O atleta foi desligado da ADESC!</h4>
                                                <p>Caso o mesmo deseje retornar a ADESC, clique no botão <b>Aceitar Solicitação</b> para restabelecer vínculo.</p>
                                                <hr>
                                                <p class="mb-0">Muito obrigado por contribuir para o crescimento e sucesso da nossa equipe.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </form>

                    </div>

                </div>
            </div><!-- End Tabela dos Pré-Inscritos -->

        </div>
    </section>
   
    <!-- Modal de Confirmação de Aceite de Solicitação de Inscrição -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-shield-fill-exclamation"></i> Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja <b>aceitar</b> a solicitação de inscrição?
            </div>
            <div class="modal-footer">
            <a href="<?php echo URL . '/admin/aceitarSolicitacao/'.$dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal de Confirmação de rejeição de Solicitação de Inscrição-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-shield-fill-exclamation"></i> Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja <b>rejeitar</b> a solicitação de inscrição?
            </div>
            <div class="modal-footer">
            <a href="<?php echo URL . '/admin/rejeitarSolicitacao/'.$dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>