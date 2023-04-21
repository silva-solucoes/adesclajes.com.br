<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADESC Lajes - Unidos pelo esporte, rumo à vitória!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo URL . 'public/images/favicon.png'; ?>" rel="icon">
  <link href="<?php echo URL . 'public/images/apple-touch-icon.php'; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Arquivos CSS -->
  <link href="<?php echo URL . 'public/vendor/aos/aos.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . 'public/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">

  <!-- Arquivo Principal CSS -->
  <link href="<?php echo URL . 'public/css/style.css'; ?>" rel="stylesheet">

  <!-- =======================================================
  * Nome do site: Silva Soluções Tech
  * Atualizado: 14 Abril 2023 com Bootstrap v5.2.3
  * URL: https://silvasolucoestec.com.br
  * Autor: Silva Soluções Tech
  * Licença: https://silvasolucoestech.com.br/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index">Silva Soluções Tech</a></h1>-->
      <!-- Descomente abaixo se preferir usar um logotipo de imagem -->
      <a href="index" class="logo me-auto"><img src="<?php echo URL . 'public/images/logo-d.png'; ?>" alt=""
          class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo URL . 'index' ?>#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#noticias">Notícias</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#about">Sobre-nós</a></li>
          <li class="dropdown"><a href="#"><span>Esportes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Categorias Esportivas</span> <i
                    class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="futsal">Futsal</a></li>
                  <li><a href="hidroginastica">Hidroginástica</a></li>
                  <li><a href="natacao">Natação</a></li>
                  <li><a href="taekwondo">Taekwondo</a></li>
                  <li><a href="volei">Vôlei</a></li>
                </ul>
              </li>
              <li><a href="galeria_fotos">Galeria de Fotos</a></li>
              <li><a href="quadro_atletas">Quadro de Atletas</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="<?php echo URL . 'index' ?>#contact">Contato</a></li>
          <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Área de
              Inscrição</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Inserindo Modal PRÉ INSCRIÇÃO ======= -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"
          style="background-image: url('<?php echo URL; ?>public/images/fundo.jpg'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Área de Inscrição</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-5 bt-5 text-center">Não perca a chance de fazer parte da Escolinha Esportiva
            ADESC!<br>Inscreva-se agora
            mesmo preenchendo nosso formulário e garanta seu lugar na equipe de sucesso!</p>
          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
              <div class="about-img">
                <img src="<?php echo URL; ?>public/images/campeao.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-7">
              <h3 class="pt-0 pt-lg-5" id="tituloForm">Formulário de Inscrição</h3>

              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" id="guias" data-bs-toggle="pill" href="#tab1">Informações do Atleta</a>
                </li>
                <li><a class="nav-link" id="guias" data-bs-toggle="pill" href="#tab2">Informações de Filiação</a></li>
                <li><a class="nav-link" id="guias" data-bs-toggle="pill" href="#tab3">Informações de Responsável</a>
                </li>
              </ul><!-- End Tabs -->

              <form class="needs-validation borda-form php-inscricao-form" novalidate>
                <!-- Tab Content -->
                <div class="tab-content">
                  <!-- Informações do Atleta -->
                  <div class="tab-pane fade show active" id="tab1">

                    <p class="fst-italic">Informações Pessoais</p>

                    <div class="row">
                      <div class="form-group col-md-7">
                        <label for="name">Nome Completo:</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome do Atleta completo" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Gêrero:</label>
                        <select class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione o gênero</option>
                          <option value="1">Feminino</option>
                          <option value="2">Masculino</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">CPF:</label>
                        <input type="text" name="cpf" class="form-control" placeholder="Somente o número" id="name" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">RG:</label>
                        <input type="text" name="rg" class="form-control" placeholder="Somente o número" id="name" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">Data de Nascimento:</label>
                        <input type="date" name="dataNascimento" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Estado Civil:</label>
                        <select class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione o Estado Civil</option>
                          <option value="1">Solteiro/a</option>
                          <option value="2">Casado/a</option>
                          <option value="3">Divorciado/a</option>
                          <option value="4">Viúvo/a</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">Número do NIS:</label>
                        <input type="text" name="nis" class="form-control" placeholder="Somente o número" id="name" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="name">Anexo do Registro:</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-7">
                        <label for="name">Nome da Escola:</label>
                        <input type="text" name="nomeEscola" class="form-control" placeholder="Nome completo da Escola" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Nível de Ensino:</label>
                        <select class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione o nível</option>
                          <option value="1">Ensino Fundamental I</option>
                          <option value="2">Ensino Fundamental II</option>
                          <option value="3">Ensino Médio</option>
                          <option value="4">Ensino Superior</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Série:</label>
                        <input type="text" name="serie" class="form-control" placeholder="Informe a série" id="name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Turno:</label>
                        <input type="text" name="turno" class="form-control" placeholder="Informe o turno" id="name" required>
                      </div>
                      <div class="form-group col-md-7">
                        <label for="name">Categoria Esportiva que deseja atuar:</label>
                        <select class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione uma categoria</option>
                          <option value="1">Futsal</option>
                          <option value="2">Hidroginástica</option>
                          <option value="3">Natação</option>
                          <option value="4">Taekwondo</option>
                          <option value="5">Vôlei</option>
                        </select>
                      </div>

                    </div>

                  </div><!-- End Tab 1 Content -->

                  <div class="tab-pane fade show" id="tab2">

                    <p class="fst-italic">Informações do Pai</p>

                    <div class="row">
                      <div class="form-group col-md-7">
                        <label for="name">Nome Completo do Pai:</label>
                        <input type="text" name="namePai" class="form-control" placeholder="Nome completo do Pai" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Telefone do Pai:</label>
                        <input type="text" name="telefonePai" class="form-control" placeholder="Somente o número" id="name" required>
                      </div>

                      <p class="fst-italic mt-4">Informações do Mãe</p>

                      <div class="form-group col-md-7">
                        <label for="name">Nome Completo do Mãe:</label>
                        <input type="text" name="nameMae" class="form-control" placeholder="Nome completo da Mãe" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Telefone do Mãe:</label>
                        <input type="text" name="telefoneMae" class="form-control" placeholder="Somente o número" id="name" required>
                      </div>
                    </div>

                  </div><!-- End Tab 2 Content -->

                  <div class="tab-pane fade show" id="tab3">

                    <p class="fst-italic">Informações do Responsável</p>

                    <div class="row">
                      <div class="form-group col-md-7">
                        <label for="name">Nome Completo do Responsável:</label>
                        <input type="text" name="nameResponsavel" class="form-control" placeholder="Nome completo do Responsável" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Grau de Parentestco:</label>
                        <select class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione um grau</option>
                          <option value="1">Pai/Mãe</option>
                          <option value="2">Tio/Tia</option>
                          <option value="3">Avô/Avó</option>
                          <option value="4">Irmão/Irmã</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">CPF:</label>
                        <input type="text" name="CPFResponsavel" placeholder="Somente o número" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">RG:</label>
                        <input type="text" name="rgResponsavel" placeholder="Somente o número" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">Telefone:</label>
                        <input type="text" name="telefoneResponsavel" placeholder="Somente o número" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-7">
                        <label for="name">Logradouro:</label>
                        <input type="text" name="logradouro" class="form-control" placeholder="Informe o nome da rua" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Nº da casa:</label>
                        <input type="text" name="nCasa" class="form-control" placeholder="Nº" id="name" required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Bairro:</label>
                        <input type="text" name="bairro" class="form-control" placeholder="Informe o bairro" id="name" required>
                      </div>
                    </div>

                  </div><!-- End Tab 3 Content -->

                </div>


            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button id="botao-inscricao" type="submit" class="">Finalizar Inscrição</button>
          </form>
          <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Inserindo Modal POLÍTICA DE PRIVACIDADE ======= -->
  <!-- Modal -->
  <div class="modal fade" id="privacidade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="bi bi-shield-lock"></i> Política de
            Privacidade da Escolinha ADESC Lajes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- ======= Seção de Política de Privacidade ======= -->
          <section id="secao-privada" class="inner-page">
            <div class="container" data-aos="fade-up">
              <div class="section-header text-center">
                <p>Proteger sua privacidade é nossa prioridade. Conheça nossa política de privacidade e saiba como seus
                  dados são utilizados e protegidos. Leia agora e fique por dentro de seus direitos!</p>
              </div>

              <p class="text-justify">
                A Escolinha ADESC valoriza a privacidade dos usuários do site institucional e se compromete em proteger
                todas as informações pessoais fornecidas durante a inscrição e outras atividades relacionadas.
              </p>

              <h5>Coleta de dados</h5>
              <p class="text-justify">
                Durante o processo de inscrição, a Escolinha ADESC coleta informações pessoais dos novos atletas, tais
                como
                nome completo, data de nascimento, endereço de e-mail, endereço residencial, número de telefone e
                informações médicas relevantes. Estes dados são usados apenas para fins de cadastro e para garantir que
                os
                atletas estejam aptos para participar das atividades esportivas oferecidas pela escolinha.
              </p>

              <h5>Uso de informações</h5>
              <p class="text-justify">
                A Escolinha ADESC utiliza as informações coletadas apenas para fins internos, como para gerenciar a
                inscrição
                dos atletas, oferecer serviços personalizados e melhorar a qualidade das atividades esportivas
                oferecidas. Os
                dados pessoais fornecidos pelos atletas não serão divulgados a terceiros sem o consentimento prévio.
              </p>

              <h5>Exibição de imagens</h5>
              <p class="text-justify">
                A Escolinha ADESC pode exibir imagens dos atletas em seu site institucional e em suas redes sociais,
                desde
                que os pais ou responsáveis pelos atletas tenham concedido a devida autorização. Caso a autorização não
                seja
                fornecida, as imagens não serão exibidas.
              </p>

              <h5>Segurança de dados</h5>
              <p class="text-justify">
                A Escolinha ADESC adota medidas de segurança para garantir a proteção dos dados pessoais dos atletas,
                incluindo medidas físicas, eletrônicas e administrativas para prevenir o acesso não autorizado ou
                ilegal, uso
                indevido, perda ou alteração dos dados coletados.
              </p>

              <h5>Direitos do usuário</h5>
              <p class="text-justify">
                Os usuários têm o direito de solicitar acesso aos seus dados pessoais, bem como a correção ou exclusão
                de
                informações imprecisas ou incompletas. Além disso, os usuários têm o direito de se opor ao uso de seus
                dados
                pessoais para fins de marketing direto.
              </p>

              <h5>Alterações na política de privacidade</h5>
              <p class="text-justify">
                A Escolinha ADESC pode atualizar esta política de privacidade periodicamente, e os usuários serão
                notificados
                sobre quaisquer alterações relevantes. É recomendável que os usuários revisem regularmente esta política
                de
                privacidade para estar sempre cientes das informações coletadas e do uso das mesmas pela escolinha.
              </p>

              <h5>Contato</h5>
              <p class="text-justify">
                Em caso de dúvidas ou sugestões relacionadas à política de privacidade, entre em contato com a equipe da
                Escolinha ADESC pelo formulário de contato disponível em nosso site institucional.
              </p>

            </div>
          </section><!-- End Seção de Política de Privacidade -->
        </div>
        <div class="modal-footer">
          <button id="botao-privacidade" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceito</button>
        </div>
      </div>
    </div>
  </div>