<?php
//conexão
include "conexao.php";


$banco = "INSERT INTO comentario (id, nome, comentario) 
VALUES (' ', '$_POST[nome]', '$_POST[comentario]')";
	
  
if (mysqli_query($conn, $banco)) {

  header("Location: http://localhost/TCC-Site/relatofeito.php");
  echo "Comentario feito com sucesso";
} else {
  echo "Error: " . $banco . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);