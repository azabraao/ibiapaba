<!DOCTYPE html>
<html lang="pt-br">

<?php
  include('./components/global_head.php');
?>

<body>

<?php 
  include('./components/navbar.php');
?>

<header class="header">
  <div class="container">
    <div class="header-slide">
      <div class="header-slide__controls">
        <div class="header-slide__control left jsHomeHeaderSlidePrevArrow">
          <img src="./assets/img/icon-white-arrow-left.png" alt="ícone de seta pra esquerda">
        </div>
        <div class="header-slide__control right jsHomeHeaderSlideNextArrow">
          <img src="./assets/img/icon-white-arrow-right.png" alt="icone de seta pra direita">
        </div>
      </div>
      <div class="header-slide__items jsHomeHeaderSlide">
        <div class="header-slide__item">
          <div class="header-slide__item-content">
            <h2>
              Extrusora
            </h2>
            <p>
              Desenvolvemos extrusora para qualquer tipo de 
              polímero ou elastômero, tanto para perfil 
              como para tubos e mangueiras. 
            </p>
            <a href="/produtos?tab=extrusora" 
            class="button button-small button-primary outlined">
              Saiba +
            </a>
          </div>
          <div class="header-slide__item-image">
            <img src="./assets/img/extrusora-312x336.png" alt="Extrusora">
          </div>
        </div>
        <div class="header-slide__item inverted">
          <div class="header-slide__item-content to-right">
            <h2>
              Reforma
            </h2>
            <p>
              Rerforma de equipamentos para todas as 
              etapas de um processo de extrusão.
            </p>
            <a href="" 
            class="button button-small button-primary">
              Saiba +
            </a>
          </div>
        </div>
        <div class="header-slide__item">
          <div class="header-slide__item-content">
            <h2>
              Trançadeira 
            </h2>
            <p>
              Máquina com a capacidade de desenvolver tranças 
              sobrepostas em mangueiras de polímeros ou elastômeros.
            </p>
            <a href="/produtos?tab=tracadeira" 
            class="button button-small button-primary outlined">
              Saiba +
            </a>
          </div>
        </div>
        <div class="header-slide__item">
          <div class="header-slide__item-content">
            <h2>
              Cabeçote 
            </h2>
            <a href="" 
            class="button button-small button-primary outlined">
              Saiba +
            </a>
          </div>
          <div class="header-slide__item-image">
            <img src="./assets/img/cabecote-491x353.png" alt="Cabeçote">
          </div>          
        </div>
        <div class="header-slide__item inverted">
          <div class="header-slide__item-content to-right">
            <h2>
              Mangueiras
            </h2>
            <a href="" 
            class="button button-small button-primary">
              Saiba +
            </a>
          </div>
        </div>        
      </div>
      <div class="header-slide__pagination">
      </div>
    </div>
  </div>
</header>

<div class="section bg-light">
  <div class="container">
    <div class="section__header">
      <div class="section__title">
        <h2>Sobre a Ibiapaba</h2>
      </div>
      <div class="section__subtitle">
        <p>Conheça nossa história.</p>
      </div>
    </div>
    <div class="section__body">
      <div class="boxes flex space-between">
        <div class="box">
          <div class="box__header">
            <img src="./assets/img/icon-tecnologia.png" alt="icone tecnologia">
          </div>
          <div class="box__body">
            <div class="content text-center">
              <p>
                Desenvolvendo equipamentos
                de alta tecnologia.
              </p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box__header">
            <img src="./assets/img/icon-valorizando.png" alt="icone">
          </div>
          <div class="box__body">
            <div class="content text-center">
              <p>
                Há 20 anos trabalhando para
                satisfazer empresas de
                grande, médio e pequeno porte.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section__footer centered">
      <a href="/empresa" class="button button-medium button-primary outlined">
        Saiba +
      </a>
    </div>
  </div>
</div>

<?php
  include('./components/global_scripts.php');
?>
</body>
</html>