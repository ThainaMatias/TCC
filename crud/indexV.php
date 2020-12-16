<?php
	session_start();
	include_once('conexao.php');
	
	$result_recado_bd = "SELECT * FROM tbl_voluntario";
	$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title>Mural de Voluntárias</title>
	</head>
	
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Lista de Voluntárias</h1>
			</div>
			<div class="row">
				<div class="col-md-12 table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
								<th>Data de Nascimento</th>
                                <th>CPF</th>
                                <th>Profissão</th>
								<th>E-mail</th>
								<th>Senha</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows = mysqli_fetch_assoc($resultado_recado_bd)){ ?>
								<tr>
									<td><?php echo $rows['idVoluntario']; ?></td>
                                    <td><?php echo $rows['nomeVoluntario']; ?></td>
                                    <td><?php echo $rows['sobrenomeVoluntario']; ?></td>
									<td><?php echo $rows['datanascVoluntario']; ?></td>
                                    <td><?php echo $rows['cpfVoluntario']; ?></td>
                                    <td><?php echo $rows['profVoluntario']; ?></td>
									<td><?php echo $rows['emailVoluntario']; ?></td>
									<td><?php echo $rows['senhaVoluntario']; ?></td>
									<td>
										<!--<a href="visualizar_voluntario.php?id=<?php echo $rows['idVoluntario']; ?>">
											<button type="button" class="btn btn-primary">Visualizar</button>
										</a> -->
										<a href="editar_voluntario.php?id=<?php echo $rows['idVoluntario']; ?>">
											<button type="button" class="btn btn-warning">Editar</button>
										</a>
										<a href="apagar_voluntario.php?id=<?php echo $rows['idVoluntario']; ?>">
											<button type="button" class="btn btn-danger">Apagar</button>
										</a>
									</td>
								</tr>  
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		