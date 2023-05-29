<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Configurações do Site</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Configurações do Site</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Logos</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Página
                                    Principal</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Conteúdo Geral</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Configuração de e-mail de Contato</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <p class="small fst-italic">A seção "Logos" é dedicada ao cadastro ou atualização das
                                    principais imagens do site e do login.</p>

                                <div class="card">
                                    <div class="card-header">LOGO DO SITE</div>
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-md-6 col-lg-6 pt-2">
                                                <img src="<?php echo URL . 'public/images/logo-d.png'; ?>"
                                                    alt="Logo do Site" width="50%">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Atualizar Logo"><i
                                                            class="bi bi-upload"></i> Atualizar Logo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i>
                                            Salvar Alterações</button>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">FAVICON</div>
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-md-6 col-lg-6 pt-2">
                                                <img src="<?php echo URL . 'public/images/logo-01.png'; ?>"
                                                    alt="Logo do Site" width="15%">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Atualizar Icone"><i class="bi bi-upload"></i> Atualizar
                                                        Icone</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i>
                                            Salvar Alterações</button>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-2" id="profile-edit">
                                <p class="small fst-italic">A seção "Página Principal" é dedicada ao cadastro ou
                                    atualização das
                                    principais informações do site.</p>
                                <!-- Profile Edit Form -->
                                <form>
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE DESTAQUE</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Imagem de Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="<?php echo URL . 'public/images/logo-01.png'; ?>"
                                                        alt="Imagem Destaque" width="35%">
                                                    <div class="pt-2 pb-2">
                                                        <a href="#" class="btn btn-primary btn-sm"
                                                            title="Atualizar Imagem"><i class="bi bi-upload"></i>
                                                            Atualizar Imagem</a>
                                                        <div class="form-check form-switch mt-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked="">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Desativar Imagem</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título do
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Sub-Título do
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Link do Vídeo de
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Botão
                                                    de Incrição:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked">Desativar Botâo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE PATROCINADORES</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Animação:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check form-switch mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked">Desativar Animação</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE ÚLTIMAS NOTÍCIAS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE SOBBRE-NÓS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE MELHOR ESCOLHA</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE CHAMADA PARA AÇÃO</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Imagem de Fundo:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="<?php echo URL . 'public/images/cta-bg.jpg'; ?>"
                                                        alt="Imagem Destaque" width="35%">
                                                    <div class="pt-2 pb-2">
                                                        <a href="#" class="btn btn-primary btn-sm"
                                                            title="Atualizar Imagem"><i class="bi bi-upload"></i>
                                                            Atualizar Imagem</a>
                                                        <div class="form-check form-switch mt-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked="">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Desativar Imagem</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Botão
                                                    de Incrição:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked">Desativar Botâo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE DIRETORIA</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE PERGUNTAS FREQUENTES</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE CONTATOS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="fullName" type="text" class="form-control"
                                                        id="fullName" value="Kevin Anderson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">
                                <p class="small fst-italic">A seção "Conteúdo Geral" é dedicada ao cadastro ou
                                    atualização das informações do rodapé do site.</p>
                                <!-- Settings Form -->
                                <form>

                                    <div class="row mb-3">
                                        <div class="card">
                                            <div class="card-header">SEÇÃO DE RODAPÉ</div>
                                            <div class="card-body">
                                                <div class="row g-0 mb-3 mt-3">
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Localização da
                                                        ADESC:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="Rua Riacho Madeira, s.n. Centro, Lajes/RN, CEP: 59535-000, Brasil">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Telefone:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="tel" class="form-control"
                                                            id="fullName" value="+55 (84)99620-2499">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Facebook:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Instagram:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Linkedin:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - TikTok:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Twitter:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - YouTube:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="text" class="form-control"
                                                            id="fullName" value="#">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">E-mail:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="email" class="form-control"
                                                            id="fullName" value="adesclajes1997@gmail.com">
                                                    </div>                                                    
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Incorporar um
                                                        mapa - Código Google Maps(iFrame):</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea class="form-control" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success"><i
                                                        class="bi bi-check-circle"></i> Salvar Alterações</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form><!-- End settings Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <p class="small fst-italic">A seção "Configuração de e-mail de Contato" é dedicada ao cadastro ou
                                    atualização do e-mail que receberá as mensagem enviadas pelos usuários do site.</p>
                                <!-- Change Password Form -->
                                <form>

                                    <div class="row mb-3">
                                    <div class="card">
                                            <div class="card-header">CONFIGURAÇÃO DE E-MAIL</div>
                                            <div class="card-body">
                                                <div class="row g-0 mb-3 mt-3">
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">E-mail:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="fullName" type="email" class="form-control"
                                                            id="fullName" value="adesclajes1997@gmail.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success"><i
                                                        class="bi bi-check-circle"></i> Salvar Alterações</button>
                                            </div>
                                        </div>
                                    </div>

                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>