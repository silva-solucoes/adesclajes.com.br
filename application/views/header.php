<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADESC Lajes</title>
    <link rel="icon" type="image/png" href="../../public/images/favicon.png">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

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
            <div class=" justify-content-center align-items-center container-fluid d-flex flex-column flex-sm-row"
                id="navbarNav">
                <a class="navbar-brand img-redu" href="#" style="margin: 0px;">
                    <img class="navbar-img" src="../../public/images/logo-01.png" alt="Logo">
                </a>

                <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavDropdown">
                    <a class="navbar-brand" href="#" style="margin: 0px;">
                        <img class="navbar-img" src="../../public/images/logo-01.png" alt="Logo">
                    </a>

                    <div class="col-sm-4" style="width: 135px; height: 30px; margin-right:1%;">
                        <p class="navbar-text1">Associação Comunitaria Cultural, Social e Desportiva de Lajes</p>
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                    <button type="button" class="btn btn-warning rounded-pill text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Área de Inscrição</button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- MODAL DE INSCRIÇÃO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-bold mb-0 fs-2" id="meuModalLabel">Sign up for free</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Conteúdo do modal aqui...</p>
                </div>
            </div>
        </div>
    </div>