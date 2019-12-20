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