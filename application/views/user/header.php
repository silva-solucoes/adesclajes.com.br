<?php
setlocale(LC_TIME, 'portuguese');
$dataAtual = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADESC Lajes - Unidos pelo esporte, rumo à vitória!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo URL . '/public/images/favicon.webp'; ?>" rel="icon">
  <link href="<?php echo URL . '/public/images/apple-touch-icon.webp'; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Arquivos CSS -->
  <link href="<?php echo URL . '/public/vendor/aos/aos.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
  <link href="<?php echo URL . '/public/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <!-- Arquivo Principal CSS -->
  <link href="<?php echo URL . '/public/css/style.css'; ?>" rel="stylesheet">

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
      <a href="<?php echo URL; ?>" class="logo me-auto"><img src="<?php echo URL . '/public/images/' . $dados['info']->logoHeaderFooter; ?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= URL ?><?= $dados['info']->tl_link1 ?>">Início</a></li>
          <li><a class="nav-link scrollto" href="<?= URL ?><?= $dados['info']->tl_link2 ?>">Notícias</a></li>
          <li><a class="nav-link scrollto" href="<?= URL ?><?= $dados['info']->tl_link3 ?>">Sobre-nós</a></li>
          <li class="dropdown"><a href="#"><span>Esportes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= URL ?><?= $dados['info']->tl_link4 ?>">BID</a></li>
              <li class="dropdown"><a href="#"><span>Categorias Esportivas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= URL ?><?= $dados['info']->tl_link5 ?>/1">Futebol</a></li>
                  <li><a href="<?= URL ?><?= $dados['info']->tl_link5 ?>/2">Futsal</a></li>
                  <li><a href="<?= URL ?><?= $dados['info']->tl_link5 ?>/3">Fut7</a></li>
                </ul>
              </li>
              <li><a href="<?= URL ?><?= $dados['info']->tl_link6 ?>">Galeria de Fotos</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= URL ?><?= $dados['info']->tl_link7 ?>">Diretoria</a></li>
          <li><a class="nav-link scrollto" href="<?= URL ?><?= $dados['info']->tl_link8 ?>">Contato</a></li>
          <?php if ($dataAtual >= $dados['info']->dt_abe_inscricao && $dataAtual <= $dados['info']->dt_enc_Inscricao) : ?>
            <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Área de
                Inscrição</a></li>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Inserindo Modal PRÉ INSCRIÇÃO ======= -->
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-image: url('<?php echo URL; ?>/public/images/fundo.jpg'); background-size: cover; width: 100% relative; height: 100px; color: #D98E04;">
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
                <img src="<?php echo URL; ?>/public/images/campeao.webp" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-7">
              <h3 class="pt-0 pt-lg-5" id="tituloForm">Formulário de Pré-Inscrição</h3>

              <form id="myForm" method="POST" class="needs-validation borda-form php-inscricao-form" novalidate>
                <!-- Tab Content -->
                <div class="tab-content">
                  <!-- Informações do Atleta -->
                  <div class="tab-pane fade show active" id="tab1">

                    <p class="fst-italic">Informações Pessoais</p>

                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="name">Nome Completo:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do Atleta completo" id="name" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="name">Data de Nascimento:</label>
                        <input type="date" name="dataNascimento" class="form-control" id="dataNascimento" required>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="name">Gêrero:</label>
                        <select name="sexo" class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione</option>
                          <option value="1">Feminino</option>
                          <option value="2">Masculino</option>
                        </select>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="name">Nível de Ensino:</label>
                        <select name="nivel_ensino" class="form-select" aria-label="Default select example" required>
                          <option selected>Selecione o nível</option>
                          <option value="1">Ensino Fundamental I</option>
                          <option value="2">Ensino Fundamental II</option>
                          <option value="3">Ensino Médio</option>
                          <option value="4">Ensino Superior</option>
                        </select>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="name">Nome da Escola:</label>
                        <input type="text" name="nomeEscola" class="form-control" placeholder="Nome completo da Escola" id="nomeEscola" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Nome da sua Mãe:</label>
                        <input type="text" name="nomeMae" class="form-control" placeholder="Nome da sua Mãe" id="nomeMae" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Nome da seu Pai:</label>
                        <input type="text" name="nomePai" class="form-control" placeholder="Nome do seu pai" id="nomePai" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Telefone do Responsável:</label>
                        <input type="tel" name="telRespon" class="form-control" maxlength="11" placeholder="(00)00000-0000" id="phone" oninput="formatPhone(this)" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="categoria_esportiva">Categoria Esportiva:</label>
                        <select name="categoria_esportiva" class="form-select" aria-label="Default select example" required onchange="mostrarPosicoes(this.value)">
                          <option selected disabled>Selecione uma categoria</option>
                          <option value="1">Futebol</option>
                          <option value="2">Futsal</option>
                          <option value="3">Fut7</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="posicao">Posição:</label>
                        <select name="posicao" class="form-select" id="posicao" aria-label="Default select example" required>
                          <option selected disabled>Selecione</option>
                        </select>
                      </div>

                      <script>
                        function mostrarPosicoes(categoria) {
                          const posicoes = document.getElementById("posicao");
                          posicoes.innerHTML = ""; // Limpa as opções existentes

                          if (categoria === "1") { // Futebol
                            posicoes.innerHTML += `
                              <option selected disabled>Selecione</option>
                              <option value="Goleiro">Goleiro</option>
                              <option value="Zagueiro">Zagueiro</option>
                              <option value="Lateral">Lateral</option>
                              <option value="Volante">Volante</option>
                              <option value="Meia">Meia</option>
                              <option value="Ponta">Ponta</option>
                              <option value="Atacante">Atacante</option>
                            `;
                          } else if (categoria === "2") { // Futsal
                            posicoes.innerHTML += `
                              <option selected disabled>Selecione</option>
                              <option value="Goleiro">Goleiro</option>
                              <option value="Fixo">Fixo</option>
                              <option value="Ala Esquerda">Ala Esquerda</option>
                              <option value="Ala Direita">Ala Direita</option>
                              <option value="Pivô">Pivô</option>
                            `;
                          } else if (categoria === "3") { // Fut7
                            posicoes.innerHTML += `
                              <option selected disabled>Selecione</option>
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
                      </script>
                      <div class="form-group col-md-6">
                        <label for="name">Altura:</label>
                        <input type="text" name="altura" class="form-control" maxlength="4" placeholder="Ex:1,60" id="alturaInput" oninput="formatAltura()" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="name">Digite uma frase motivacional:</label>
                        <textarea class="form-control" name="message" rows="5" required></textarea>
                      </div>
                    </div>

                  </div><!-- End Tab 1 Content -->

                </div>

            </div>

          </div>
        </div>
        <!-- POP-UP -->
        <div class="popup-wrapper">
          <div class="popup">
            <div class="popup-close bi bi-x"></div>
            <div clas="popup-content">
              <h2>Pré-inscrição solicitada com Sucesso</h2>
              <p>
              <div id="result"></div>
              </p>
              <a class="popup-link" href="#">Estou ciente</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="botao-inscricao" name="CadUsuario" type="submit" value="cadastrar" class="">Finalizar Inscrição</button>
          </form>
          <button id="botao-cancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Inserindo Modal POLÍTICA DE PRIVACIDADE ======= -->
  <!-- Modal -->
  <div class="modal fade" id="privacidade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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