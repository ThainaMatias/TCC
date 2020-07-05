<?php include_once "menu.php"?>
<?php include_once "header.php"?>

    <!-- JS PARA FUNCIONAR AS JANELINHAS DO MENU -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- CSS DESSA PÁGINA -->
            <style>
        /* Card dessa pagina */
                .card {
          background-color: #EAFFFF;
          padding: 20px;
          margin-top: 20px;
          margin-left: 107px;
          margin-right: 96px;
          width: 83.7vw;
          
        }

        /* Tudo (baloes, bolinhas e o traço do meio) */
        .timeline {
          position: relative;
          max-width: 1200px;
          margin: 0 auto;
        }

        /* Traço do Meio que divide os malões */
        .timeline::after {
          content: '';
          position: absolute;
          width: 6px;
          background-color: #8828EF;
          top: 0;
          bottom: 0;
          left: 50%;
          margin-left: -3px;
        }

        /* Container  */
        .container {
          padding: 10px 40px;
          position: relative;
          background-color: inherit;
          width: 50%;
        }

        /* Bolinha */
        .container::after {
          content: '';
          position: absolute;
          width: 25px;
          height: 25px;
          right: -17px;
          background-color: #DCC4F7;
          border: 4px solid #8828EF;
          top: 15px;
          border-radius: 50%;
          z-index: 1;
        }

        /* Posição do balãozinho esquerdo */
        .left {
          left: -28%;
        }

        /* Posição do balãozinho direito */
        .right {
          left: 28%;
        }

        /* esquerdo */
        .left::before {
          content: " ";
          height: 0;
          position: absolute;
          top: 22px;
          width: 0;
          z-index: 1;
          right: 30px;
          border: medium solid white;
          border-width: 10px 0 10px 10px;
          border-color: transparent transparent transparent white;
        }

        /* direito */
        .right::before {
          content: " ";
          height: 0;
          position: absolute;
          top: 22px;
          width: 0;
          z-index: 1;
          left: 30px;
          border: medium solid white;
          border-width: 10px 10px 10px 0;
          border-color: transparent white transparent transparent;
        }

        /* Posição da bolinha direita */
        .right::after {
          left: -16px;
        }

        /* Balãozinho */
        .content {
          padding: 20px 30px;
          background-color: #ff99cc;
          position: relative;
          border-radius: 6px;
        }

        /* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
        @media screen and (max-width: 600px) {
          /* Coloque a timelime  à esquerda */
          .timeline::after {
          left: 31px;
          }
          
          /* containers */
          .container {
          width: 100%;
          padding-left: 70px;
          padding-right: 25px;
          }
          
          /* Verifique se todas as setas estão apontando para a esquerda (não sei o que muda) */
          .container::before {
          left: 60px;
          border: medium solid white;
          border-width: 10px 10px 10px 0;
          border-color: transparent white transparent transparent;
          }

          /* Verifique se todas as bolinhas estão no mesmo local */
          .left::after, .right::after {
          left: 15px;
          }
          
          /* Faça com que todos os contêineres certos se comportem como os da esquerda */
          .right {
          left: 0%;
          }
        }
        </style>

 
  <!-- TÍTULO NA PÁGINA -->
    <div class="header">
      <h2 style="color: #bff7f7;
            font-family: Candara;">Tipos de Violência Doméstica</h2>
    </div>
    <br>
    
     <!-- CORPO -->
    <div class="leftcolumn">
            <div class="card">
    <div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>Violência Física</h2>
      <p>Violência Física é definida pelo uso da força física que ofenda o corpo da mulher, sendo reconhecida por hematomas, arranhões, queimaduras e fratura. É o tipo de violência mais identificável.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Violência Psicológica</h2>
      <p>A violência psicológica é um tipo de agressão em que o corpo da mulher não é lesionado, mas sim a mente, que na maioria das vezes, não é perceptível pela vítima. Pode ser atingido não apenas pela vítima, como também a todos que presenciam o momento da violência. Ameaças, rejeições, humilhações ou discriminações são exemplos de agressão psicológica</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>Violência Sexual</h2>
      <p>A violência sexual envolve ato sexual ou tentativa de ato sexual sem autorização ou não consentimento da vítima.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Violência Patrimonial</h2>
      <p>Ocorre quando o companheiro retém o dinheiro ou bens materiais da vítima para ter poder sobre ela. Destruir ou reter objetos, ferramentas de trabalho, registros pessoais e outros bens e direitos da mulher são considerados violência patrimonial.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>Violência Moral</h2>
      <p>São ações repetitivas que baixam a autoestima e comprometem também a saúde mental da mulher. São considerados casos de violência mora: acusar a mulher de traição, expor a vida intimida e espalhar algo sobre a mulher que seja mentira.</p>
    </div>
  </div>
  
</div>
</div>
</div>