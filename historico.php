<!DOCTYPE html>
<html lang="en">
<?php
  include('./components/global_head.php');
?>
<body>
  
<?php 
  $page = "/historico";
  include('./components/navbar.php');
?>

<header class="page-header historico">
  <div class="container">
    <div class="page-header__title">
      <h1>
        Acompanhe nossa evolução
      </h1>  
    </div>
  </div>
</header>

<section class="section historico bg-dark">
  <div class="container">
    <div class="historico__header">
      <div class="time-line">
        <div class="time-line__year jsTab active" data-related-tab="year_1994">
          <span class="time-line__year-number">1994</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_1996">
          <span class="time-line__year-number">1996</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_1998">
          <span class="time-line__year-number">1998</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_2000">
          <span class="time-line__year-number">2000</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_2003">
          <span class="time-line__year-number">2003</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_2005">
          <span class="time-line__year-number">2005</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_2006">
          <span class="time-line__year-number">2006</span>
          <span class="time-line__ellipse"></span>
        </div>
        <div class="time-line__year jsTab" data-related-tab="year_2019">
          <span class="time-line__year-number">2019</span>
          <span class="time-line__ellipse"></span>
        </div>
      </div>
    </div>
    <div class="historico__body">
      <div class="time-line-content jsTabContent active" data-tab="year_1994">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">Início</h5>
            <p>
              Nosso 1º equipamento, trançadeira. 
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-1994.png" 
          alt="Trançaceira modelo 1994">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_1996">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">1º Atualização</h5>
            <p>
            Texto.
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-1996.png" 
          alt="Trançaceira modelo 1996">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_1998">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">2° Atualização</h5>
            <p>
              Texto
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-1998.png" 
          alt="Trançaceira modelo 1998">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_2000">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">3° Atualização</h5>
            <p>
            Texto
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-2000.png" 
          alt="Trançaceira modelo 2000">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_2003">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">4° Atualizaçãocio</h5>
            <p>
              Texto
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-2003.png" 
          alt="Trançaceira modelo 2003">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_2005">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">5° Atualização</h5>
            <p>
              Texto
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-2005.png" 
          alt="Trançaceira modelo 2005">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_2006">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">6° Atualização</h5>
            <p>
              Texto
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-2006.png" 
          alt="Trançaceira modelo 2006">
        </div>
      </div>
      <div class="time-line-content jsTabContent" data-tab="year_2019">
        <div class="time-line-content__column">
          <div class="content c-white">
            <h5 class="text-bold">Atualmente</h5>
            <p>
              A Ibiapaba é dedicada para empresas que trabalham com a 
              produção de mangueiras trançadas, mangueiras para gás, 
              mangueiras espiraladas, perfis, tubos de pvc, tubos de látex, 
              tubos de nylon etc. Aqui você encontra a verdadeira tecnologia 
              para uma produção com maior quantidade e qualidade.
            </p>
          </div>
        </div>
        <div class="time-line-content__column text-right">
          <img src="./assets/img/trancadeira-modelo-2019.png" 
          alt="Trançaceira modelo 2019">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include('./components/footer.php');
  include('./components/global_scripts.php');
?>
</body>
</html>