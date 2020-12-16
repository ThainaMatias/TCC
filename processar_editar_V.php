<?php
	include_once("crud/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $sobre = mysqli_real_escape_string($conn, $_POST['sobre']);
    $datanasc = mysqli_real_escape_string($conn, $_POST['datanasc']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $prof = mysqli_real_escape_string($conn, $_POST['prof']);
	$email = mysqli_real_escape_string($conn, $_POST['email']); 
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $situacao = mysqli_real_escape_string($conn, $_POST['situacao']);
    $nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
	
	$result_recados = "UPDATE tbl_voluntario SET nomeVoluntario='$nome', sobrenomeVoluntario='$sobre', datanascVoluntario='$datanasc', cpfVoluntario='$cpf', profVoluntario='$prof', emailVoluntario='$email', senhaVoluntario='$senha', situacoe_id='$situacao', niveis_acesso_id='$nivel'  WHERE idVoluntario = '$id'";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativoV.php'>
				<script type=\"text/javascript\">
					alert(\"Recado alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativoV.php'>
				<script type=\"text/javascript\">
					alert(\"Recado não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>