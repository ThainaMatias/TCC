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
            width: 10%;
        }
        .carousel-indicators li {
            background-color: #fa0d87;
        }
        span.carousel-control-next-icon {
            color: #fa0d87;
        }

        .container {
            width: 50vw;
            height: 93vh;
            flex-direction: row;
            justify-content: center;
            margin-left: 300px;
            margin-right: 600px;
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
    <br>

    <br>
    <h2>Violência doméstica no Brasil (dados)</h2>
    <br>
    <p>Com base nesses registros, no Brasil, a cada hora, 536 casos de agressão física a mulheres são registrados. Cerca de 1,6 milhão de mulheres sofrem espancamento. Os dados mostraram foram divulgados (Instituto Datafolha, 2019) a pedido do FBSP (Fórum
        Brasileiro de Segurança Pública), referente à violência doméstica. Segundo levantamento, 76,4% das vítimas conheciam o autor e a maioria aconteceu dentro de casa. Esta estatística se mantém nos mesmos patamares ao longo da última década, mesmo
        com o avanço na legislação, como por exemplo a aprovação da Lei Maria da Penha, em 2006.</p>

</body>

</html>