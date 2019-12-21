<!DOCTYPE html>
<html lang="en">
<?php
  include('./components/global_head.php');
?>
<body>
  
<?php 
  $page = "/contato";
  include('./components/navbar.php');
?>

<header class="page-header contato">
  <div class="container">
    <div class="page-header__title">
      <h1>
        Contato
      </h1>  
    </div>
  </div>
</header>

<section class="section no-padding-bottom">
  <div class="container">
    <div class="columns">
      <div class="column">
        <form action="" class="form">
          <div class="input-group">
            <label class="input-group__label">Nome:</label>
            <input type="text" class="input-group__input" placeholder="Braufagelio">
          </div>
          <div class="input-group">
            <label class="input-group__label">Email:</label>
            <input type="text" class="input-group__input" placeholder="braufagelio@gmail.com">
          </div>
          <div class="input-group">
            <label class="input-group__label">Telefone:</label>
            <input type="text" class="input-group__input" placeholder="(11) 99999-9999">
          </div>
          <div class="input-group">
            <label class="input-group__label">Como nos conheceu?</label>
            <input type="text" class="input-group__input" placeholder="Google, Facebook, Instagram">
          </div>
          <div class="input-group">
            <label class="input-group__label">Assunto:</label>
            <input type="text" class="input-group__input" placeholder="Financeiro, Produção. Comercial">
          </div>
          <div class="input-group">
            <label class="input-group__label">Mensagem:</label>
            <textarea type="text" class="input-group__textarea" 
            rows="4" placeholder="Dúvidas, elogios, sugestão."></textarea>
          </div>
          <div class="button button-primary button-small outlined">
            Enviar
          </div>
        </form>
      </div>
      <div class="column">
        <div class="map-section">
          <div class="map-section__top flex">
            <div class="map-section__top-icon">
              <img src="./assets/img/icon-place.png" alt="Ícone">
            </div>
            <div class="map-section__top-content">
              <p class="text-bold">
                Endereço
              </p>
              <p>
                Rua Lago de Pedra, 1023 - Bairro Pimentas - Guarulhos - SP CEP: 07260-200
              </p>
            </div>
          </div>
          <div class="map-section__middle">
            <iframe class="localizacao__map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.142143142862!2d-46.4098828!3d-23.4553367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce625cba9bfe27%3A0xc08afb8feb6aa4de!2sR.%20Lago%20de%20Pedra%2C%201023%20-%20Parque%20Sao%20Miguel%2C%20Guarulhos%20-%20SP%2C%2007260-200!5e0!3m2!1spt-BR!2sbr!4v1576784718823!5m2!1spt-BR!2sbr" 
            allowfullscreen=""></iframe>
          </div>
          <div class="map-section__bottom">
            <div class="flex">
              <div class="icon">
                <img src="./assets/img/icon-email.png" alt="Ícone">
              </div>
              <div>
                <p class="font-primary">
                  ibiapabasp@ibiapabasp.com.br  
                </p>
              </div>
            </div>
            <div class="flex">
              <div class="icon">
                <img src="./assets/img/icon-telefone.png" alt="Ícone">
              </div>
              <div>
                <p class="font-primary">
                  (11) - 2480-0716  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include('./components/responsaveis.php');
  include('./components/footer.php');
  include('./components/global_scripts.php');
?>
</body>
</html>