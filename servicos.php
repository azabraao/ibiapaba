<!DOCTYPE html>
<html lang="pt-br">
<?php
  include('./components/global_head.php');
?>
<body>
  
<?php 
  $page = "/servicos";
  include('./components/navbar.php');
?>
<header class="page-header servicos">
  <div class="container">
    <div class="page-header__title">
      <h1>
        Serviços
      </h1>  
    </div>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="text-centered">
      <p class="font-secondary text-bold font-medium">
        A Ibiapaba SP é referência no desenvolvimento de projetos de mangueiras contínuas e aspiraladas.
      </p>
    </div>
    <div class="boxes spaced">
      <div class="box w-medium h-unset">
        <div class="box__header">
          <img src="./assets/img/icon-mangueira.png" alt="Ícone">
        </div>
        <div class="box__body">
          <div class="content text-center">
            <p>
              Mangueiras
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <a href="/mangueiras" class="button button-primary button-small outlined">
        Saiba +
      </a>
    </div>
    <div class="row ">
      <div class="columns">
        <div class="column p-grid-1">
          <div class="flex justify-center m-bottom-grid-1">
            <img src="./assets/img/icon-tools.png" alt="ícone">
          </div>
          <div class="row small">
            <p class="font-normal text-centered font-primary">
              Rerforma de equipamentos para todas as etapas de um processo de extrusão,
              como: extrusoras, puxadores, trançadeira, túnel de aquecimento, 
              cabeçote para linha de tubo, mangueira trançada, mangueira para gás e 
              ferramentas para co-extrusão, matriz e pino.
              Também Prestamos serviços de reforma e recuperação de cilindro e rosca 
              para termoplástico, brunimento e nitretação.
            </p>
          </div>
        </div>
        <div class="column p-grid-1">
          <div class="flex justify-center m-bottom-grid-1">
            <img src="./assets/img/icon-tecnologia-2.png" alt="ícone">
          </div>
          <div class="row small">
            <p class="font-normal text-centered font-primary">
              Desenvolvemos ferramentas para área de mangueiras espiraladas 
              de sucção e vacuar.
              Fornecemos insumos para trançadeira como tensor, distribuidor, 
              porcelana (passa fio), mola, entre outros.
            </p>
          </div>
        </div>
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