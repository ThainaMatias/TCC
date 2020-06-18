<!DOCTYPE html>
<html>

<head>
    <title> Excluir Usuários </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">site - TCC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro_usuario.html">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="alterar_dados.php">Alterar Dados</a>
            </li>

        </ul>
    </nav>
    <br>


    <div class="container">
        <h2> Página para excluir Usuários: pesquisa por Nome </h2>
        <p>Escreva o nome do usuário que deseja excluir</p>

        <form action="excluir_usuario.php" class="was-validated" method="POST">
            <div class="form-group ">
                <label for="name ">Nome</label>
                <input type="text " class="form-control " id="name " placeholder="Enter nome" name="nome" required>
                <div class="valid-feedback ">Válido.</div>
                <div class="invalid-feedback "> Escreva seu nome completo.</div>
            </div>



            <button type="submit" class="btn btn-success ">Excluir</button>
            <a href="consultar_usuario.php" class="btn btn-info "> Lista de Usuários </a>
        </form>
    </div>

</body>

</html>