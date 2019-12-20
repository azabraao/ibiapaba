<!DOCTYPE html>
<html lang="en">
<?php
  include('./components/global_head.php');
?>
<body>
  
<?php 
  include('./components/navbar.php');
?>

<header class="page-header linha-produtos">
  <div class="container">
    <div class="page-header__title">
      <h1>
        Linha de produtos
      </h1>  
    </div>
  </div>
</header>

<section class="tabs section">
  <div class="container">
    <div class="tabs__header">
      <div class="tabs__item jsProdutosTab active" data-related-tab="extrusora">
        <span>
          Extrusora
        </span>
      </div>
      <div class="tabs__item jsProdutosTab" data-related-tab="trancadeira">
        <span>
          Trançadeira
        </span>
      </div>
      <div class="tabs__item jsProdutosTab" data-related-tab="puxador">
        <span>
          Puxador
        </span>
      </div>
      <div class="tabs__item jsProdutosTab" data-related-tab="ferramental">
        <span>
          Ferramental
        </span>
      </div>
    </div>
    <div class="tabs__body">
      <div class="tab__content jsProdutosTabContent active" data-tab="extrusora">
        <div class="gallery">
          <div class="gallery__highlight">
            <img src="./assets/img/extrusora-825x750.png" class="jsGalleryHighLight"/>
          </div>
          <div class="gallery__list jsGalleryList">
            <div class="gallery__list-item">
              <img class="jsGalleryItem" src="./assets/img/extrusora-375x225-view-2.png"/>
            </div>
            <div class="gallery__list-item">
              <img class="jsGalleryItem" src="./assets/img/extrusora-375x225-view-3.png"/>
            </div>
            <div class="gallery__list-item">
              <img class="jsGalleryItem" src="./assets/img/extrusora-375x225-view-4.png"/>
            </div>
          </div>
        </div>
      </div>
      <div class="tab__content jsProdutosTabContent" data-tab="trancadeira">
        trancadeira
      </div>
      <div class="tab__content jsProdutosTabContent" data-tab="puxador">
        puxador
      </div>
      <div class="tab__content jsProdutosTabContent" data-tab="ferramental">
        ferramental
      </div>
    </div>
  </div>
</section>

<?php
  include('./components/footer.php');
?>
<?php
  include('./components/global_scripts.php');
?>
</body>
</html>