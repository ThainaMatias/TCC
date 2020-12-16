<?php
	include_once("conexao.php");
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_recados = "SELECT * FROM tbl_voluntario WHERE idVoluntario = '$id' LIMIT 1";
	$resultado_recados = mysqli_query($conn, $result_recados);
	$row_recados = mysqli_fetch_assoc($resultado_recados);	
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title>Mural de Voluntária</title>
	</head>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Visualizar Voluntária</h1>
			</div>
			<div class="row">
				<div class="pull-right" style="padding-bottom: 20px; ">
					<a href="indexV.php">
						<button type='button' class='btn btn-sm btn-success'>Voltar</button>
					</a>
					
					<a href="editar_voluntario.php?id=<?php echo $row_recados['idVoluntario']; ?>">
						<button type="button" class="btn btn-sm btn-warning">
							Editar
						</button>
					</a>
					
					<a href="apagar_voluntario.php?id=<?php echo $row_recados['idVoluntario']; ?>">
						<button type="button" class="btn btn-sm btn-danger">
							Apagar
						</button>
					</a>
				</div>
			</div>
			<dl class="dl-horizontal">	
				<dt>Id: </dt>
				<dd><?php echo $row_recados['idVoluntario']; ?></dd>
				<dt>Nome: </dt>
				<dd><?php echo $row_recados['nomeVoluntario']; ?></dd>
				<dt>E-mail: </dt>
				<dd><?php echo $row_recados['emailVoluntario']; ?></dd>
				<dt>Recado: </dt>
				<dd><?php echo $row_recados['senhaVoluntario']; ?></dd>
				
				<dd><?php 
					if(isset($row_recados['created'])){
						$inserido = $row_niveis_acessos['created'];
						echo date('d/m/Y H:i:s', strtotime($inserido)); 
					}?>
				</dd>
			</dl>
		</div>
	</body>
</html>