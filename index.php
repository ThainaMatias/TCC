<?php session_start(); ?>
<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>


<style>
  /* Container fluid (carousel) */
  .container-fluid {
    padding-top: 0px;
    position: center;
    background-color: inherit;
    width: 83.5%;
    margin-left: 8%;
    margin-top: 0%;
  }
  body{
     background-color: white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 Arial;
   }

  
  div.card{
    width: 486px;
  }

  #row1{
    width: 79.7%;
    background-color: #F5F5DC;
    margin-left: 10.8%;
    margin-bottom: 2%;
    margin-top: 2%;
}


#id1{
  margin-left: 20%;
  margin-bottom: -1%;
  text-align: justify;
  font-family: arial;
}
#id2{
  margin-left: 20%;
  margin-bottom: -1%;
  font-family: arial;
  text-align: justify;
}

img#img2.card-img-top{
  width: 33%;
  margin-left: 56%;
    margin-top: -50%;
}
img#img1.card-img-top{
  width: 33%;
    margin-left: 10%;

}
div#text1.col-sm-8{
  margin-top: 3%;
  margin-left: 0%;
}

div#text2.col-sm-10{
  margin-left: 43%;
  margin-top: -36.9%;
}
@media (min-width: 576px){
.col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 42.666667%;
}
}
  @media (min-width: 576px){
.col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 44.666667%;
    max-width: 49.666667%;
}
  }

  @media (min-width: 576px) {
.col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 48.333333%;
}
  }
/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
  .container-fluid {
    padding-top: 0px;
    position: center;
    background-color: inherit;
    width: 110.5%;
    margin-left: -11%;
    height: 1000px;
}

div.card{
  width: 360px;
}

#row1{
  width: 87.9%;
    margin-top: -221%;
    margin-left: 5.8%;
}
.w-100 {
    width: 86%!important;
    height: 156px;
    margin-left: 12.7%;
}
#id1{
  margin-left: 0%;
  text-align: justify;
  font-family: arial;
}
#id2{
  margin-left: 0%;
  text-align: justify;
  font-family: arial;
}
.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: -18px;
    left: 0;
    z-index: 15;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
img#img1.card-img-top {
    width: 87%;
    margin-left: 10%;
}
div#text2.col-sm-10 {
    margin-left: 1%;
    margin-top: -4.9%;
}
img#img2.card-img-top {
    width: 87%;
    
    margin-left: 7%;
    margin-top: -10%;
}
}

    
</style>

    <!-- CORPO-->
<div class="container-fluid" >
    <!-- Carousel-->
<div id="carouselSite" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
    <li data-target="#carouselSite" data-slide-to="1"></li>
   <!-- <li data-target="#carouselSite" data-slide-to="2"></li> -->
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="imagens/car-1.png" class="w-100" height="350px">
    </div>

    <div class="carousel-item">
      <img src="imagens/car-2.png" class="w-100 " height="350px">
    </div>

   <!-- <div class="carousel-item">
      <img src="imagens/imgteste3.png" class="w-100 " height="350px">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>

<!-- conteudo -->

   
  <div class="card" id="row1">
  
  <br>

  <!-- SEJA UMA VOLUNTÁRIA -->
  <div class="container" id="cont1">
        <img src="imagens/test-voluntaria.png" id="img1" class="card-img-top" alt="voluntarios" >
        
       <div class="col-sm-8" id="text1">
        <p id="id1">O projeto Elas por Elas tem o intuito de impedir que mulheres vítimas 
          de violência doméstica fiquem desamparadas. </p> 
          <br>
      <p id="id1">Com isso, estamos reunindo mulheres estudantes de Psicologia e Direito da Baixada 
      Santista que queiram atender e auxiliar 
      voluntariamente mulheres vítimas de violência doméstica da região. </p>
      <br>
      <p id="id1">Caso tenha interesse, <b><a href="infovoluntario.php">clique aqui</a></b> 
      para saber mais e fazer parte por Elas.   </p>
      <br>
      <p id="id1" style="text-align: center;"><b> JUNTAS SOMOS MAIS FORTES! </b> </p>
        <br>
        <br>
        </div>
        </div>

<!-- NOSSO PROJETO -->
        
       
<div class="container" id="2">
<img src="imagens/projeto1.png" id="img2" class="card-img-top" alt="voluntarios">
<div class="col-sm-10" id="text2">
      <p id="id2"><br>
      Esse projeto foi feito para apoiar, orientar e oferecer serviços para mulheres
      vítimas de violência doméstica. Reunindo informações sobre os tipos de violência e mais sobre 
      a Lei Maria da Penha. Consta locais de denuncia e ONGs
      da Baixada Santista. 
      </p>
      <br>
      <p id="id2">
        O Elas por Elas pretende ter relatos das vítimas para facilitar a identificação de outras mulheres
        que talvez não saibam que estão passando por essa situação.
      </p>
      <br>
      <p id="id2">
        Contando com ajuda de voluntárias das áreas de psicologia e direito com o objetivo de
        apoiar e orientar de forma mais facilitada.

      </p>
      <br>
      </div>
        </div>

  </div>
   
   

   <!-- <div class="card" id="row2">
  
    <br>
    
        <img src="imagens/projeto1.png" class="card-img-top" alt="voluntarios" 
        style="width: 85%; margin-left: 10%;">
       
        <div class="col-sm-10" style="background-color:#F5F5DC;">
      <p id="id2"><br>
      Esse projeto foi feito para apoiar, orientar e oferecer serviços para mulheres
      vítimas de violência doméstica. Reunindo informações sobre os tipos de violência e mais sobre 
      a Lei Maria da Penha. Consta locais de denuncia e ONGs
      da Baixada Santista. 
      </p>
      <p id="id2">
        O Elas por Elas pretende ter relatos das vítimas para facilitar a identificação de outras mulheres
        que talvez não saibam que estão passando por essa situação.
      </p>
      <p id="id2">
        Contando com ajuda de voluntárias das áreas de psicologia e direito com o objetivo de
        apoiar e orientar de forma mais facilitada.

      </p>
        </div>
     
    
    </div> -->
  

<br>
    <!-- FOOTER-->
<?php include_once "footer.php"?>