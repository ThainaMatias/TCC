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
  width: 53%; 
  background-color:#F5F5DC;
  margin-left: -3.7%;
  margin-bottom: 46%;
}
#row2{
  width: 53%; 
  margin-top: -97.6%;
    margin-left: 52.8%;
    background-color:#F5F5DC;
}

#id1{
  margin-left: 20%;
}
#id2{
  margin-left: 20%;
}

  @media (min-width: 576px){
.col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 44.666667%;
    max-width: 49.666667%;
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

#row2{
  width: 112%;
  margin-top: -39.2%;
    margin-left: -6.5%;
}
#row1{
  width: 112%;
  margin-top: -350%;
  margin-left: -6.5%;
}
.w-100 {
    width: 86%!important;
    height: 156px;
    margin-left: 12.5%;
}
#id1{
  margin-left: 0%;
}
#id2{
  margin-left: 0%;
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
}
    
</style>

    <!-- CORPO-->
<div class="container-fluid">
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
<div class="container" style="padding-top: 40px;
      padding-bottom: 20px;
      position: relative;
      background-color: inherit;
      width: 75%;
      text-align: justify;">
   
  <div class="card" id="row1">
  
  <br>
        <img src="imagens/test-voluntaria.png" class="card-img-top" alt="voluntarios" style="width:85%;">
       <!-- <div class="card-body">
        
        </div> -->
        <div class="col-sm-10" style="background-color:#F5F5DC;">
        <p id="id1"><br>O projeto Elas por Elas tem o intuito de impedir que mulheres vítimas de violência doméstica fiquem desamparadas. 
      <br>Com isso, estamos reunindo mulheres estudantes de Psicologia e Direito da Baixada Santista que queiram atender e auxiliar 
      voluntariamente mulheres vítimas de violência doméstica da região. 
      <br>Caso tenha interesse, <b><a href="infovoluntario.php">clique aqui</a></b> para saber mais e fazer parte por Elas.   </p>
      <p id="id1" style="text-align: center;"><b> JUNTAS SOMOS MAIS FORTES! </b>
      
         </p>
  
        </div>
  
    </div>

    <div class="card" id="row2">
  
    <br>
    
        <img src="imagens/projeto1.png" class="card-img-top" alt="voluntarios" 
        style="width: 85%; margin-left: 10%;">
       
        <div class="col-sm-10" style="background-color:#F5F5DC;">
      <p id="id2"><br>
      SOBRE NOSSO PROJETO -
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet justo vel 
      eros maximus laoreet. Cras vitae condimentum mi, non convallis massa. Duis euismod, 
      dolor sit amet fermentum aliquam, urna est efficitur tortor, sit amet posuere ipsum ligula 
      non velit. Nulla consectetur quis est at volutpat. Proin arcu eros, scelerisque vel mi vitae, 
      ultrices fermentum mi. Sed id quam sed quam aliquet elementum. Aliquam dapibus efficitur quam. 
      Donec rutrum enim quis bibendum mattis. Sed et augue fermentum, auctor risus sed, faucibus nunc. 
      Aenean et malesuada ipsum. Praesent at leo metus.
      </p>
        
     
    
    </div>
    </div>
</div>

<br>
    <!-- FOOTER-->
<?php include_once "footer.php"?>