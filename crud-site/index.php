<!DOCTYPE html>
<html>

<head>
    <title>Violência Doméstica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

         /* Make the image fully responsive */
        
         .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .carousel-control-next,
        .carousel-control-prev {
            width: 20%;
        }
        .carousel-indicators li {
            background-color: #fa0d87;
        }
        span.carousel-control-next-icon {
            color: #fa0d87;
        }

        .container {
            width: 50vw;
            height: 100vh;
            flex-direction: row;
            justify-content: center;
            margin-left: 300px;
            margin-right: 600px;
            margin-bottom: 700px;
        }
        img {
           border-radius: 8px;
           border: 1px solid #bb154d;
            }
        img:hover {
           box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
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

    <div class="container ">
        <!-- Carousel-->
        <div id="demo" class="carousel" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0"></li>
                <li data-target="#demo " data-slide-to="1 "></li>
                <li data-target="#demo " data-slide-to="2 "></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <img src="imagens/imagem1.png " alt="Teste " width="1100 " height="500 ">
                </div>
                <div class="carousel-item ">
                    <img src="imagens/imagem2.png " alt="Teste2 " width="1100 " height="500 ">
                </div>
                <div class="carousel-item ">
                    <img src="imagens/imagem3. " alt="Teste3 " width="1100 " height="500 ">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev " href="#demo " data-slide="prev ">
                <span class="carousel-control-prev-icon "></span>
            </a>
            <a class="carousel-control-next " href="#demo " data-slide="next ">
                <span class="carousel-control-next-icon "></span>
            </a>
        </div>
    </div>
    <!-- Fim Carousel-->
    


    
</body>

</html>
