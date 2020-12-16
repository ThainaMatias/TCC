<?php
	include_once("crud/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $datanasc = mysqli_real_escape_string($conn, $_POST['datanasc']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$email = mysqli_real_escape_string($conn, $_POST['email']); 
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $situacao = mysqli_real_escape_string($conn, $_POST['situacao']);
    $nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
	
	$result_recados = "UPDATE tbl_usuario SET nomeUsuario='$nome', datanascUsuario='$datanasc', cpfUsuario='$cpf',emailUsuario='$email', senhaUsuario='$senha', situacoe_id='$situacao', niveis_acesso_id='$nivel'  WHERE idUsuario = '$id'";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativoU.php'>
				<script type=\"text/javascript\">
					alert(\"Recado alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativoU.php'>
				<script type=\"text/javascript\">
					alert(\"Recado não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>