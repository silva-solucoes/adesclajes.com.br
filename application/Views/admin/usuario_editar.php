<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Administradores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/usuario'; ?>">Lista de Usuários</a></li>
                <li class="breadcrumb-item active">Editar Usuários</li>
            </ol>
        </nav>
        <?php
        Sessao::mensagem('editarUsuario');
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
                                <font style="vertical-align: inherit;">Formulário de Usuário </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">Edição de dados</font>
                                </font>
                            </span>
                        </h5>

                        <form class="row g-3" action="<?php echo URL . '/admin/editarUser/' . $dados['exibirUser']->id_usuario; ?>" method="post" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="fotoPatrocinadorEditar">Foto*:</label>
                                <div class="form-floating">
                                    <img id="Foto" width="300" src="<?= URL ?>/public/uploads/adms/<?= $dados['exibirUser']->foto_user ?>" alt="Imagem do patrocinador" id="fotoPatrocinadorPreview">
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" type="file" accept=".jpg, .jpeg, .png" name="fotoPerfil" id="nomeFoto">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <input name="nomeUser" type="text" class="form-control" id="floatingName" value="<?= $dados['exibirUser']->nome_usuario ?>" placeholder="Your Name" required>
                                    <label for="floatingName">Nome Completo*:</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="cpfUser" type="text" class="form-control" id="cpf-input" oninput="formatarCPF(this.value)" value="<?= $dados['exibirUser']->cpf_cnpj ?>" placeholder="" required>
                                        <label for="floatingCity">CPF:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="telUser" type="tel" class="form-control" id="telefone-input" maxlength="15" oninput="formatarTelefone(this.value)" value="<?= $dados['exibirUser']->telefone_usuario ?>" placeholder="" required>
                                        <label for="floatingCity">Telefone*:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="funcaoUser" id="floatingSelect" aria-label="State" required>
                                        <option selected>Selecione</option>
                                        <option value="<?= $dados['exibirUser']->id_funcao ?>">Admin</option>
                                    </select>
                                    <label for="floatingSelect">Função*:</label>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="emailUser" id="floatingCity" value="<?= $dados['exibirUser']->email_usuario ?>" required>
                                        <label for="floatingCity">E-mail*:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="senhaUser" id="floatingCity" value="" required>
                                        <label for="floatingCity">Senha*:</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="col-md-6">
                                    <button type="submit" id="botao-editar"><i class="bi bi-pencil-square"></i> Editar Usuário</button>
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
                    <a href="<?php echo URL . '/admin/aceitarSolicitacao/' . $dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
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
                    <a href="<?php echo URL . '/admin/rejeitarSolicitacao/' . $dados['individualInsc']->id_inscricao; ?>" type="button" class="btn btn-primary">Sim</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
<script>
    function formatarTelefone(telefone) {
        // Remove qualquer caractere que não seja número
        telefone = telefone.replace(/\D/g, '');

        // Verifica se o número de telefone tem um formato válido
        if (telefone.length === 11) {
            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (telefone.length === 9) {
            telefone = telefone.replace(/(\d{5})(\d{4})/, '$1-$2');
        }

        // Atualiza o valor do input com o telefone formatado
        document.getElementById('telefone-input').value = telefone;
    }
    document.getElementById('nomeFoto').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('Foto').src = img.src;
            };
        }
    });
</script>
<?php include_once 'footer.php'; ?>