<?php
	include_once("crud/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
//	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$recado = mysqli_real_escape_string($conn, $_POST['recado']);
	
	$result_recados = "UPDATE recados SET nome='$nome',recado='$recado' WHERE id = '$id'";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativo.php'>
				<script type=\"text/javascript\">
					alert(\"Recado alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativo.php'>
				<script type=\"text/javascript\">
					alert(\"Recado não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>