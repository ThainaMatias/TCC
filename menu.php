<?php include_once "header.php" ?>


<!-- CSS DO MENU -->
<style>

 /* Cor do Menu  */
 .bg-dark {
            background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%) !important;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color:  #f8d7e2;
        }
        /* Tamanho do Menu - Altura */
        .navbar {
            padding: 0.5rem;
        }
        /* Fundo  */
        body {
            font-size: 1.1rem;
            background-color: #ffffff;
        }
        
        /* Itens/Letras do Menu  */
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 4rem;
            color: #8828EF;
            text-transform: capitalize;
            font-weight: bold;
            font-family: Candara;
        }

        /* Logo do Menu  */
        img {
            margin-left: 11px;
            margin-right: -78px;
            width:42px;
            
            }
         /* Itens/Letras Janelinha do Menu  */
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
                        font-weight: bold;
                  }
        

             /* Logo do Menu  */
        img {
            margin-left: 11px;
            margin-right: -78px;
            width:42px;
            
            }

            /* Janelinha do Menu*/
         .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
                background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);
            }

         /* Itens/Letras Janelinha do Menu  */
        .dropdown-item {
                        display: block;
                        width: 100%;
                        padding: .25rem 1.5rem;
                        clear: both;
                        font-weight: 400;
                        color: #8828EF;
                        text-align: inherit;
                        background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);
                        font-weight: bold;
                  }
        
            

</style>
<!-- Menu -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar" href="index.php">
        <img src="imagens/logo5.png" alt="logo">
        </a> 

        <!-- Itens do Menu/Links -->
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="nav-link" href="menuteste.php">Nome do Site</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tipos.php">Tipos de Violência</a>
            </li>
            <!-- Janelinha -->
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

            <!-- Janelinha -->
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