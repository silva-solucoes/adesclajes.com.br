//Botão-topo
document.getElementById("botao-topo").addEventListener("click", function () {
    document.body.scrollTop = 0; // Para navegadores Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE e Opera
});

window.addEventListener("scroll", function () {
    var botao = document.getElementById("botao-topo");
    if (window.pageYOffset > 100) { // mostrar o botão quando a página é rolada 100 pixels para baixo
        botao.style.display = "block";
        botao.classList.add("animacao-esportiva");
    } else {
        botao.style.display = "none";
        botao.classList.remove("animacao-esportiva");
    }
});

document.getElementById("botao-topo").addEventListener("click", function () {
    document.body.scrollTop = 0; // Para navegadores Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE e Opera
});

function validarComentario(event) {
    event.preventDefault(); // Impede o envio automático do formulário

    // Obtém o valor do campo de comentário
    var comentario = document.getElementById("comentarioVisitante").value;

    // Lista de palavras proibidas
    var palavrasProibidas = ["negra bonita", "negro bonito", "cabelo exótico", "cabelo exotico", "cabelo ruim", "cabelo de pixaim", "negra suja","negro sujo", "negra metida", "negro metido", "empregadinha", "empregadinho", "coisa tá preta", "coisa ruim", "bicha", "bixa", "buceta", "vulva", "vagina", "bosta", "cagar", "defecar", "caralho", "pênis", "penis", "cacete", "pica", "rôla", "piroca", "pinto", "pipiu", "cu", "cú", "ânus", "anus", "foda-se", "fodasse", "fodace", "foder", "porra", "gala", "pora", "galado", "esperma", "espermatozoide", "sêmem", "semem", "puta", "puto", "puta que pariu", "prostituta", "rapariga", "maria chuteira", "merda", "boga", "furico", "cuzinho", "bunda", "gostosa", "gostoso", "bumdão", "tabaco","tabacão", "tabaquinha", "tabacuda", "viado", "homossexual", "traveco", "travestir", "ele é menina", "ela é menino", "fresco", "ele é fresco", "ela é fresca", "Adolf Hitler", "Hitler", "nazista", "nazismo", "maconha", "bora beber", "vamos fumar", "vamos tranzar", "vamos fazer amor", "vamos fazer bebê", "vamos fazer bebe", "vamos trepar", "vamos trepa", "vamos coisa", "trepa", "trepar", "cagão", "mijão", "mijar", "sexo", "fodidinha", "pau"];

    // Verifica se o comentário contém palavras proibidas
    for (var i = 0; i < palavrasProibidas.length; i++) {
        if (comentario.toLowerCase().includes(palavrasProibidas[i])) {
            // Desativa o atributo "action" do formulário
            document.getElementById("formularioComentario").removeAttribute("action");

            // Exibe uma mensagem informando que o comentário contém palavras proibidas
            alert("Seu comentário contém palavras ofensivas e não pode ser enviado.");

            return; // Impede o envio do formulário
        }
    }

    // Ativa o action do formulário e envia o formulário
    document.getElementById("formularioComentario").setAttribute("action", "<?= URL ?>/user/enviarComentarioNoticia/<?= $dados['noticia']->id_noticia ?>");
    document.getElementById("formularioComentario").submit();
}