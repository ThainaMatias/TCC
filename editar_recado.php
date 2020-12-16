<?php
	include_once('crud/conexao.php');
	
	$id = $_GET['id'];

	//Buscar os dados referente ao recado neste id
	$result_recados = "SELECT * FROM recados WHERE id = '$id' LIMIT 1";
	$resultado_recados = mysqli_query($conn, $result_recados);
	$row_recados = mysqli_fetch_assoc($resultado_recados);
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title>Mural de Recados</title>
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Editar Recados</h1>
			</div>
			<form class="form-horizontal" method="POST" action="processar_editar_recado.php" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_recados['nome']; ?>">
					</div>
				</div>
				
				<!--<div class="form-group">
					<label class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="E-mail" value="<?php echo $row_recados['email']; ?>">
					</div>
				</div> -->
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Recado</label>
					<div class="col-sm-10">						
						<textarea  name="recado" class="form-control" rows="3"><?php echo $row_recados['recado']; ?></textarea>						
					</div>
				</div>
						
				<input type="hidden" name="id" value="<?php echo $row_recados['id']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Alterar</button>
						<a href="administrativo.php"><button type='button' class='btn btn-success'>Voltar</button></a>
					</div>
				</div>
				
			</form>
		</div>
	</body>
</html>