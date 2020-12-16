<?php
	include_once("crud/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$datanasc = mysqli_real_escape_string($conn, $_POST['datanasc']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	
	$result_recados = "UPDATE tbl_usuario SET nomeUsuario='$nome', datanascUsuario='$datanasc', emailUsuario='$email',
	senhaUsuario='$senha' WHERE idUsuario = '$id'";
	
	$resultado_recados = mysqli_query($conn, $result_recados);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= editar_U.php'>
				<script type=\"text/javascript\">
					alert(\"Dado alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=editar_U.php'>
				<script type=\"text/javascript\">
					alert(\"Dado não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>