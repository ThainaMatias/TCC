<?php

include "conecta_banco.php";


$id = $_POST['id'];

$banco = "DELETE FROM cadastro_usuario WHERE ";

if(mysqli_query($conexao, $banco))
{
	echo "Registro excluido com sucesso";
}
else
{
	echo "Falha na exclusao!";
}

?>

