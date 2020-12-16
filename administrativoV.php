<?php
	session_start();
	include_once('crud/conexao.php');
	
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
		<title>Lista de Voluntárias</title>
	</head>
	<body>
	
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
			<br>
				<h2>Lista de Voluntárias</h2>
			</div>
			<br>
			<div class="row">
				<div class="col-md-16" style="margin-left: -5%;">
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
                                <th>Situação ID</th>
                                <th>Nivel de Acesso</th>
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
                                    <td><?php echo $rows['situacoe_id']; ?></td>
                                    <td><?php echo $rows['niveis_acesso_id']; ?></td>

									
									<td>
										<a href="editar_v.php?id=<?php echo $rows['idVoluntario']; ?>">
											<button type="button" class="btn btn-warning btn-sm">Editar</button>
										</a>
										<br>
										<br>
										<a href="apagar_v.php?id=<?php echo $rows['idVoluntario']; ?>">
											<button type="button" class="btn btn-danger btn-sm">Apagar</button>
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
		
		