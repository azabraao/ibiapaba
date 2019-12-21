$('.jsProdutosTab').on('click', (e) => {
  $('.jsProdutosTab').removeClass('active');
  $('.jsProdutosTabContent').removeClass('active');
  
  let target = e.currentTarget;
  $(target).addClass('active');
  
  let tab = $(target).data('related-tab');

  window.history.pushState({page:1}, document.title, `/produtos?tab=${tab}`);

  $(`[data-tab=${tab}]`).addClass('active');
});