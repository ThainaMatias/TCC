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
            width: 70vw;
            height: 170vh;
            flex-direction: row;
            justify-content: center;
            margin-left: 190px;
            margin-right: 600px;
            background-color: #a49c9f;
        }
        h3,h1{
            color: black;
        }
        p{
            color: black;
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
    <br>

    <br>
<div class="container">

    <h1> Tipos de Viôlencia Doméstica</h1>

    <br>

    <h3>Violência Física:</h3>
    <p class="text-justify">
        Violência Física é definida pelo uso da força física que ofenda o corpo da mulher, 
        sendo reconhecida por hematomas, arranhões, queimaduras e fratura. É o tipo de violência mais identificável.  
        Essa violência é a mais notada pela sociedade, dentre todas as outras. Fere o emocional da vítima, deixando traumas. 
        Ela é mais fácil de denunciar, pois deixa marcas visíveis
        no corpo da mulher.
    </p>
    <br>

    <h3>Violência Psicológica:</h3>
    <p class="text-justify">
        A violência psicológica é um tipo de agressão em que o corpo da mulher não é lesionado, 
        mas sim a mente, que na maioria das vezes, 
        não é perceptível pela vítima. Pode ser atingido não apenas pela vítima, 
        como também a todos que presenciam o momento da
        violência. Ameaças, rejeições, humilhações ou discriminações são exemplos de agressão psicológica.
        De acordo com o levantamento do Fórum Brasileiro de Segurança Pública com o Datafolha, a violência por meio de ofensas, 
        xingamentos ou humilhação foi a mais comum no Brasil em 2018, atingindo 22% das mulheres. 
        Geralmente esse tipo de violência precede a violência física.
    </p>

    <h3>Violência Sexual:</h3>
    <p class="text-justify"> 
        A violência sexual envolve ato sexual ou tentativa de ato sexual sem autorização ou não consentimento da vítima. 
        Na maioria das vezes, os autores do crime são os esposos e companheiros, dentro do espaço doméstico, 
        o que muitas vezes passa despercebido. O agressor pode utilizar a força física, violência, ameaças, 
        chantagens e humilhações para cometer o ato.
        Segundo a pesquisa, “Violência sexual: estudo descritivo sobre as vítimas e o atendimento em um serviço universitário de referência 
        no Estado de São Paulo, as vítimas desse tipo de violência sofrem consequências graves. 
        Entre elas, a gravidez, infecções do sistema reprodutivo, doenças sexualmente transmissíveis (DSTs), 
        além de transtornos que podem causar sintomas psiquiátricos, como a depressão.
        </p>
    
    <h3>Violência Violência Patrimonial:</h3>
    <p class="text-justify"> Violência patrimonial é uma forma invisível de violência doméstica. 
        Ocorre quando o companheiro retém o dinheiro ou bens materiais da vítima para ter poder sobre ela. 
        Destruir ou reter objetos, ferramentas de trabalho, registros pessoais e outros bens e direitos da mulher são considerados 
        violência patrimonial.

    </p>
    <h3>Violência Moral</h3>
    <p class="text-justify"> Violência moral é o ato do agressor agredir a moral da mulher. 
        São ações repetitivas que baixam a autoestima e comprometem também a saúde mental da mulher.
        São considerados casos de violência mora: acusar a mulher de traição, expor a vida intimida e espalhar 
        algo sobre a mulher que seja mentira. Na maioria das vezes esse tipo de violência não é visível.
    </p>

</div>


</body>

</html>