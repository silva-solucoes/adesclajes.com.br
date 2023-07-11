(function () {
  "use strict";

  const forms = document.querySelectorAll('.php-email-form');

  forms.forEach(form => {
    form.addEventListener('submit', event => {
      event.preventDefault();

      const thisForm = form;
      const loadingElement = thisForm.querySelector('.loading');
      const errorMessageElement = thisForm.querySelector('.error-message');
      const sentMessageElement = thisForm.querySelector('.sent-message');

      loadingElement.classList.add('d-block');
      errorMessageElement.classList.remove('d-block');
      sentMessageElement.classList.remove('d-block');

      const formData = new FormData(thisForm);

      php_email_form_submit(thisForm, formData, loadingElement, errorMessageElement, sentMessageElement);
    });
  });

  function php_email_form_submit(thisForm, formData, loadingElement, errorMessageElement, sentMessageElement) {
    fetch(thisForm.action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error(`${response.status} ${response.statusText} ${response.url}`); 
      }
    })
    .then(data => {
      loadingElement.classList.remove('d-block');
      if (data.trim() === 'Mensagem enviada com sucesso') {
        sentMessageElement.classList.add('d-block');
        thisForm.reset(); 
      } else {
        throw new Error(data ? data : 'Falha no envio do formulário e nenhuma mensagem de erro foi retornada de: ' + thisForm.action); 
      }
    })
    .catch(error => {
      displayError(thisForm, error, loadingElement, errorMessageElement);
    });
  }

  function displayError(thisForm, error, loadingElement, errorMessageElement) {
    loadingElement.classList.remove('d-block');
    errorMessageElement.innerHTML = error;
    errorMessageElement.classList.add('d-block');
  }

})();