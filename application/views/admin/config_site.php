<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Configurações do Site</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . '/admin/painel'; ?>">Painel de Controle</a></li>
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
                                    data-bs-target="#profile-change-password">Configuração de Inscrições</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <p class="small fst-italic">A seção "Logos" é dedicada ao cadastro ou atualização das
                                    principais imagens do site e do login.</p>
                                <form action="<?php echo URL.'/admin/editarLogoSite';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">LOGO DO SITE</div>
                                        <div class="card-body">
                                            <div class="row g-0">
                                                <div class="col-md-6 col-lg-6 pt-2">
                                                    <img id="logoImg" src="<?php echo URL . '/public/images/'.$dados['info']->logoHeaderFooter; ?>"
                                                        alt="Logo do Site" width="50%">
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="pt-2">
                                                        <label for="logoInput" class="btn btn-primary btn-sm" title="Atualizar Logo">
                                                            <i class="bi bi-upload"></i> Atualizar Logo
                                                        </label>
                                                        <input type="file" id="logoInput" name="logoSite" accept=".jpg, .jpeg, .png, .webp" style="display: none">
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
                                <form action="<?php echo URL.'/admin/editarFavicon';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">FAVICON</div>
                                        <div class="card-body">
                                            <div class="row g-0">
                                                <div class="col-md-6 col-lg-6 pt-2">
                                                    <img id="faviconImg" src="<?php echo URL . '/public/images/'.$dados['info']->favicon; ?>"
                                                        alt="Logo do Site" width="15%">
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="pt-2">
                                                        <label for="faviconInput" class="btn btn-primary btn-sm" title="Atualizar Logo">
                                                            <i class="bi bi-upload"></i> Atualizar Icone
                                                        </label>
                                                        <input type="file" id="faviconInput" name="favicon" accept=".jpg, .jpeg, .png" style="display: none">
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

                            <div class="tab-pane fade profile-edit pt-2" id="profile-edit">
                                <p class="small fst-italic">A seção "Página Principal" é dedicada ao cadastro ou
                                    atualização das
                                    principais informações do site.</p>
                                <!-- Profile Edit Form -->
                                <form action="<?php echo URL.'/admin/editarDestaques';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE DESTAQUE</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Imagem de Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img id="destaqueImg" src="<?php echo URL . '/public/images/'.$dados['info']->imgDestaque; ?>"
                                                        alt="Imagem Destaque" width="35%">
                                                    <div class="pt-2 pb-2">
                                                        <label for="destaqueInput" class="btn btn-primary btn-sm" title="Atualizar Logo">
                                                            <i class="bi bi-upload"></i> Atualizar Imagem
                                                        </label>
                                                        <input type="file" id="destaqueInput" name="destaque" accept=".jpg, .jpeg, .png" style="display: none">
                                                        
                                                        <!--<div class="form-check form-switch mt-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked="">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Desativar Imagem</label>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título do
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" name="tituloDestaque" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->titulo_destaque?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Sub-Título do
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" name="subTituloDestaque" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_titulo_destaque?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Link do Vídeo de
                                                    Destaque:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" name="linkVideoDestaque" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->incorporarVideo?>">
                                                </div>

                                                <!--<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Botão
                                                    de Incrição:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked">Desativar Botâo</label>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <!--
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
                                -->
                                <form action="<?php echo URL.'/admin/editarUltimas';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE ÚLTIMAS NOTÍCIAS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="titulo" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tl_pgUltimas?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descricao" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_tlPgUltimas?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarSobre';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE SOBBRE-NÓS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="titulo" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tl_pgSobre?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descricao" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_tlSobre?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarEscolha';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE MELHOR ESCOLHA</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="titulo" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tituloEscolha?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descricao" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->subTituloEscolha?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarAcao';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE CHAMADA PARA AÇÃO</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Imagem de Fundo:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img id="fotoAcao" src="<?php echo URL . '/public/images/'.$dados['info']->logoAcao; ?>"
                                                        alt="Imagem Destaque" width="35%">
                                                    <div class="pt-2 pb-2">
                                                        <label for="acaoInput" class="btn btn-primary btn-sm" title="Atualizar Logo">
                                                            <i class="bi bi-upload"></i> Atualizar Imagem
                                                        </label>
                                                        <input type="file" id="acaoInput" name="acao" accept=".jpg, .jpeg, .png" style="display: none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarDiretoria';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE DIRETORIA</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="tituloDiretoria" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tl_pgEquipe?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descDiretoria" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_tlEquipe?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarPF';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE PERGUNTAS FREQUENTES</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="titulo" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tl_pagPerguntas?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descricao" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_tlPerguntas?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo URL.'/admin/editarContato';?>" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">SEÇÃO DE CONTATOS</div>
                                        <div class="card-body">
                                            <div class="row g-0 mb-3 mt-3">
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Título da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="titulo" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->tl_contato?>">
                                                </div>
                                                <label for="fullName"
                                                    class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Descrição da
                                                    Seção:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="descricao" type="text" class="form-control"
                                                        id="fullName" value="<?=$dados['info']->sub_tlContato?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> Salvar Alterações</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">
                                <p class="small fst-italic">A seção "Conteúdo Geral" é dedicada ao cadastro ou
                                    atualização das informações do rodapé do site.</p>
                                <!-- Settings Form -->

                                <div class="row mb-3">
                                    <form action="<?php echo URL.'/admin/editarRodape';?>" method="post" enctype="multipart/form-data">
                                        <div class="card">
                                            <div class="card-header">SEÇÃO DE RODAPÉ</div>
                                            <div class="card-body">
                                                <div class="row g-0 mb-3 mt-3">
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Endereço:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="endereco" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->logradouro?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Número:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="numero" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->numero?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Bairro:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="bairro" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->bairro?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Cidade:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="cidade" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->cidade?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">UF:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="uf" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->uf?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">CEP:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="cep" type="text" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->cep?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Telefone:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="telefone" type="tel" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->telefone?>">
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Facebook:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Facebook'): ?>
                                                        <input name="facebook" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Instagram:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Instagram'): ?>
                                                        <input name="instagram" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Linkedin:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Linkedin'): ?>
                                                        <input name="linkedin" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - TikTok:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'TikTok'): ?>
                                                        <input name="tiktok" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - Twitter:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Twitter'): ?>
                                                        <input name="twitter" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - YouTube:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Youtube'): ?>
                                                        <input name="youtube" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Rede Social - WhatsApp:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                    <?php foreach($dados['redes'] as $rede): ?>
                                                        <?php if($rede->nomeRede == 'Whatsapp'): ?>
                                                        <input name="whatsapp" type="text" class="form-control"
                                                            id="fullName" value="<?=$rede->link_acesso?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">E-mail:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="form-control"
                                                            id="fullName" value="<?=$dados['info']->email?>">
                                                    </div>                                                    
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Incorporar um
                                                        mapa - Código Google Maps(iFrame):</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea name="mapa" class="form-control" style="height: 100px"><?=$dados['info']->localizacaoIFRAM?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success"><i
                                                        class="bi bi-check-circle"></i> Salvar Alterações</button>
                                            </div>
                                        </div>
                                    </form>        
                                </div>

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <p class="small fst-italic">A seção "Configuração de Inscrições" é dedicada ao cadastro ou
                                    atualização de data de início e término das inscrições da ADESC.</p>
                                <!-- Change Password Form -->
                                <form action="<?php echo URL.'/admin/editarInfoInscricao';?>" method="post" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                    <div class="card">
                                            <div class="card-header">CONFIGURAÇÃO DE DATA E HORA</div>
                                            <div class="card-body">
                                                <div class="row g-0 mb-3 mt-3">
                                                    <label for="fullName"
                                                        class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Data de Início:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="dataInicio" type="datetime-local" class="form-control"
                                                        id="dataInicio" value="<?=$dados['info']->dt_abe_inscricao?>">
                                                    </div>
                                                </div>
                                                <div class="row g-0 mb-3 mt-3">
                                                    <label for="dataEncerramento" class="col-md-4 col-lg-3 col-form-label mt-2 mb-2">Data de Encerramento:</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="dataEncerramento" type="datetime-local" id="dataEncerramento" value="<?=$dados['info']->dt_enc_Inscricao?>" class="form-control" oninput="validarDataEncerramento()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <h4 class="alert-heading">Aviso!</h4>
                                                <p><strong>Para desativar as inscrições</strong>, a data e hora de início devem ser maiores que a data e hora de encerramento.<br>Exemplo: A data de início (01/06/2023 às 10:00) e a data de encerramento (30/05/2023 às 23:59).
                                                <hr>
                                                <p class="mb-0"><strong>Para ativar as inscrições</strong>, a data e hora de início devem ser menores que a data e hora de encerramento.<br>Exemplo: A data de início (30/05/2023 às 10:00) e a data de encerramento (01/06/2023 às 23:59).</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success botaoFim"><i
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
<script>
    // Variável global para manter o controle do número
