<?php session_start(); ?>
<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>
   
    <!-- CSS -->
    <style>
body{
     background-color: white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 Arial;
   }

   .bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-size: cover;

}
.bgimg-1 {
  background-image: url(imagens/teste1.jpg);
  min-height: 100%;
}

.bgimg-2 {
  background-image: url(imagens/body10.jpg);
  min-height: 400px;
}

.bgimg-3 {
  background-image: url(imagens/body2.jpg);
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 1%;
  font-size: 180%;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px Arial;
  color: #111;
}

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
          /* containers */
          .caption span.border {
  background-color: #111;
  color: #fff;
  padding: 4%;
  font-size: 100%;
  letter-spacing: 10px;
}
}

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
          /* containers */
          .bgimg-2 {
  background-image: url(imagens/body10.jpg);
  min-height: 178px;
}
}

        
</style>

    <!-- CORPO-->

    <h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:1%">Lei Maria da Penha</h2>

<div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify;
margin-top: 2%;">
  <h3 style="text-align:center;">Sobre</h3>
  <p>A Lei Maria da Penha estabelece que todo o caso de violência doméstica e intrafamiliar é crime, 
    deve ser apurado através de inquérito policial e ser remetido ao Ministério Público. 
    Esses crimes são julgados nos Juizados Especializados de Violência Doméstica contra a Mulher, 
    criados a partir dessa legislação, ou, nas cidades em que ainda não existem, nas Varas Criminais.
</p>
    <p>A lei também tipifica as situações de violência doméstica, proíbe a aplicação de penas pecuniárias aos agressores, 
      amplia a pena de um para até três anos de prisão e determina o encaminhamento das mulheres em situação de violência, 
      assim como de seus dependentes, a programas e serviços de proteção e de assistência social. A Lei n. 11.340, 
      sancionada em 7 de agosto de 2006, passou a ser chamada Lei Maria da Penha em homenagem à mulher cujo marido tentou matá-la 
      duas vezes e que desde então se dedica à causa do combate à violência contra as mulheres.</p>
</div>

<div style="color: #777; background-color:#b7b6b6; text-align:center; padding:50px 80px; text-align: justify;">
  <h3 style="text-align:center;">Lei 11.340/06</h3>
  <p>Segundo a Lei Maria da Penha, violência doméstica e familiar contra a mulher é qualquer ação ou omissão baseada 
    no gênero que lhe cause morte, lesão, sofrimento físico, sexual ou psicológico e dano moral ou patrimonial (art. 5º):       
  </p>
  <li>
  No âmbito da unidade doméstica – espaço de convívio permanente de pessoas, com ou sem vínculo familiar, 
  inclusive as esporadicamente agregadas;
  </li>
  <li>
  No âmbito da família – comunidade formada por indivíduos que são ou se consideram aparentados, 
  unidos por laços naturais, por afinidade ou por vontade expressa;
  </li>
  <li>
  Em qualquer relação íntima de afeto – onde o agressor conviva ou tenha convivido com a mulher, 
  independentemente de coabitação.
  </li>
</div>


    <!-- FOOTER-->


<?php include_once "footer.php"?>