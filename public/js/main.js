/**
* Nome do Projeto: ADESC Lajes
* Atualizado em: 17 ABR 2023 com o Bootstrap v5.2.3
* URL do Template: https://silvasolucoestech.rf.gd/
* Autor: Silva Soluções Tech
* Licença: https://silvasolucoestech.rf.gd/license/
*/
(function() {
  "use strict";

  /**
   * Fácil função auxiliar seletora
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Função fácil de ouvinte de eventos
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Fácil ouvinte de eventos de rolagem
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Estado ativo dos links da barra de navegação ao rolar a página
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Rolar para um elemento com deslocamento de cabeçalho
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Alternar a classe .header-scrolled para #header quando a página é rolada
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Botão de voltar ao topo
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Alternância do menu de navegação para dispositivos móveis
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Ativar menus suspensos em dispositivos móveis.
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Rolagem com deslocamento em links com um nome de classe .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Rolar com deslocamento na carga da página com links hash na URL
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Carregando
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Iniciar o glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Habilidade de animação
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Isótopo e filtro de portfólio
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Iniciar lightbox de portfólio
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Controle deslizante de detalhes do portfólio
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animação na rolagem
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

})()

  // POP-UP
  const button = document.getElementById('botao-inscricao')
const popup = document.querySelector(".popup-wrapper")

/*
button.addEventListener('click', () =>{
	popup.style.display = 'block'
})
*/
popup.addEventListener('click', event =>{
	const classNameOfClickElement = event.target.classList[0]
	const classNames = ['popup-close', 'popup-link', 'popup-wrapper']
	const shouldClosePopup = classNames.some(classNames => classNames === classNameOfClickElement)

	if(shouldClosePopup){
		popup.style.display = 'none'
		console.log(classNameOfClickElement)
    // Obtenha uma referência para o formulário
    var form = document.getElementById('myForm');

    // Limpe todos os campos do formulário
    form.reset();
	}
})

$(document).ready(function() {
  $('#myForm').submit(function(e) {
    e.preventDefault(); // Impede o envio do formulário padrão

    // Obter os dados do formulário
    var formData = $(this).serialize();

    // Enviar a solicitação AJAX
    $.ajax({
      type: 'POST',
      url: 'http://localhost/adesclajes/User/enviarInscricao', // O arquivo PHP que processará o formulário
      data: formData,
      success: function(response) {
        $('#result').html(response); // Atualizar a div com a resposta do PHP
        popup.style.display = 'block'
      }
    });
  });
});

/**
   * Edição de Pontuação nos campos CPF, RG e Telefone
   */
  //edição de cpf
  function formatCPF(cpf) {
    cpf = cpf.replace(/\D/g, ""); // remove todos os caracteres não numéricos

    // insere os pontos e o traço na formatação padrão do CPF
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    return cpf;
  }

  const cpfAtleta = document.getElementById("cpfAtle");
  const cpfResponsavel = document.getElementById("cpfRes");
  
  cpfAtleta.addEventListener("input", function() {
    this.value = formatCPF(this.value);
  });

  cpfResponsavel.addEventListener("input", function() {
    this.value = formatCPF(this.value);
  });

  //edição de altura
  
  function formatAltura() {
    let alturaInput = document.getElementById("alturaInput");
    let altura = alturaInput.value.replace(/\D/g, ""); // remove todos os caracteres não numéricos
  
    // insere os pontos e o traço na formatação padrão do altura
    altura = altura.replace(/(\d{1})(\d)/, "$1.$2");
  
    alturaInput.value = altura; 
  }

  

  //edição de telefone

  function formatPhone(phoneInput) {
    let phone = phoneInput.value.replace(/\D/g, ""); // remove todos os caracteres não numéricos
  
    // insere os parênteses, o traço e o nono dígito no número de telefone
    if (phone.length === 11) {
      phone = phone.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
    } else {
      phone = phone.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
    }
  
    phoneInput.value = phone; // atualiza o valor do campo com o número de telefone formatado
  }