var logoCount = 1;

document.getElementById('logoInput').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var imageType = /image.*/;

    // Verificar se o arquivo é uma imagem
    if (file && file.type.match(imageType)) {
        var img = new Image();
        img.src = URL.createObjectURL(file);

        img.onload = function() {
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');
            var maxWidth = 200;
            var maxHeight = 87;

            // Calcular as novas dimensões da imagem
            var ratio = Math.min(maxWidth / img.width, maxHeight / img.height);
            var newWidth = img.width * ratio;
            var newHeight = img.height * ratio;

            // Redimensionar a imagem usando o canvas
            canvas.width = newWidth;
            canvas.height = newHeight;
            ctx.drawImage(img, 0, 0, newWidth, newHeight);

            // Converter o canvas para o formato webp
            var dataURL = canvas.toDataURL('image/webp');

            // Gerar o novo nome da imagem no padrão "logo-XX"
            var newFilename = 'logo-' + pad(logoCount, 2) + '.webp';

            // Incrementar o contador
            logoCount++;

            // Criar um novo objeto File com a imagem convertida para webp
            var convertedFile = dataURLtoFile(dataURL, newFilename);

            // Realizar o processamento necessário com a imagem redimensionada e convertida
            console.log('Imagem selecionada: ' + convertedFile.name);
            console.log('Nova largura: ' + newWidth);
            console.log('Nova altura: ' + newHeight);
            console.log('Nova extensão: ' + convertedFile.type);
        };
    }
});

