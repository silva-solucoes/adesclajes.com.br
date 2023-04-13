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