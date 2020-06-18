<!DOCTYPE html>
<html>

<head>
    <title>Violência Doméstica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <style>
       .bg-dark {
            background-color: #bf2156!important;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color:  #f8d7e2;
        }
        
        .navbar {
            padding: 0.5rem;
        }
        
        body {
            font-size: 1.1rem;
            background-color: #dedbdc;
        }
        
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 2rem;
            padding-left: 4rem;
        }

        
        h2 {
            color: #bb154d;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 380px;
            margin-right: 1000px;
            line-height: 2.2;
            
        }
        h6{
            color: #bb154d;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 280px;
        }
        
        p{
            margin-left: 310px;
        }

        label {
            color: #bf2156;
        }
        form{
            margin-left: 200px;
            margin-right: 200px;
        }
        
        .btn-success{
            color: #fff;
    background-color: #fa0d87;
    border-color: #fa0d87;
   
        }
        .container {
            width: 70vw;
            height: 130vh;
            flex-direction: row;
            justify-content: center;
            margin-left: 190px;
            margin-right: 600px;
            background-color: #a49c9f;
        }
 a.link{
     color:#fa0d87;
     font-family: Arial, Helvetica, sans-serif;
           
 }

    </style>


</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
        <img src="imagens/logo.png" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="tipos.php">Tipos de Violência</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              SOS
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="chat.php">Chat</a>
                    <a class="dropdown-item" href="denuncie.php">Denuncie</a>
                    <a class="dropdown-item" href="ongs.php">ONGs</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relatos.php">Relatos</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Informações
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="lei.php">Lei Maria da Penha</a>
                    <a class="dropdown-item" href="dados.php">Gráficos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="quemsomos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cadastro.php"><i class="fa fa-fw fa-user"></i>Cadastre-se</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container">

    <h2><strong>Cadastro</strong></h2>
        <h6>Cadastre-se para receber ajuda de um profissional</h6>
        <br>

       
  <form action="cadastrar.php" method="POST">

  <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome" >
    </div>

  <div class="form-group">
      <label for="sobrenome">Sobrenome:</label>
      <input type="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
    </div>

    <div class="form-group">
      <label for="datanasc">Data de Nascimento:</label>
      <input type="datanasc" class="form-control" id="datanasc" placeholder="  /  / " name="datanasc">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
    </div>

    <button type="submit" class="btn btn-success ">Cadastrar</button>
  </form>
  <p>Já tem conta?  <a class="link" href="#">Acesse aqui</a> </p> 
</div>

<!-- CADASTRO ANTIGO COM VALIDAÇÃO 
    <div class="container">
        <h2><strong>Cadastro</strong></h2>
        <h6>Cadastre-se para receber ajuda de um profissional</h6>

<br>
        <div class="row mb-5">
            
        <form action="cadastrar_usuario.php" class="was-validated" method="POST">
       
        
            <div class="form-group ">
                <label for="name ">Nome (Real ou fictício)</label>
                <input type="text " class="form-control " size="80%" id="name " placeholder="Enter nome" name="nome" required>
                <div class="valid-feedback ">Válido.</div>
               <div class="invalid-feedback "> Escreva seu nome.</div>
            </div>
       
            <div class="form-group ">
                <label for="sobrenome">Sobrenome</label>
                <input type="text " class="form-control " id="sobrenome" placeholder="Enter sobrenome" name="sobrenome" required>
                <div class="valid-feedback ">Válido.</div>
               <div class="invalid-feedback "> Escreva seu sobrenome.</div>
            </div>

            <div class="form-group ">
                <label for="idade">Data de Nascimento</label>
                <input type="text" class="form-control " id="idade" placeholder="Enter idade" name="idade" required>
               <div class="valid-feedback ">Válido.</div>
               <div class="invalid-feedback "> Escreva seu idade.</div> 
            </div>

            <div class="form-group ">
                <label for="e-mail ">Email</label>
                <input type="text " class="form-control " id="e-mail " placeholder="Enter email " name="email" required>
                <div class="valid-feedback ">Válido.</div>
               <div class="invalid-feedback ">Escreva seu email de maneira correta.</div>
            </div>

            <div class="form-group ">
                <label for="pwd">Senha</label>
                <input type="password" class="form-control " id="pwd " placeholder="Enter password " name="senha" required>
                <div class="valid-feedback ">Válido.</div>
               <div class="invalid-feedback ">Senha deve conter no apenas 8 digitos.</div>
            </div>
            <br>


            <button type="submit" class="btn btn-success ">Cadastrar</button>
            <a href="consultar_usuario.php" class="btn btn-info "> Lista de Usuarios </a> 
        </form>
        </div>
        <p>Já tem conta?  <a class="link" href="#">Acesse aqui</a> </p> 
                
      
    </div> -->

</body>

</html>