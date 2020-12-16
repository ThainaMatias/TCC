<?php
	include_once('crud/conexao.php');
	
	$id = $_GET['id'];

	//Buscar os dados referente ao recado neste id
	$result_recados = "SELECT * FROM tbl_usuario WHERE idUsuario = '$id' LIMIT 1";
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
			<form class="form-horizontal" method="POST" action="processar_editar_U.php" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3" value="<?php echo $row_recados['nomeUsuario']; ?>">
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label">Data de Nascimento</label>
					<div class="col-sm-10">
						<input type="text" name="datanasc" class="form-control" id="inputEmail3" value="<?php echo $row_recados['datanascUsuario']; ?>">
					</div>
                </div>

                <div class="form-group">
					<label class="col-sm-2 control-label">CPF</label>
					<div class="col-sm-10">
						<input type="text" name="cpf" class="form-control" id="inputEmail3"  value="<?php echo $row_recados['cpfUsuario']; ?>">
					</div>
                </div>
                
				<div class="form-group">
					<label class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control" id="inputEmail3"  value="<?php echo $row_recados['emailUsuario']; ?>">
					</div>
				</div> 
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">						
						<textarea  name="senha" class="form-control" rows="3"><?php echo $row_recados['senhaUsuario']; ?></textarea>						
					</div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label">Situação</label>
					<div class="col-sm-10">						
						<textarea  name="situacao" class="form-control" rows="3"><?php echo $row_recados['situacoe_id']; ?></textarea>						
					</div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label">Nivel</label>
					<div class="col-sm-10">						
						<textarea  name="nivel" class="form-control" rows="3"><?php echo $row_recados['niveis_acesso_id']; ?></textarea>						
					</div>
				</div>
						
				<input type="hidden" name="id" value="<?php echo $row_recados['idUsuario']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Alterar</button>
						<a href="administrativoU.php"><button type='button' class='btn btn-success'>Voltar</button></a>
					</div>
				</div>
				
			</form>
		</div>
	</body>
</html>