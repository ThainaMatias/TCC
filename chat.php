
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


.bgimg-2 {
  background-image: url(imagens/body.png);
  min-height: 400px;
}

h5{
  color:black; 
  text-align:center;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px Arial;
  color: #111;
}



@media screen and (max-width:500px){
	h5{
  color:black; 
  text-align:justify;
}
}

</style>


<h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:1%">Contate nossos Voluntários</h2>
  
 

<div style="color: #777;  text-align:center; padding:50px 80px; text-align: justify;
margin-top: 0%;">
  <h3 style="color:black; text-align:center; margin-top: -3%; font-family:Arial;">NÃO SE CALE!</h3>
  <h5><a href="cadastrousuario.php">Clique aqui </a> para se cadastrar e receber auxílio de nossos voluntários da área jurídica e psicologica.</h5>
  <h5> Não se preocupe que tudo será confidencial, se assim preferir. Estamos aqui para ajudar! </h5>
</div>

<div class="bgimg-2">
  <div class="caption">
  
  </div>
</div> 
    


   <!-- FOOTER-->
<?php include_once "footer.php"?>