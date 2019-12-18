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
});