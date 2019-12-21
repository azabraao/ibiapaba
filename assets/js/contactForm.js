$('.jsContactForm').on('submit', (e)=> {
  e.preventDefault();

  console.log('alksjdaklsjd')
  $.ajax({
    method: 'post',
    url: 'assets/php-scripts/send-email.php',
    data: $('.jsContactForm').serialize(),
    beforeSend: function(data) {
      // document.querySelector('.jsContactForm').reset()
      $('.jsContactFormButtonSubmit').addClass('loading')
      $('.jsContactFormButtonSubmit').text('Enviando...')
    },
    success: function(data) {
      $('.jsContactFormButtonSubmit').removeClass('loading')
      $('.jsContactFormButtonSubmit').addClass('success')
      setTimeout(() => {
        $('.jsContactFormButtonSubmit').text('Enviado!')
      },2000)
      
      setTimeout(() => {
        $('.jsContactFormButtonSubmit').removeClass('success')
        $('.jsContactFormButtonSubmit').text('Enviar')
      },4000)
      console.log(data);
    }
  });
});