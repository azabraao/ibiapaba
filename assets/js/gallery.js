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

