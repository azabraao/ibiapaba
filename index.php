<!DOCTYPE html>
<html lang="pt-br">

<?php
  include('./components/global_head.php');
?>

<body>

<?php 
  $page = "/";
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

<section class="section bg-light">
  <div class="container">
    <div class="section__header">
      <div class="section__title">
        <h2>Sobre a Ibiapaba</h2>
      </div>
      <div class="section__subtitle">
        <p>Conheça nossa história</p>
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
</section>

<section class="section linha-producao no-padding-bottom">
  <div class="container">
    <div class="section__header">
      <div class="section__title">Linha de produção</div>
      <div class="section__subtitle">Veja nossos produtos</div>
    </div>
    <div class="section__body">
      <div class="linha-producao-slide">
        <div class="linha-producao-slide__items jsHomeLinhaProdSlide">
          <div class="linha-producao-slide__item">
            <div class="linha-producao-slide__item-image">
              <div class="linha-producao-slide__controls">
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideLeft">
                  <img 
                  src="./assets/img/icon-black-arrow-left.png" 
                  alt="icone"/>
                </span>
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideRight">
                  <img 
                  src="./assets/img/icon-black-arrow-right.png" 
                  alt="icone"/>
                </span>
              </div>
              <img src="./assets/img/extrusora-750x525.png" alt="Extrusora" />
            </div>
            <div class="linha-producao-slide__item-content">
              <h3>Extrusora</h3>
              <p>
                Equipamento utilizado para a fabricação 
                de peças de plásticos ou outros materiais 
                através de um processo de extrusão.
              </p>
              <a href="/produtos?tab=extrusora#produtos" class="button button-small button-dark outlined">
                Saiba +
              </a>
            </div>
          </div>
          <div class="linha-producao-slide__item">
            <div class="linha-producao-slide__item-image">
              <div class="linha-producao-slide__controls">
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideLeft">
                  <img 
                  src="./assets/img/icon-white-arrow-left.png" 
                  alt="icone"/>
                </span>
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideRight">
                  <img 
                  src="./assets/img/icon-white-arrow-right.png" 
                  alt="icone"/>
                </span>
              </div>
              <img src="./assets/img/trancadeira-750x525.png" alt="Extrusora" />
            </div>
            <div class="linha-producao-slide__item-content dark">
              <h3>Trançadeira</h3>
              <p>
                Máquina com a capacidade de desenvolver 
                tranças sobrepostas em mangueiras de 
                polímeros ou elastômeros.
              </p>
              <a href="/produtos?tab=trancadeira#produtos" 
              class="button button-small button-primary outlined">
                Saiba +
              </a>
            </div>
          </div>
          <div class="linha-producao-slide__item">
            <div class="linha-producao-slide__item-image">
              <div class="linha-producao-slide__controls">
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideLeft">
                  <img 
                  src="./assets/img/icon-white-arrow-left.png" 
                  alt="icone"/>
                </span>
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideRight">
                  <img 
                  src="./assets/img/icon-white-arrow-right.png" 
                  alt="icone"/>
                </span>
              </div>
              <img src="./assets/img/ferramental-312x336.png" alt="Extrusora" />
            </div>
            <div class="linha-producao-slide__item-content">
              <h3>Ferramental</h3>
              <p>
                Cabeçote, pino, matriz, túnel de aquecimneto e outras ferramentas para extrusão.
              </p>
              <a href="/produtos?tab=ferramental#produtos" 
              class="button button-small button-dark outlined">
                Saiba +
              </a>
            </div>
          </div>
          <div class="linha-producao-slide__item">
            <div class="linha-producao-slide__item-image">
              <div class="linha-producao-slide__controls">
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideLeft">
                  <img 
                  src="./assets/img/icon-black-arrow-left.png" 
                  alt="icone"/>
                </span>
                <span class="linha-producao-slide__control jsHomeLinhaProducaoSlideRight">
                  <img 
                  src="./assets/img/icon-black-arrow-right.png" 
                  alt="icone"/>
                </span>
              </div>
              <img src="./assets/img/puxador-750x525.png" alt="Extrusora" />
            </div>
            <div class="linha-producao-slide__item-content">
              <h3>Puxador</h3>
              <p>
                Puxador tipo caterpillar dois braços,
                com correias transportadoras (com guia 
                central em canal tipo B) para 
                mangueiras ou perfis.
              </p>
              <a href="/produtos?tab=puxador#produtos" 
              class="button button-small button-dark outlined">
                Saiba +
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section localizacao no-padding-bottom">
  <div class="container">
    <div class="section__header">
      <div class="section__title">
        <h2>Localização</h2>
      </div>
      <div class="section__subtitle">
        <p>
          Veja nossa unidade
        </p>
      </div>
    </div>
  </div>
  <div class="section__body">
    <iframe class="localizacao__map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.142143142862!2d-46.4098828!3d-23.4553367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce625cba9bfe27%3A0xc08afb8feb6aa4de!2sR.%20Lago%20de%20Pedra%2C%201023%20-%20Parque%20Sao%20Miguel%2C%20Guarulhos%20-%20SP%2C%2007260-200!5e0!3m2!1spt-BR!2sbr!4v1576784718823!5m2!1spt-BR!2sbr" 
    allowfullscreen=""></iframe>
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