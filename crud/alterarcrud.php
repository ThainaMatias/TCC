<?php

include "conexao.php";

//ERRADOOOOOOOOOOOOOOOOOOOOOO
$usuario = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$banco = "UPDATE cadastro_aluno SET senha = '$senha', email = '$email' ,datanasc = '$datanasc' WHERE nome = '$usuario'";
if (mysqli_query($conn, $banco)) 
{
	echo "Senha alterada com sucesso!";
}
else
{
	echo "Falha na alteracao da senha";
}

?>