// Função auxiliar para converter um data URL em um objeto File
function dataURLtoFile(dataURL, filename) {
    var arr = dataURL.split(',');
    var mime = arr[0].match(/:(.*?);/)[1];
    var bstr = atob(arr[1]);
    var n = bstr.length;
    var u8arr = new Uint8Array(n);

    while (n--) {
        u8arr[n] = bstr.charCodeAt(n);
    }

    return new File([u8arr], filename, { type: mime });
}

// Função auxiliar para adicionar zeros à esquerda do número
function pad(number, length) {
    var str = '' + number;
    while (str.length < length) {
        str = '0' + str;
    }
    return str;
}

</script>
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
                document.getElementById('logoImg').src = img.src;
            };
        }
    });
    document.getElementById('faviconInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('faviconImg').src = img.src;
            };
        }
    });
    document.getElementById('destaqueInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('destaqueImg').src = img.src;
            };
        }
    });
    document.getElementById('acaoInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imageType = /image.*/;

        // Verificar se o arquivo é uma imagem
        if (file && file.type.match(imageType)) {
            var img = new Image();
            img.src = URL.createObjectURL(file);

            img.onload = function() {
                // Atualizar a imagem exibida com a foto selecionada
                document.getElementById('fotoAcao').src = img.src;
            };
        }
    });
/*
    function validarDataEncerramento() {
        var dataInicio = document.getElementById("dataInicio").value;
        var dataEncerramento = document.getElementById("dataEncerramento").value;
        var botaoFim = document.querySelector(".botaoFim");

        if (dataInicio > dataEncerramento) {
            botaoFim.disabled = true;
            alert("A data de encerramento deve ser maior que a data de início.");
        } else {
            botaoFim.disabled = false;
        }
    }*/
</script>
</main><!-- End #main -->

<?php include_once 'footer.php'; ?>