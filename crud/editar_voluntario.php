<?php
	include_once('conexao.php');
	
	$id = $_GET['id'];

	//Buscar os dados referente ao recado neste id
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
		<title>Mural de Voluntárias</title>
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Editar Voluntárias</h1>
			</div>
			<div class="row">
				<div class="pull-right" style="padding-bottom: 20px; ">
					<a href="indexV.php"><button type='button' class='btn btn-sm btn-success'>Voltar</button></a>
				</div>
			</div>
			<form class="form-horizontal" method="POST" action="processar_editar_voluntario.php" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3"  value="<?php echo $row_recados['nomeVoluntario']; ?>">
					</div>
                </div>

                <div class="form-group">
					<label class="col-sm-2 control-label">Sobrenome</label>
					<div class="col-sm-10">
						<input type="text" name="sobrenome" class="form-control" id="inputEmail3"  value="<?php echo $row_recados['sobrenomeVoluntario']; ?>">
					</div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label">Data de Nascimento</label>
					<div class="col-sm-10">
						<input type="text" name="data" class="form-control" id="inputEmail3"  value="<?php echo $row_recados['datanascVoluntario']; ?>">
					</div>
                </div>
                
				<div class="form-group">
					<label class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="E-mail" value="<?php echo $row_recados['emailVoluntario']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">						
						<textarea  name="senha" class="form-control" rows="3"><?php echo $row_recados['senhaVoluntario']; ?></textarea>						
					</div>
				</div>
						
				<input type="hidden" name="id" value="<?php echo $row_recados['idVoluntario']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Alterar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>