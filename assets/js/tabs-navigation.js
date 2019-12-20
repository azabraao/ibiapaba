$('.jsProdutosTab').on('click', (e) => {
  $('.jsProdutosTab').removeClass('active');
  $('.jsProdutosTabContent').removeClass('active');
  
  let target = e.currentTarget;
  $(target).addClass('active');
  
  let tab = $(target).data('related-tab');

  $(`[data-tab=${tab}]`).addClass('active');
});