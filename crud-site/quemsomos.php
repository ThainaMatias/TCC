

<title>Violência Doméstica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
.bg-dark {
            background-color: #6FCACB !important;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color:  #f8d7e2;
        }
        
        .navbar {
            padding: 0.5rem;
        }
        
        body {
            font-size: 1.1rem;
            background-color: #ffffff;
        }
        
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 4rem;
            color: #8828EF;
            text-transform: capitalize;
            font-weight: bold;
            font-family: Candara;
        }

        h3,h2,h1{
            color: black;
            font-family: Candara;
        }
        p{
            color: black;
            font-family: Candara;
        }
        img {
            margin-left: 11px;
            margin-right: -78px;
            width:42px;
            
            }
        img:hover {
           box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
                  }
        .dropdown-item {
                        display: block;
                        width: 100%;
                        padding: .25rem 1.5rem;
                        clear: both;
                        font-weight: 400;
                        color: #8828EF;
                        text-align: inherit;
                        white-space: #6FCACB;
                        background-color:#6FCACB;
                  }
         .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
                background-color:#6FCACB ;
            }

            /* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #90dcdd;
  margin-left: 105px;
  margin-right: 96px;
  font-weight: bold;
  font-family: Candara;
}

.column {
  float: left;
  width: 23.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #EAFFFF;
  margin: 8px;
  margin-left: 228px;
  margin-right: 600px;
  width: 16vw;
  height: 70vh;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #8828EF;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<!-- Menu -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar" href="index.php">
        <img src="imagens/logo5.png" alt="logo">
        </a> 

        <!-- Links -->
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="nav-link" href="#">Nome do Site</a>
            </li>
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

    <div class="header">
      <h2>Quem Somos</h2>
    </div>
    <br>
   
    
<div class="row">
  <div class="column">
    <div class="card">
      <img src="imagens/teste.png" alt="Jane" style="width:185px; margin-top: 4%;">
      <br>
      <div class="container">
        <h5>Mara e eu</h5>
        <p class="title" style="color: black;">Fundadoras desse site foda</p>
        <p>thaina@example.com</p>
        <p><button class="button">Contato</button></p>
      </div>
    </div>
  </div>

 <div class="column">
    <div class="card">
      <img src="imagens/teste2.png" alt="Mike" style="width:185px; margin-top: 4%;">
      <br>
      <div class="container">
        <h5>Mara, Leticia e eu</h5>
        <p class="title" style="color: black;" >Fundadoras desse site foda</p>
        <p>nois@example.com</p>
        <p><button class="button">Contato</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="imagens/teste3.png" alt="John" style="width:185px; margin-top: 4%;">
      <br>
      <div class="container">
        <h5>Skol</h5>
        <p class="title" style="color: black;">Meu doguinho, coisa mais linda</p>
        <p>skol@example.com</p>
        <p><button class="button" >Contato</button></p>
      </div>
    </div> 
</div>

</div>
    
    