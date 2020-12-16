<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("crud/conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = ($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM tbl_usuario WHERE emailUsuario = '$usuario' && senhaUsuario = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

	
		
		$id = $_SESSION['usuarioId'];
	

		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if((isset($resultado)) || (isset($resultadoV))){
			$_SESSION['usuarioId'] = $resultado['idUsuario'];
			$_SESSION['usuarioNome'] = $resultado['nomeUsuario'];
			$_SESSION['usuariodata'] = $resultado['datanascUsuario'];
			$_SESSION['usuariocpf'] = $resultado['cpfUsuario'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['emailUsuario'];
			$_SESSION['usuariosenha'] = $resultado['senhaUsuario'];
		
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: usuarios/chat1.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
?>