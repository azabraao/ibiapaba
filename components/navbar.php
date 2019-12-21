
<?php
  $url = $_SERVER["REQUEST_URI"];

  
  ?>

<!-- 
  <?php
      $xmlFile = pathinfo($url);

      function filePathParts($arg1) {
          echo $arg1['dirname'], "\n";
          echo $arg1['basename'], "\n";
          echo $arg1['filename'], "\n";
      }
  
      $arr = filePathParts($xmlFile);

      print_r($xmlFile);
  ?>
 -->
<nav class="navbar">
  <div class="navbar__inside">
    <div class="navbar__logo">
      <a href="/">
        <img src="./assets/img/logo.png" alt="Logo Ibiapaba">
      </a>
    </div>
    <div class="menu active">
      <div class="menu__hamburguer jsHamburguer">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <div class="menu__links jsLinks">
        <a href="/" class='menu__link <?php $class = ($url == "/") ?  "active" : ""; echo $class; ?>'>
          <span>Home</span>
        </a>
        <a href="/empresa" class='menu__link <?php $class = ($url == "/empresa") ?  "active" : ""; echo $class; ?>'>
          <span>Empresa</span>
        </a>
        <a href="/produtos" class='menu__link <?php $class = ($url == "/produtos") ?  "active" : ""; echo $class; ?>'>
          <span>Produtos</span>
        </a>
        <a href="/servicos" class='menu__link <?php $class = ($url == "/servicos") ?  "active" : ""; echo $class; ?>'>
          <span>Serviços</span>
        </a>
        <a href="/historico" class='menu__link <?php $class = ($url == "/historico") ?  "active" : ""; echo $class; ?>'>
          <span>Histórico</span>
        </a>
        <a href="/contato" class='menu__link <?php $class = ($url == "/contato") ?  "active" : ""; echo $class; ?>'>
          <span>Contato</span>
        </a>
      </div>
    </div>
  </div>
</nav>