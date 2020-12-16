<?php session_start(); ?>
<?php include_once "header.php"?>
 <?php include_once "menuresp.php"?>
 

 
<style>
	.avatar {
		vertical-align: middle;
    width: 35px;
    height: 28px;
    border-radius: 50%;
    margin-top: 2%;
    margin-left: 4%;
}

#container{
	margin-left: 33%;
	width: 30%;
	margin-top: -1.5%;
}
@media screen and (max-width: 600px) {
#container {
    margin-left: 11%;
    width: 74%;
    margin-top: -17.5%;
}
}
</style>

<div class="container" id="container" >

<ul class="list-group list-group-flush">
<img src="imagens/icon.png" alt="Avatar" class="avatar">
	<li class="list-group-item"> <?php	echo "Nome: ". $_SESSION['usuarioNome'];?> </li>
	<br>
	<li class="list-group-item"><?php echo "Data de Nascimento: ". $_SESSION['usuariodata']; ?></li>
	<br>
	<li class="list-group-item"><?php echo "CPF: ". $_SESSION['usuariocpf']; ?></li>
	<br>
	<li class="list-group-item"><?php echo "Email: ". $_SESSION['usuarioEmail']; ?></li>
	<!--<br>
	<li class="list-group-item"><?php //echo "Senha: ". $_SESSION['usuariosenha']; ?> </li> -->
</ul>
</div>
<br>
 <!-- FOOTER-->
 <?php include_once "footer.php"?>