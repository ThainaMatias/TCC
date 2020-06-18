<?php
//conexão
include "conecta_banco.php";



$banco = "INSERT INTO cadastro_usuario (id, nome, sobrenome, idade, email, senha) 
VALUES (' ', '$_POST[nome]', '$_POST[sobrenome]', '$_POST[datanasc]',  '$_POST[email]','$_POST[pswd]')";
	
  
if (mysqli_query($conexao, $banco)) {

  echo "Cadastro feito com sucesso!";
} else {
  echo "Error: " . $banco . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>

