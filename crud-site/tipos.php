<title>Violência Doméstica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    .card {
   background-color: #EAFFFF;
   padding: 20px;
   margin-top: 20px;
   margin-left: 107px;
  margin-right: 96px;
  width: 83.7vw;
  
}

.bg-dark {
  background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%) !important;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color:  #f8d7e2;
        }

        .navbar {
            padding: 0.5rem;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 4rem;
            color: #8828EF;
            text-transform: capitalize;
            font-weight: bold;
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
            
* {
  box-sizing: border-box;
}

body {
    font-size: 1.1rem;
  background-color: white;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: #ff99cc;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: #DCC4F7;
  border: 4px solid #8828EF;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: -28%;
}

/* Place the container to the right */
.right {
  left: 28%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: #ff99cc;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #8828EF;
  margin-left: 105px;
  margin-right: 96px;
  font-weight: bold;
  font-family: Candara;
}
h3,p, h2{
            color: black;
            font-family: Candara;
        }

        

</style>

    <!--Menu-->
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
                    <a class="dropdown-item" href="chat.php"> Chat</a>
                    <a class="dropdown-item" href="denuncie.php">Denuncie</a>
                    <a class="dropdown-item" href="ongs.php"> ONGs</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relatos.php"> Relatos</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                 Informações
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="lei.php"> Lei Maria da Penha</a>
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
      <h2 style="color: #bff7f7;
            font-family: Candara;">Tipos de Violência Doméstica</h2>
    </div>
    <br>
    
    
    <div class="leftcolumn">
            <div class="card">
    <div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>Violência Física</h2>
      <p>Violência Física é definida pelo uso da força física que ofenda o corpo da mulher, sendo reconhecida por hematomas, arranhões, queimaduras e fratura. É o tipo de violência mais identificável.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Violência Psicológica</h2>
      <p>A violência psicológica é um tipo de agressão em que o corpo da mulher não é lesionado, mas sim a mente, que na maioria das vezes, não é perceptível pela vítima. Pode ser atingido não apenas pela vítima, como também a todos que presenciam o momento da violência. Ameaças, rejeições, humilhações ou discriminações são exemplos de agressão psicológica</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>Violência Sexual</h2>
      <p>A violência sexual envolve ato sexual ou tentativa de ato sexual sem autorização ou não consentimento da vítima.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Violência Patrimonial</h2>
      <p>Ocorre quando o companheiro retém o dinheiro ou bens materiais da vítima para ter poder sobre ela. Destruir ou reter objetos, ferramentas de trabalho, registros pessoais e outros bens e direitos da mulher são considerados violência patrimonial.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>Violência Moral</h2>
      <p>São ações repetitivas que baixam a autoestima e comprometem também a saúde mental da mulher. São considerados casos de violência mora: acusar a mulher de traição, expor a vida intimida e espalhar algo sobre a mulher que seja mentira.</p>
    </div>
  </div>
  
</div>
</div>
</div>