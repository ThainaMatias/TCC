<?php
// Conexão com banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco_tcc";
//$banco = "celke";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($conn, "utf8");

if(mysqli_connect_error()){
	echo "Erro na conexão: ".mysqli_connect_error();

}

	//$servidor = "localhost";
	//$usuario = "root";
	//$senha = "";
	//$dbname = "celke";
	
	//Criar a conexao
	//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>
