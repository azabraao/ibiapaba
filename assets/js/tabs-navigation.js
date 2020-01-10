$('.jsProdutosTab').on('click', (e) => {
  let target = e.currentTarget;
  let tab = $(target).data('related-tab');
  let pageHeader = document.querySelector('.jsLinhaProdutosHeader');
  pageHeader.style['background-image'] = "url(assets/img/linha-de-produtos-"+tab+".png)";
  window.history.pushState({page:1}, document.title, `/produtos?tab=${tab}`);
});

$('.jsTab').on('click', (e) => {
  $('.jsTab').removeClass('active');
  $('.jsTabContent').removeClass('active');
  
  let target = e.currentTarget;
  $(target).addClass('active');
  
  let tab = $(target).data('related-tab');

  $(`[data-tab=${tab}]`).addClass('active');
});