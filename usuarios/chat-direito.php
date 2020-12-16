<?php session_start(); 
	include_once('crud/conexao.php');
?>
 <?php include_once "header.php"?>
 <?php include_once "menuresp.php"?>

  
   <!-- CSS -->
   <style>
   	
	
	form{
		margin-left: 23%;
	}

	@media (max-width: 768px){
		form{
			margin-left: 1%;
	}
}
  body{
     background-color:  white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 Arial;
   }



h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Arial", sans-serif;
  color: #111;
}



.card {
  padding: 0px;
  background-color: #EAD7FE;
  margin-top: 1%
}

.nav-tabs {
    border-bottom: 1px solid #A8A0B9;
    width: 100%;
}



.nav-tabs .nav-link {
    border: 1px solid #A8A0B9;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: black;
}
/* Mobile */

@media screen and (max-width:500px){

.nav-tabs {
    border-bottom: 1px solid #A8A0B9;
    width: 100%;
    
}
.card {
  padding: 20px;
  background-color: #EAD7FE; 
  margin-top: 5%
}
.caption span.border {
    background-color: #111;
    color: #fff;
    padding: 8px;
    font-size: 16px;
    letter-spacing: 11px;
}
}

</style>

<h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top: 0.3%;">Contate nossas voluntárias do jurídico</h2>

    
<div class="card" >

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="chat.php">Psicológico</a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="chat-direito.php">Jurídico</a>

    </ul>
	<br>
	
	<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$request = (implode($_POST));
				if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){
					echo "";
				}else{
					$_SESSION['ultima_request']  = $request;
					if(isset($_POST['usuario'])){
						$usuario = $_POST['usuario'];
						$recado = $_POST['recado'];
						$result_recado = "INSERT INTO mensagemd (nome, msg) VALUES ('$usuario', '$recado')";						
						$resultado_recados= mysqli_query($conn, $result_recado);
						//Enviar e-mail
					}
				}
			}	
				
		?>

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<!--<h2 style="text-align: center; margin-top:3%;">Descreva seu Relato aqui</h2>-->
				<form action="" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1" style="margin-top: -6%;"><strong>Nome (Fictício se preferir):</strong></label>
						<input type="text" name="usuario" class="form-control" placeholder="Nome Completo" required>
					</div>
					
					<!--<div class="form-group">
						<label for="exampleInputEmail1">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div> -->
					
					<div class="form-group">
						<label for="exampleInputEmail1"><strong>Mensagem:</strong></label>
						<textarea  name="recado" class="form-control" placeholder="Descreva seu Relato aqui..." rows="3"></textarea>
					</div>
					<input type="submit" class="btn btn-dark" value="Enviar">
					<br>
				</form>
				<hr>
				<h2 style="text-align: center;">Mensagens</h2>
				<?php
					$result_recado_bd = "SELECT * FROM mensagemd ORDER BY id DESC";
					$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
					if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
						echo "Nenhum recado...";
					}else{
						while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
							?>							
							<div class="media">
								<div class="media-body">
								<div style="color: #777; background-color: white; text-align:center; padding:50px 80px; text-align: justify;
margin-top: 1%;">
									<h6 class="media-heading" style="color:black;"><?php echo $rows['nome']; ?></h6>
									<?php echo $rows['msg']; ?>
								</div>
								</div>
							</div>
							<?php
						}
					}
				?>				
			</div>
		</div>
</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
	</body>


	<?php include_once "footer.php"?>