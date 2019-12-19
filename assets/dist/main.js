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
});