<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <title>ADESC Lajes</title>
    <link rel="icon" type="image/png" href="../../public/images/favicon.png">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-x0yHE7q5YH62lV5ucdJFs9XVpKuMcIajR1RyKywGyLd7yvK+LSKpyCZBt/G9XtO2OClzrBwxjI1GyVNgN5Y5EA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/css/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
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

        .collapse button{
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
                    <a class="navbar-brand img-redu" href="#" style="margin: 0px;">
                        <img class="navbar-img" src="../../public/images/logo-01.png" alt="Logo">
                    </a>
                
                <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarTogglerDemo03">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Futebol
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">SUB 09</a>
                                <a class="dropdown-item" href="#">SUB 13</a>
                                <a class="dropdown-item" href="#">SUB 15</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-warning rounded-pill text-white">Area de inscrição</button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="modal" data-bs-target="#meuModal">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

</body>

</html>