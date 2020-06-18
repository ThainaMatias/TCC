<?php

include "conecta_banco.php";

//ERRADOOOOOOOOOOOOOOOOOOOOOO
$usuario = $_POST['nome'];
$idade = $_POST['datanasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$banco = "UPDATE cadastro_aluno SET senha = '$senha', email = '$email' ,datanasc = '$idade' WHERE nome = '$usuario'";
if (mysqli_query($conexao, $banco)) 
{
	echo "Senha alterada com sucesso!";
}
else
{
	echo "Falha na alteracao da senha";
}

?>