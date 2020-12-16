<?php

include "crud/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$banco = "UPDATE tbl_usuario SET nomeUsuario ='$nome', senhaUsuario = '$senha' WHERE idUsuario = '$id'";
if (mysqli_query($conn, $banco)) 
{
	echo "Senha alterada com sucesso!";
}
else
{
	echo "Falha na alteracao da senha";
}

?>