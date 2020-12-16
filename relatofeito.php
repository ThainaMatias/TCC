<?php
// Conexão
include_once 'crud/conexao.php';
// header - css - bootstrap
include_once 'header.php';
 include_once "menuresp.php"

?>

<style>
     body{
     background-color:  white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 Arial;
   }

   .table .thead-dark th {
    color: #000;
    background-color: #EAD7FE;
    border-color: #EAD7FE;
}
#row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: -15px;
}

.media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-left: 4%;
}
p#tex1{
	color: #555; 
	text-align:justify; 
	font-family:Arial; 
	margin-left: 10%; 
	margin-right:10%;"
}
p#tex2{
	color: #555; 
	text-align:justify; 
	font-family:Arial; 
	margin-left: 33%; 
	margin-right: 10%;
}
@media screen and (max-width:600px){
	p#tex1{
	color: #555; 
	text-align:justify; 
	font-family:Arial; 
	margin-left: -20%; 
	margin-right: -20%;
}
p#tex2{
	color: #555; 
	text-align:center; 
	font-family:Arial; 
	margin-left: -26%; 
	margin-right: -26%;
}
}
</style>

<h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:0.5%">
Relatos de mulheres Vítimas de Violência Doméstica</h2>

<div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; margin-top:1%">
<p id="tex1">Abaixo estão todos os relatos de mulheres que passaram ou ainda estão em situação de Violência Doméstica. Deixar seu relato é de 
	extrema importância, pois esse ato influencia cada vez mais as mulheres denunciarem, e se a situação for adversa,
	é uma forma de divulgar as falhas da justiça em nosso país, gerando movimentos e até ajuda de profissionais que visualizarem
	o relato da vítima, então não deixe de relatar. <b>NÃO SE CALE! </b>
</p>
<p id="tex2">Para deixar seu relato em nosso site, <a style="color: black;" href="cadastrousuario.php" >clique aqui </a> e faça seu cadastro!</p>
</div>

<h4 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:1%">Relatos feitos:</h4>

<div class="row" id="row">
	
	<div class="container">
        
       <!-- <div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th style="font-family:Arial; color:#1c2331;">Nome</th>
                    <th style="font-family:Arial; color:#1c2331;">Relatos</th>
				</tr>
			</thead>
			<tbody> -->
			<ul class="list-group list-group-flush">
				<?php
				$banco = "SELECT * FROM recados ORDER BY id DESC";
				$result = mysqli_query($conn, $banco);
               
                if(mysqli_num_rows($result) > 0):

				while($row = mysqli_fetch_array($result)):
				?>

                 <div class="media">
	
				 <div class="media-body">
				<div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify;
                 margin-top: 1%;">
			    <h6 class="media-heading" style="color:black;"><strong><?php echo $row['nome']; ?></strong></h6>
				<?php echo $row['recado']; ?>	
					
				</div>
				 </div>
                 </div>
	

			   <?php 
				endwhile;
				else: ?>
			</ul>
				
			   <?php 
				endif;
			   ?>

			
        </div>
		<br>
		
	</div>
</div>



<br>
	<br>
	<?php include_once "footer.php"?>