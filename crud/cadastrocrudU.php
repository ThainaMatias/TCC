<?php
//conexão
include "conexao.php";


$banco = "INSERT INTO tbl_usuario (idUsuario, nomeUsuario,  datanascUsuario, cpfUsuario, emailUsuario, senhaUsuario, situacoe_id, niveis_acesso_id,termo) 
VALUES (' ', '$_POST[nome]',  '$_POST[dtnasc]', '$_POST[cpf]' , '$_POST[prependedtext]','$_POST[psw]', '1', '1','$_POST[exampleRadios]') ";

if (mysqli_query($conn, $banco)) {

  header("Location: http://localhost/TCC-Site/sucesso.php");
  
} else {
  echo "Error: " . $banco . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
