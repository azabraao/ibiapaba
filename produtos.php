<?php
  if(!isset($_GET['tab'])) {
    $tab = "extrusora";
  } else {
    $tab = $_GET['tab'];
  }  
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php
include('./components/global_head.php');
?>
<body>
  
  <?php 
    $page = "/produtos";
    include('./components/navbar.php');
  ?>
  
  <header class="page-header linha-produtos jsLinhaProdutosHeader">
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
        <div class="tabs__item jsProdutosTab jsTab  <?php if($tab == "extrusora") echo "active" ?>" data-related-tab="extrusora">
          <span>
            Extrusora
          </span>
        </div>
        <div class="tabs__item jsProdutosTab jsTab  <?php if($tab == "trancadeira") echo "active" ?>" data-related-tab="trancadeira">
          <span>
            Trançadeira
          </span>
        </div>
        <div class="tabs__item jsProdutosTab jsTab  <?php if($tab == "puxador") echo "active" ?>" data-related-tab="puxador">
          <span>
            Puxador
          </span>
        </div>
        <div class="tabs__item jsProdutosTab jsTab  <?php if($tab == "ferramental") echo "active" ?>" data-related-tab="ferramental">
          <span>
            Ferramental
          </span>
        </div>
      </div>
      <div class="tabs__body">
        <div class="tab__content jsTabContent <?php if($tab == "extrusora") echo "active" ?>" data-tab="extrusora">
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
          <div class="features">
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-ferramenta-75x75.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Desenvolvemos extrusora para qualquer tipo 
                    de polímero ou elastômero, tanto para perfil 
                    como para tubos e mangueiras. 
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-survey.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Nossas extrusoras segue com todo o ferramental 
                    necessário para a retirada dos produtos que 
                    os nossos clientes fabricam.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-maitenance.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Instalamos a extrusora e deixamos o equipamento produzindo 
                    dentro da empresa do cliente.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-reliability.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Fabricamos extrusoras com roscas de 20mm até 
                    120mm, com alta performance e confiabilidade.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-manegement.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Um dos pontos altos dos nossos equipamentos é a 
                    facilidade operacional além é claro da alta produtividade.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-number-1.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Todos os acessórios das nossas extrusoras são 
                    de primeira linha o que aumenta a confiabilidade 
                    do nosso equipamento.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab__content jsTabContent <?php if($tab == "trancadeira") echo "active" ?>" data-tab="trancadeira">
          <div class="gallery">
            <div class="gallery__highlight">
              <img src="./assets/img/trancadeira-750x525.png" class="jsGalleryHighLight"/>
            </div>
            <div class="gallery__list jsGalleryList">
              <div class="gallery__list-item">
                <img class="jsGalleryItem" src="./assets/img/trancadeira-375x225-2.png"/>
              </div>
              <div class="gallery__list-item">
                <img class="jsGalleryItem" src="./assets/img/trancadeira-375x225-3.png"/>
              </div>
              <div class="gallery__list-item">
                <img class="jsGalleryItem" src="./assets/img/trancadeira-375x225-4.png"/>
              </div>
            </div>
          </div>
          <div class="features">
            <div class="content">
              <p>
                Máquina com a capacidade de desenvolver tranças sobrepostas em mangueiras de
                polímeros ou elastômeros.
              </p>
              <p class="text-bold">
                Onze motivos para adquirir nossa aspiraladeira:
              </p>
            </div>            
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-not-wring.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    1) Não estrangula o tubo a ser trançado.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-operario.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    2) Equipamento próprio para projetos contínuos, 
                    economiza custos de mão-de-obra.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-economico.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    3) Equipamento econômico pois evita o desperdício de matéria-prima.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-up.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    4) Trabalha com 32 conicais pesando cada um 1.2 Kg de fios, numa 
                    autonomia de 20 à 30 horas ininterruptas.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-wires.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    5) Trabalha com fios PP e poliester de número: 280, 550, 1100 ou 
                    2200.
                  </p>
                </div>
              </div>

              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-winch.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    6) A velocidade deste equipamento depende da capacidade da 
                    extrusora.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-cogwheel.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    7) Além das 32 espulhas encontradas no disco, 
                    podem ser encontradas mais 4 espulhas que inserem 
                    fios longitudinais que servem para dar maior 
                    resistência na tração do tubo que está 
                    sendo trançado.
                  </p>
                </div>
              </div>

              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-wire.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    8) É equipada com dois motores de 2 cv de 6 pólos 
                    cada, gerando economia no consumo de energia.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-aproveitamento.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    9) Fornecemos além da instalação feita no local, um treinamento 
                    para o melhor aproveitamento do equipamento.
                  </p>
                </div>
              </div>

              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-engineers.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    10) Este é um equipamento de fácil manuseio permitindo assim a sua 
                    utilização por qualquer pessoa.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-resit.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    11) Preço.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab__content jsTabContent <?php if($tab == "puxador") echo "active" ?>" data-tab="puxador">
        <div class="gallery">
            <div class="gallery__highlight">
              <img src="./assets/img/puxador-825x750.png" class="jsGalleryHighLight"/>
            </div>
            <div class="gallery__list jsGalleryList">
              <div class="gallery__list-item">
                <img class="jsGalleryItem" src="./assets/img/puxador-375x225-2.png"/>
              </div>
              <div class="gallery__list-item">
                <img class="jsGalleryItem" src="./assets/img/puxador-375x225-3.png"/>
              </div>
            </div>
          </div>
          <div class="features">
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-hand.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Puxador tipo caterpillar dois braços, com correias transportadoras 
                    (com guia central em canal tipo B) para mangueiras ou perfis.
                    A Aspiraladeira necessitará de dois puxadores independente da 
                    situação.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-puxador.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    Os nossos puxadores saem com um padrão de abertura para tubos até 
                    2", podendo ser ajustado conforme a necessidade do cliente.
                  </p>
                </div>
              </div>
            </div>
            <div class="features__row">
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-speedometer.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                   Esta Aspiraladeira tem a sua velocidade controlada por um inversor 
                   de frequência, digital com ou sem potenciômetro, sua força é de 
                   5cv com uma rotação de 1.100 rpm, em dois motores de seis polos 
                   cada.
                  </p>
                </div>
              </div>
              <div class="features__item">
                <div class="features__item-icon">
                  <img src="./assets/img/icon-corrente.png" alt="Ícone">
                </div>
                <div class="features__item-content">
                  <p>
                    O puxador é equipado com um motor de 1cv 1100 rpm e com um 
                    inversor de frequência também de 1cv.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab__content jsTabContent <?php if($tab == "ferramental") echo "active" ?>" data-tab="ferramental">
          <div class="simple-gallery">
            <div class="simple-gallery__row">
              <div class="simple-gallery__row-title">
                <h2>
                  Cabeçote
                </h2>
              </div>
              <div class="simple-gallery__row-images">
                <img src="./assets/img/cabecote-1.png" alt="Cabeçote">
                <img src="./assets/img/cabecote-2.png" alt="Cabeçote">
                <img src="./assets/img/cabecote-3.png" alt="Cabeçote">
              </div>
            </div>
            <div class="simple-gallery__row">
              <div class="simple-gallery__row-title">
                <h2>
                  Pino
                </h2>
              </div>
              <div class="simple-gallery__row-images">
                <img src="./assets/img/pino-1.png" alt="Pino">
                <img src="./assets/img/pino-2.png" alt="Pino">
              </div>
            </div>
            <div class="simple-gallery__row">
              <div class="simple-gallery__row-title">
                <h2>
                  Matriz
                </h2>
              </div>
              <div class="simple-gallery__row-images">
                <img src="./assets/img/matriz-1.png" alt="Matriz">
                <img src="./assets/img/matriz-2.png" alt="Matriz">
              </div>
            </div>
            <div class="simple-gallery__row">
              <div class="simple-gallery__row-title">
                <h2>
                  Túnel de aquecimento
                </h2>
              </div>
              <div class="simple-gallery__row-images">
                <img src="./assets/img/tunel-aquecimento-1.png" 
                alt="Túnel aquecimento">
              </div>
            </div>
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