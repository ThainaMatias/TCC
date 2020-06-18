<?php
// Conexão com banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuario";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error()){
	echo "Erro na conexão: ".mysqli_connect_error();

}
?>
