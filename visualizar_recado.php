<?php
	include_once("crud/conexao.php");
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
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
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Visualizar Usuário</h1>
			</div>
			<div class="row">
				<div class="pull-right" style="padding-bottom: 20px; ">
					<a href="administrativo.php">
						<button type='button' class='btn btn-success'>Voltar</button>
					</a>
					
					<a href="editar_recado.php?id=<?php echo $row_recados['id']; ?>">
						<button type="button" class="btn btn-warning">
							Editar
						</button>
					</a>
					
					<a href="apagar_recado.php?id=<?php echo $row_recados['id']; ?>">
						<button type="button" class="btn btn-danger">
							Apagar
						</button>
					</a>
				</div>
			</div>
			<dl class="dl-horizontal">	
				<dt>Id: </dt>
				<dd><?php echo $row_recados['id']; ?></dd>
				<dt>Nome: </dt>
				<dd><?php echo $row_recados['nome']; ?></dd>
				
				<dt>Recado: </dt>
				<dd><?php echo $row_recados['recado']; ?></dd>
				<!--<dt>Inserido: </dt>
				<dd><?php 
					//if(isset($row_recados['created'])){
					//	$inserido = $row_niveis_acessos['created'];
					//	echo date('d/m/Y H:i:s', strtotime($inserido)); 
					//}?>
				</dd> -->
			</dl>
		</div>
	</body>
</html>