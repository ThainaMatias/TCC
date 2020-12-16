<?php
	session_start();
?>
<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>

  <style>
	  .card{
      /*  background-image: url(imagens/body10.jpg); */
      background-color: white;
        background-size: cover;
        max-width: 100%;
	    height:auto;
        margin-top: -1%;
	   }
	   
	   /* sign in FORM */
	   #logreg-forms{
            width:860px;
            margin:10vh auto;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }
        #logreg-forms form {
            width: 100%;
            max-width: 395px;
            padding: 15px;
            margin: auto;
        }
        #logreg-forms .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        #logreg-forms .form-control:focus { z-index: 2; }
        #logreg-forms .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        #logreg-forms .form-signin input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #logreg-forms .social-login{
            width:390px;
            margin:0 auto;
            margin-bottom: 14px;
        }
        #logreg-forms .social-btn{
            font-weight: 100;
            color:white;
            width:190px;
            font-size: 0.9rem;
        }

        #logreg-forms a{
            display: block;
            padding-top: 0px;
            color: black;
        }

        #logreg-form .lines{
            width:200px;
            border:1px solid red;
        }


        #logreg-forms button[type="submit"]{ margin-top:10px; }

        #logreg-forms .facebook-btn{  background-color:#3C589C; }

        #logreg-forms .google-btn{ background-color: #DF4B3B; }

        #logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

        #logreg-forms .form-signup .social-btn{ width:210px; }

        #logreg-forms .form-signup input { margin-bottom: 2px;}

        .form-signup .social-login{
            width:210px !important;
            margin: 0 auto;
        }

    



@media screen and (max-width: 600px) {
    #logreg-forms form {
            width: 88%;
            max-width: 838px;
            padding: 15px;
            margin: auto;
            margin-left: 7%;
        }

        #logreg-forms{
            width:353px;
            margin:10vh auto;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }
}
  </style>

    <div class="card">

	<div id="logreg-forms">
      <form class="form-signin" method="POST" action="valida.php">
		<h1 class="h3 mb-3 font-weight-normal" style="text-align: center; margin-top:1%">Login</h1>
		
		<!-- Email -->
		<div class="form-group">
		<label for="inputEmail" class="col-md-4 control-label" style="color: black; margin-left: -4%;" >Email:</label>
		<div class="col-md-16">
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Digite seu Email" required autofocus>
		</div>
		</div>
		
		<!-- Senha -->
		<div class="form-group">
		<label for="inputPassword" class="col-md-4 control-label" style="color: black; margin-left: -4%;">Senha:</label>
		<div class="col-md-16">
		<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Digite sua Senha" required>
		<input type="checkbox" onclick="myFunction()"> Mostrar Senha
		</div>
		</div>
		
		<!-- Entrar -->
		<!--<button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button> -->
		<button class="btn btn-dark btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
			<a href="#" id="forgot_pswd" style="color:black;">Esqueceu sua senha?</a>
	  </form>
	  
	  <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Digite seu Email " required="" autofocus="">
                <button class="btn btn-dark btn-block" type="button" style="margin-top: 2%;">Redefinir Senha</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i>Voltar</a>
			</form> 
            

	  <p class="text-center text-danger" style="background-color: white;">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<!--<p class="text-center text-success">
			//<?php 
			//if(isset($_SESSION['logindeslogado'])){
		//		echo $_SESSION['logindeslogado'];
		//		unset($_SESSION['logindeslogado']);
		//	}
			?>
		</p> -->
    </div>
    </div> <!-- /container -->

    <!-- FOOTER-->
 <?php include_once "footer.php"?>

	<script>
    function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

//FUNÇÃO PARA MOSTRAR A SENHA
function myFunction() {
  var x = document.getElementById("inputPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script> 
    

