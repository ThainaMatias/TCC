<?php
    session_start();
	include_once('crud/conexao.php');
	

	$id = $_SESSION['usuarioId'];

	//Buscar os dados referente ao recado neste id
	$result_recados = "SELECT * FROM tbl_usuario WHERE idUsuario = '$id' LIMIT 1";
	$resultado_recados = mysqli_query($conn, $result_recados);
	$row_recados = mysqli_fetch_assoc($resultado_recados);
?>
<?php include_once "header.php"?>
	<?php include_once "menuresp.php"?>

	<style>
		.card{
			background-color:#F5F5DC;
			margin-top: 3%;
			margin-left: 23.8%;
			width: 50%;
		}
		h2{
			text-align: center;
			font-family:Arial;
			margin-top: 2%;
		}
		/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
	.card{
			background-color:#F5F5DC;
			margin-top: 9%;
			margin-left: 5.8%;
			width: 88%;
		}
}
	</style>
	<div class="card" >
			<div class="page-header">
				<h2>Alterar Dados</h2>
			</div>
			<form class="form-horizontal" method="POST" action="processar_editar_u.php" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_recados['nomeUsuario']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Data de Nascimento</label>
					<div class="col-sm-10">
						<input type="text" name="datanasc" class="form-control" id="inputEmail3" placeholder="Data de Nascimento" value="<?php echo $row_recados['datanascUsuario']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">CPF</label>
					<div class="col-sm-10">
						<input type="text" name="cpf" class="form-control" id="inputEmail3" placeholder="CPF" value="<?php echo $row_recados['cpfUsuario']; ?>" disabled>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="E-mail" value="<?php echo $row_recados['emailUsuario']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">
						<input type="text" name="senha" class="form-control" id="inputEmail3" placeholder="Senha" value="<?php echo $row_recados['senhaUsuario']; ?>" >
					</div>
				</div>
			
						
				<input type="hidden" name="id" value="<?php echo $row_recados['idUsuario']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-dark">Alterar</button>
					</div>
				</div>
			</form>
		</div>
		<br>
		<br>
		<?php include_once "footer.php"?>