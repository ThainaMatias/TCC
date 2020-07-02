<?php include_once "header.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        
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
    


    
