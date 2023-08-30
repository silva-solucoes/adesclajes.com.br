<?php

class Sessao{

    public static function mensagem($nome, $texto = null, $classe = null) {
        if (!empty($nome)) {
            if (!empty($texto) && empty($_SESSION[$nome])) {
                if (!empty($_SESSION[$nome])) {
                    unset($_SESSION[$nome]);
                }
    
                $_SESSION[$nome] = $texto;
                $_SESSION[$nome.'classe'] = $classe;
            } elseif (!empty($_SESSION[$nome]) && empty($texto)) {
                $classe = !empty($_SESSION[$nome.'classe']) ? $_SESSION[$nome.'classe'] : 'alert alert-success';
                echo '<div class="'.$classe.'" id="'.$nome.'">'.$_SESSION[$nome].'</div>';
    
                unset($_SESSION[$nome]);
                unset($_SESSION[$nome.'classe']);
    
                // Código JavaScript para ocultar a mensagem suavemente após 5 segundos
                echo '<script>
                    setTimeout(function() {
                        var mensagem = document.getElementById("'.$nome.'");
                        if (mensagem) {
                            mensagem.style.opacity = "0";
                            setTimeout(function() {
                                mensagem.style.display = "none";
                            }, 500);
                        }
                    }, 5000);
                </script>';
            }
        }
    }
    
    

    public static function logado(){
        if(isset($_SESSION['id_user'])):
            return true;
        else:
            return false;
        endif;
    }

}