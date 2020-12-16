<?php
	session_start();
	include_once('crud/conexao.php');
	
	$result_recado_bd = "SELECT * FROM tbl_usuario";
	$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
?>
<!DOCTYPE html>
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
				<h1>Lista de Recados</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								
								<th>Nome</th>
								<th>E-mail</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows = mysqli_fetch_assoc($resultado_recado_bd)){ ?>
								<tr>
								<!--	<td><?php //echo $rows['idUsuario']; ?></td> -->
									<td><?php echo $rows['nomeUsuario']; ?></td>
									<td><?php echo $rows['emailUsuario']; ?></td>
									
									<td>
										<a href="visualizar_usuario.php?id=<?php echo $rows['idUsuario']; ?>">
											<button type="button" class="btn btn-xs btn-primary">Visualizar</button>
										</a> 
										<a href="editar_u.php?id=<?php echo $rows['idUsuario']; ?>">
											<button type="button" class="btn btn-xs btn-warning">Editar</button>
										</a>
										<a href="apagar_u.php?id=<?php echo $rows['idUsuario']; ?>">
											<button type="button" class="btn btn-xs btn-danger">Apagar</button>
										</a>
									</td>
								</tr>  
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<br>
		<a href="sair.php">Sair</a>
	</body>
</html>
