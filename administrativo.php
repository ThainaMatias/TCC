<?php
	session_start();
	include_once('crud/conexao.php');
	
	$result_recado_bd = "SELECT * FROM recados";
	$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title>Lista de Relatos</title>
	</head>
	
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h2 style="margin-top: 2%;">Lista de Relatos</h2>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12 table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Relato</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows = mysqli_fetch_assoc($resultado_recado_bd)){ ?>
								<tr>
									<td><?php echo $rows['id']; ?></td>
									<td><?php echo $rows['nome']; ?></td>
									<td><?php echo $rows['recado']; ?></td>
									
									<td>										
										<a href="editar_recado.php?id=<?php echo $rows['id']; ?>">
											<button type="button" class="btn btn-sm btn-warning" style="margin-top: 4%;">Editar</button>
										</a>
										<br>
										<br>
										<a href="apagar_recado.php?id=<?php echo $rows['id']; ?>">
											<button type="button" class="btn btn-sm btn-danger" style="margin-top: 4%;">Apagar</button>
										</a>
										<br>
										<br>
										<a href="index.php">
											<button type="button" class="btn btn-info btn-sm">Voltar ao site</button>
										</a>
									</td>
								</tr>  
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		