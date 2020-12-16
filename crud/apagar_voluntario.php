<?php
	include_once("conexao.php");
	$id = $_GET['id'];
	
	$result_recados = "DELETE FROM tbl_voluntario WHERE idVoluntario = '$id'";
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=indexV.php'>
				<script type=\"text/javascript\">
					alert(\"Voluntária apagado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=indexV.php'>
				<script type=\"text/javascript\">
					alert(\"Voluntária não foi apagado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>