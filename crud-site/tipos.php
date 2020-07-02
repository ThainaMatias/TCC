     <?php include "header.php"?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
    <br>

    <br>
<div class="container">

    <h1> Tipos de Viôlencia Doméstica</h1>

    <br>

    <div id="accordion">
    <div class="card">>>
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        <h3>Violência Física:</h3>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        <p class="text-justify">
        Violência Física é definida pelo uso da força física que ofenda o corpo da mulher, 
        sendo reconhecida por hematomas, arranhões, queimaduras e fratura. É o tipo de violência mais identificável.  
        Essa violência é a mais notada pela sociedade, dentre todas as outras. Fere o emocional da vítima, deixando traumas. 
        Ela é mais fácil de denunciar, pois deixa marcas visíveis
        no corpo da mulher.
    </p>
        </div>
      </div>
    </div>
    </div>

   <!-- <h3>Violência Física:</h3>
    <p class="text-justify">
        Violência Física é definida pelo uso da força física que ofenda o corpo da mulher, 
        sendo reconhecida por hematomas, arranhões, queimaduras e fratura. É o tipo de violência mais identificável.  
        Essa violência é a mais notada pela sociedade, dentre todas as outras. Fere o emocional da vítima, deixando traumas. 
        Ela é mais fácil de denunciar, pois deixa marcas visíveis
        no corpo da mulher.
    </p>
    <ul>
        <li>Exemplo</li>
        <li>Exemplo</li>
        <li>Exemplo</li>
        <li>Exemplo</li>
        
    </ul>
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
    <ul>
        <li>Exemplo</li>
        <li>Exemplo</li>
        <li>Exemplo</li>
        <li>Exemplo</li>

    </ul>

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
    </p> -->

</div>


