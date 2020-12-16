<?php
	session_start();
	include_once('crud/conexao.php');
?>
<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>

<style>
	body{
		background-color: white;
        background-size: cover;
        max-width: 100%;
	    height:auto;
        margin-top: -1%;
	}
	
	form{
		margin-left: 23%;
	}

	@media (max-width: 768px){
		form{
			margin-left: 1%;
	}
}
</style>
	<body>
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
						$result_recado = "INSERT INTO chat (nome, recado, created) VALUES ('$usuario', '$recado', NOW())";						
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
						<label for="exampleInputEmail1" style="margin-top: 5%;"><strong>Nome:</strong></label>
						<input type="text" name="usuario" class="form-control" placeholder="Nome Completo" required>
					</div>
					
					<!--<div class="form-group">
						<label for="exampleInputEmail1">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div> -->
					
					<div class="form-group">
						<label for="exampleInputEmail1"><strong>Mensagem:</strong></label>
						<textarea  name="recado" class="form-control" placeholder="Descreva sua mensagem aqui..." rows="3"></textarea>
					</div>
					<input type="submit" class="btn btn-dark" value="Enviar">
					<br>
				</form>
				<hr>
				<h2 style="text-align: center;">Mensagens</h2>
				<?php
					$result_recado_bd = "SELECT * FROM chat ORDER BY id DESC";
					$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
					if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
						echo "Nenhuma mensagem...";
					}else{
						while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
							?>							
							<div class="media">
								<div class="media-body">
								<div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify;
margin-top: 1%;">
									<h6 class="media-heading" style="color:black;"><?php echo $rows['nome']; ?></h6>
									<?php echo $rows['recado']; ?>
								</div>
								</div>
							</div>
							<?php
						}
					}
				?>				
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
	</body>
