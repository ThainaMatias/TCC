<?php 
include_once('crud/conexao.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    
    
    <style>
       /* Titulos */
       h3, h2{
            color: black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        /* Paragráfo  */
        p{
            color: black;
            font-family: Arial;
        }
   
      
        .navbar .navbar-nav .nav-link {
    color: white;
    font-family: Arial;
    text-transform: capitalize;
    font-size: 0.96rem;;
}
.navbar .navbar-toggler {
    color: white;
    border-color: white;
    
}
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
    color: white;
}

img#img {
    vertical-align: middle;
    border-style: none;
    width:92px;
    margin-left: 26px;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 58px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: white;
    text-align: left;
    list-style: none;
    background:  #A8A0B9;
    background-clip: padding-box;
    font-size: 1.1rem;
}

a.dropdown-item {
  color: white;
 
    font-family: Arial;
    font-size: 0.96rem;  
}

.fa-user:before {
    content: "\f007";
}
.btn-group>.btn:first-child {
    margin-left: 65px;
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid white;
}

.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
    color: white;
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: white;
}

.fixed-top {
  
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    background:  #A8A0B9;

}

@media (min-width: 768px){
.navbar-expand-md .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: 5.5rem;
}
      }
    </style>

  
    <!-- bg-primary, bg-success, bg-warning, bg-info and bg-danger sticky-top -->
    <nav class="navbar navbar-expand-md navbar  fixed-top">
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <i class="fas fa-bars"></i>
        </button>
        
        <a class="navbar-brand" href="index.php"><img id="img" src="imagens/logotest2-2.png"></a>
        <div class="collapse navbar-collapse" id="collapse_target">
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="tipos.php">Tipos de Violência</a>
           <!-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:#1c2331;"> -->
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="onde.php">Onde Denunciar</a>
          </li>

          <!-- Janelinha -->
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Apoio
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="ongs.php">Onde Buscar Apoio</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="chat1.php">Chat</a>
                </div>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="mural_de_recados.php"> Escreva seu Relato</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="quemsomos.php">Quem Somos</a>
          </li>
         

          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="perfilU.php" id="navbardrop" data-toggle="dropdown"><i class="fas fa-user-alt"></i> 
                <?php
                  echo " ". $_SESSION['usuarioNome'];	
                ?>
            </a>
                <div class="dropdown-menu">
                       <a class="dropdown-item" href="editar_u.php">Alterar dados</a>
                       <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sair.php">Sair</a> 
                </div>
            </li> 
          
          </li>
        </ul>
      </div>
      </nav>
      <br>
      <br>
      <br>
    
    
     