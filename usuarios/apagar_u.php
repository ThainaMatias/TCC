<?php
	include_once("crud/conexao.php");
	$id = $_GET['id'];
	
	$result_recados = "DELETE FROM tbl_usuario WHERE idUsuario = '$id'";
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
					alert(\"Recado apagado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrativo.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Recado não foi apagado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>