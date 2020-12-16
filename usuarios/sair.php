<?php
	session_start();
	include_once "header.php";
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNiveisAcessoId'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
    
  
?>


<div class="alert alert-danger" style="margin-top: 1%;">
  <strong>Deslogado</strong> com sucesso, volte ao site<a href="http://localhost/TCC-Site/index.php" class="alert-link"> clicando aqui</a>.
</div>

