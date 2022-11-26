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
        A Ibiapaba é referência no desenvolvimento de projetos de mangueiras contínuas e espiraladas.
      </p>
    </div>
    <div class="boxes spaced">
      <a href="/mangueiras" class="box w-medium h-unset on-hover-blue">
        <div class="box__header ">
          <svg width="150" height="150" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <path d="M97.5 13.6499H87.5C87.1118 13.6487 86.7297 13.739 86.3831 13.9124L76.9104 18.6499H47.5C47.4451 18.6499 47.3999 18.6768 47.345 18.6817C47.1216 18.6951 46.9019 18.739 46.6895 18.8123C46.6052 18.8367 46.5222 18.866 46.4404 18.8989C46.1792 19.0161 45.9412 19.1773 45.7349 19.3738L24.4995 40.6067C24.0295 41.0755 23.7659 41.7127 23.7659 42.3767C23.7659 43.0408 24.0295 43.678 24.4995 44.1467L31.5747 51.1963C32.5513 52.1692 34.1296 52.1692 35.105 51.1963L45 41.3269V78.6499H42.5C41.1194 78.6499 40 79.7681 40 81.1499V91.1499C40 92.5305 41.1194 93.6499 42.5 93.6499H45V123.65C45 126.411 42.7612 128.65 40 128.65H2.5C1.11938 128.65 0 129.768 0 131.15V146.15C0 147.531 1.11938 148.65 2.5 148.65H47.5C57.1606 148.639 64.989 140.809 65 131.15V93.6499H67.5C68.8806 93.6499 70 92.5305 70 91.1499V81.1499C70 79.7681 68.8806 78.6499 67.5 78.6499H65V48.6499H76.9104L86.3831 53.3997C86.731 53.5681 87.113 53.6536 87.5 53.6499H97.5C98.8806 53.6499 100 52.5305 100 51.1499V16.1499C100 14.7681 98.8806 13.6499 97.5 13.6499ZM75 43.6499H50V23.6499H75V43.6499ZM33.3472 45.8997L29.812 42.3767L45 27.1838V34.2639L33.3472 45.8997ZM60 131.15C59.9915 138.049 54.4006 143.641 47.5 143.65H5V133.65H40C45.5225 133.65 50 129.172 50 123.65V93.6499H60V131.15ZM65 88.6499H45V83.6499H65V88.6499ZM60 78.6499H50V48.6499H60V78.6499ZM95 48.6499H88.0896L80 44.6045V22.6941L88.0896 18.6499H95V48.6499Z" fill="#1C1B1B"/>
            <path d="M115 31.1499H120V36.1499H115V31.1499Z" fill="#1C1B1B"/>
            <path d="M125 31.1499H130V36.1499H125V31.1499Z" fill="#1C1B1B"/>
            <path d="M135 31.1499H140V36.1499H135V31.1499Z" fill="#1C1B1B"/>
            <path d="M145 31.1499H150V36.1499H145V31.1499Z" fill="#1C1B1B"/>
            <path d="M104.293 13.7512L146.793 1.24999L148.204 6.04736L105.704 18.5474L104.293 13.7512Z" fill="#1C1B1B"/>
            <path d="M104.429 53.5828L105.575 48.7134L148.074 58.7134L146.927 63.5828L104.429 53.5828Z" fill="#1C1B1B"/>
            <path d="M115 21.1499H120V26.1499H115V21.1499Z" fill="#1C1B1B"/>
            <path d="M125 21.1499H130V26.1499H125V21.1499Z" fill="#1C1B1B"/>
            <path d="M135 21.1499H140V26.1499H135V21.1499Z" fill="#1C1B1B"/>
            <path d="M145 21.1499H150V26.1499H145V21.1499Z" fill="#1C1B1B"/>
            <path d="M115 41.1499H120V46.1499H115V41.1499Z" fill="#1C1B1B"/>
            <path d="M105 31.1499H110V36.1499H105V31.1499Z" fill="#1C1B1B"/>
            <path d="M105 21.1499H110V26.1499H105V21.1499Z" fill="#1C1B1B"/>
            <path d="M105 41.1499H110V46.1499H105V41.1499Z" fill="#1C1B1B"/>
            <path d="M125 41.1499H130V46.1499H125V41.1499Z" fill="#1C1B1B"/>
            <path d="M135 41.1499H140V46.1499H135V41.1499Z" fill="#1C1B1B"/>
            <path d="M145 41.1499H150V46.1499H145V41.1499Z" fill="#1C1B1B"/>
            </g>
            <defs>
            <clipPath id="clip0">
            <rect width="150" height="150" fill="white"/>
            </clipPath>
            </defs>
          </svg>

        </div>
        <div class="box__body">
          <div class="content text-center">
            <p>
              Mangueiras
            </p>
          </div>
        </div>
      </a>
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
              como: extrusor, puxador, trançadeira, túnel de aquecimento, 
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