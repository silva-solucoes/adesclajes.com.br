<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><a href="<?=URL?>" class="logo me-auto"><img src="<?php echo URL . '/public/images/'.$dados['info']->logoHeaderFooter; ?>"
                                alt="" class="img-fluid" width="50%"></a></h3>
                    <p>
                        <?=$dados['info']->logradouro?>, <?=$dados['info']->numero?>. <?=$dados['info']->bairro?>,<br>
                        <?=$dados['info']->cidade?>/<?=$dados['info']->uf?>, CEP: <?=$dados['info']->cep?><br>
                        Brasil <br><br>
                        <strong>Telefone:</strong> <?=$dados['info']->telefone?><br>
                        <strong>E-mail:</strong> <?=$dados['info']->email?><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?><?=$dados['info']->tl_link1?>">Início</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?><?=$dados['info']->tl_link3?>">Sobre-nós</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?><?=$dados['info']->tl_link9?>">Notícias</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#privacidade">Política de privacidade</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Últimas Notícias</h4>
                    <ul>
                        <?php foreach($dados['ultimasNoticias'] as $listar): ?>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo URL . '/paginas/detalheNoticias/'.$listar->id_noticia; ?>"><?=$listar->tl_noticia?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nossas Redes Sociais</h4>
                    <p>Siga-nos nas redes sociais e fique por dentro de todas as novidades!</p>
                    <div class="social-links mt-3">
                        <?php foreach($dados['redesSociais'] as $listar):?>
                        <a href="<?=$listar->link_acesso?>" target="_blank" class="twitter"><?=$listar->iconeRede?></i></a>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container footer-bottom clearfix">
        <div class="copyright">
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <strong><span>ADESC Lajes</span></strong>.
            Todos os Direitos Reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Desenvolvido por <a href="https://silvasolucoestech.rf.gd/" target="_blank">Silva Soluções Tech</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo URL . '/public/vendor/aos/aos.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/isotope-layout/isotope.pkgd.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/waypoints/noframework.waypoints.js'; ?>"></script>
<script src="<?php echo URL . '/public/js/php-email-form/validate.js'; ?>"></script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>


<!-- Template Main JS File -->
<script src="<?php echo URL . '/public/js/main.js'; ?>"></script>

</body>

</html>