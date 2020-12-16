<?php include "header.php"?>
<?php include_once "menuresp.php"?>

   <!-- CSS -->
   <style>
   body{
     background-color:  white;
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
  background-image: url(imagens/body.png);
  min-height: 400px;
}

.bgimg-3 {
  background-image: url(imagens/body11.jpg);
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
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px Arial;
  color: #111;
}
p#text{
  text-align:center; 
  font-family:Arial; 
  margin-left: 10%; margin-right:10%;
}

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
          /* containers */

.bgimg-2 {
  background-image: url(imagens/body.png);
  min-height: 178px;
}

.bgimg-3 {
  background-image: url(imagens/body2.jpg);
  min-height: 178px;
}
ul#ul1 {
  margin-top: 0;
    margin-bottom: 1rem;
    margin-left: -120%;
    margin-right: -45%;
}
p#text{
  
  font-family:Arial; 
  margin-left: -10%; 
  margin-right: -10%;
  text-align: justify;
}
}
   
</style>

<!-- TÍTULO DA PÁGINA 
<div class="header">
      <h2 style="color: #bff7f7;
            font-family: Candara;">Quem Somos</h2>
    </div>
    <br> -->

   <!-- CORPO-->
   
   <h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:0%;">Quem Somos</h2>

<div style="color: #777; background-color:#d7d7d7; text-align:center; padding:50px 80px; text-align: justify;
margin-top: 0%;">
  <h3 style="text-align:center;">OBJETIVO DO PROJETO</h3>
  <p id="text">O Objetivo desse projeto é oferecer por meio da tecnologia acesso para apoiar, orientar 
  e oferecer serviços para mulheres vítimas de 
  Violência Doméstica.
  Voltado para mulheres em geral, com foco especificamente da região da<b> Baixada Santista</b>, 
  o trabalho terá como alvo mulheres de diferentes idades, pois o assunto abrange a todas, adolescentes, 
  jovens, adultas e até idosas com aptidão para pesquisar informações e que buscam ajuda e orientação por 
  websites.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
  
  </div>
</div> 

<div style="position:relative;">
  <div style="color:#ddd; background-color:#d7d7d7; text-align:center; padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center; font-family:Arial; margin-left: 10%; margin-right:10%;">QUEM SOMOS</h3>
  <p id="text">Site feito 
  por um grupo de estudantes do curso Ciência da Computação, Faculdade UNIP em Santos. </p>
  <p id="text"> Fundadoras:
    <ul id="ul1" style="color: #000;">
    <li  style="margin-left: 40%; margin-right:10%; "> Leticia Monteiro Feitosa </li>
    <li style="margin-left: 40%; margin-right:10%;">  Maraneibson Aguiar Fernandes</li>
    <li style="margin-left: 40%; margin-right:10%;">  Thainá Lavrado Matias</li>
    </ul>
  </p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
 
  </div>
</div>




  
   <!-- FOOTER-->
<?php include_once "footer.php"?>