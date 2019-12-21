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
$(document).ready(() => {
  $('.jsGalleryItem').on('click', handleClick );
  
  function handleClick(e) {
    let clickedImage = e.target;
    let clickedImagePath = clickedImage.src;
    let wrap = clickedImage.closest('.jsProdutosTabContent');
    let highlitedImage = wrap.querySelector('.jsGalleryHighLight');
    let highlitedImagePath = highlitedImage.src;
    
    highlitedImage.src = clickedImagePath;
    clickedImage.parentElement.remove();
    let galleryList = wrap.querySelector('.jsGalleryList');
    let div = document.createElement('div');
    let img = document.createElement('img');
    div.classList.add('gallery__list-item');
    img.classList.add('jsGalleryItem');
    img.src = highlitedImagePath;
    $(img).on('click', handleClick);
    div.appendChild(img);
    
    galleryList.appendChild(div);    
  }
});


$(document).ready(() => {
  $('.jsHamburguer').on('click', () => {
    $('.jsLinks').toggleClass('active');
  })
});
$(document).ready(() => {
  $('.jsHomeHeaderSlide').slick({
    prevArrow: $('.jsHomeHeaderSlidePrevArrow'),
    nextArrow: $('.jsHomeHeaderSlideNextArrow'),
    dotsClass: 'header-slide__pagination-dots',
    dots: true,
    appendDots: $('.header-slide__pagination'),
    autoplay: true,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          autoplay: false,
          adaptiveHeight: true,
        }
      }
    ]
  });

  $('.jsHomeLinhaProdSlide').slick({
    prevArrow: $('.jsHomeLinhaProducaoSlideLeft'),
    nextArrow: $('.jsHomeLinhaProducaoSlideRight'),
    autoplay: true
  });
  
  $('.jsEmpresaPartnersSlide').slick({
    prevArrow: $('.jsEmpresaPartnersSlidePrev'),
    nextArrow: $('.jsEmpresaPartnersSlideNext'),
    autoplay: true,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1
        }
      }
    ]

  })
});
$('.jsProdutosTab').on('click', (e) => {
  $('.jsProdutosTab').removeClass('active');
  $('.jsProdutosTabContent').removeClass('active');
  
  let target = e.currentTarget;
  $(target).addClass('active');
  
  let tab = $(target).data('related-tab');

  window.history.pushState({page:1}, document.title, `/produtos?tab=${tab}`);

  $(`[data-tab=${tab}]`).addClass('active');
});