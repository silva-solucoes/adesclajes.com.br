<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container"><?= Sessao::mensagem('backupBD'); ?></div>
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
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Desenvolvido por <a href="https://silvasolucoestech.rf.gd/" target="_blank">Silva Soluções Tech</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo URL . '/public/vendor/apexcharts/apexcharts.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/chart.js/chart.umd.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/echarts/echarts.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/quill/quill.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/simple-datatables/simple-datatables.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/tinymce/tinymce.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/vendor/php-email-form/validate.js'; ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="<?php echo URL . '/public/css/dist/trumbowyg.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo URL . '/public/css/dist/langs/pt_br.min.js'; ?>"></script>
<script src="<?php echo URL . '/public/css/dist/plugins/emoji/trumbowyg.emoji.min.js'; ?>"></script>
<script>
    $('#editor1').trumbowyg({
        lang: 'pt_br',
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['emoji']
        ],
        autogrow: true
    });
    $('#editor2').trumbowyg({
        lang: 'pt_br',
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['emoji']
        ],
        autogrow: true
    });
    $('#conteudoNoticia').trumbowyg({
        lang: 'pt_br',
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['emoji']
        ],
        autogrow: true
    });
    $('#editarConteudoNoticia').trumbowyg({
        lang: 'pt_br',
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['emoji']
        ],
        autogrow: true
    });
</script>
<!-- Template Main JS File -->
<script src="<?php echo URL . '/public/js/mainAdm.js'; ?>"></script>

</body>

</html>