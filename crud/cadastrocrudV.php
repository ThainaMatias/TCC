<?php
//conexão
include "conexao.php";


$banco = "INSERT INTO tbl_voluntario (idVoluntario, nomeVoluntario, sobrenomeVoluntario, datanascVoluntario, cpfVoluntario, profVoluntario, emailVoluntario, senhaVoluntario, situacoe_id, niveis_acesso_id ) 
VALUES (' ', '$_POST[nome]', '$_POST[sobrenome]', '$_POST[dtnasc]' ,'$_POST[cpf]', '$_POST[prof]', '$_POST[prependedtext]','$_POST[psw]', '2', '2')";
	
  
if (mysqli_query($conn, $banco)) {

  header("Location: http://localhost/TCC-Site/indexpdf.php");
} else {
  echo "Error: " . $banco . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


//$queryBase = 'SELECT 
//u.*, r.CadastroMatricula, r.CadastroNome
//FROM ugaf_setor u
//LEFT JOIN tblcadastro r ON u.SetorResponsavel = r.CadastroMatricula
//WHERE SetorTipo = 3';



