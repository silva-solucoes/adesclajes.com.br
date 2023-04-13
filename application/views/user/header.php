<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADESC Lajes</title>
    <link rel="icon" type="image/png" href="<?php echo URL . 'public/images/favicon.png'; ?>">
    <link rel="stylesheet" href="<?php echo URL . 'public/css/style.css'; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');

        .navbar-text1 {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            color: #003680;
            line-height: 1.0em;
        }

        .navbar-img {
            width: 50px;
            height: auto;
        }

        .collapse button {
            margin-left: 40px;
        }

        @media (min-width: 991px) {
            .img-redu {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .img-redu {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- BOTÃO DE ROLAR A PÁGINA AO TOPO -->
    <a href="#" id="botao-topo" class="btn-topo mostrar"><i class="fas fa-chevron-up"></i></a>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class=" justify-content-center align-items-center container-fluid d-flex flex-column flex-sm-row" id="navbarNav">
                <a class="navbar-brand img-redu" href="<?php echo URL; ?>" style="margin: 0px;">
                    <img class="navbar-img" src="<?php echo URL . 'public/images/logo-01.png'; ?>" alt="Logo">
                </a>

                <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavDropdown">
                    <a class="navbar-brand" href="<?php echo URL; ?>" style="margin: 0px;">
                        <img class="navbar-img" src="<?php echo URL . 'public/images/logo-01.png'; ?>" alt="Logo">
                    </a>

                    <div class="col-sm-4" style="width: 135px; height: 30px; margin-right:1%;">
                        <p class="navbar-text1">Associação Comunitaria Cultural, Social e Desportiva de Lajes</p>
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo URL; ?>">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="noticias">Notícias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Futebol
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SUB 09</a></li>
                                <li><a class="dropdown-item" href="#">SUB 13</a></li>
                                <li><a class="dropdown-item" href="#">SUB 15</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                    </ul>
                    <button type="button" class="botaoHeader" data-bs-toggle="modal" data-bs-target="#exampleModal">Área de Inscrição</button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- MODAL DE INSCRIÇÃO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-image: url('<?php echo URL . 'public/images/fundo.jpg'; ?>'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
                    <h5 class="modal-title w-bold mb-0 fs-2" id="meuModalLabel">Área de Inscrição</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-5 bt-5">Não perca a chance de fazer parte da Escolinha Esportiva ADESC!<br>Inscreva-se
                        agora mesmo
                        preenchendo nosso formulário e garanta seu lugar na equipe de sucesso!</p>
                    <div class="row g-5">
                        <div class="col-md-7 col-lg-8">
                            <div class="bg-fundo">
                                <h4 class="mb-3">Formulário de Inscrição</h4>
                            </div>
                            <form class="needs-validation borda-form" novalidate>
                                <label for="firstName" class="form-label"><b>Dados do Atleta</b></label>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="firstName" class="form-label">Nome Completo:</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Nome é obrigatório.
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="lastName" class="form-label">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Data de Nascimento é obrigatório.
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="lastName" class="form-label">RG:</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            RG é obrigatório.
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">CPF:</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            CPF é obrigatório.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label">Nome da Escola que estuda:</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                                            <div class="invalid-feedback">
                                                Nome da Escola é obrigatório.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="country" class="form-label">Nível de Escolaridade:</label>
                                        <select class="form-select" id="country" required>
                                            <option value="">Ensino Fundamental</option>
                                            <option>Ensino Médio</option>
                                            <option>Ensino Superior</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="username" class="form-label">Série:</label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                                            <div class="invalid-feedback">
                                                Série é obrigatório.
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    <label for="firstName" class="form-label"><b>Filiação</b></label>
                                    <hr>
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Nome da Mãe:<span class="text-body-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control" id="email" placeholder="you@example.com">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Nome da Pai:</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                </div>

                                <hr class="my-4">

                                <p>Após o envio das informações acima, aguarde até que nossa equipe entre em contato.</p>

                                <button class="finalizar-form-btn" type="submit">Finalizar Inscrição</button>
                            </form>
                        </div>
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Instruções</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Preencha Todos os Campos</h6>
                                        <small class="text-body-secondary">Para garantir o sucesso de sua inscrição, é
                                            necessário preencher todos os campos do formulário ao lado.</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Validação da Inscrição</h6>
                                        <small class="text-body-secondary">Após concluir sua inscrição em nosso site,
                                            você receberá uma confirmação por e-mail ou WhatsApp, com as instruções para
                                            comparecer à sede da ADESC e validar sua inscrição.</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Copias de Documentos</h6>
                                        <small class="text-body-secondary">É necessário entregar as cópias dos
                                            documentos solicitados no formulário de inscrição. As cópias dos documentos
                                            podem ser entregues pessoalmente em nossa sede.</small>
                                    </div>
                                </li>
                            </ul>
                            <img src="<?php echo URL . 'public/images/campiao.png'; ?>" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>