<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>

<style>


/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 89%;
  padding: 0 4px;
  margin-left: 6%;
}
.h6{
    text-align: center;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    width: 20%;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    width: 20%;
}
.btn:not([disabled]):not(.disabled) {
    cursor: pointer;
    margin-left: 41%;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 89%;
  }
  .btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    width: 22%;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    width: 22%;
}
.btn:not([disabled]):not(.disabled) {
    cursor: pointer;
    margin-left: 37.9%;
}
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>


  <h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:0.5%">Como criar um email</h2>
  <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
  <h5 style="text-align:center; font-family:Arial; margin-left: 10%; margin-right:10%;">Escolha em qual plataforma quer criar seu email, siga o passo a passo
para que você possa se cadastrar e pedir o auxílio de nossas voluntárias.</h5>
  </div>



<div class="card"> 
<br>

<!-- Outlook -->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Outlook
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Como criar um email no outlook</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="background-color: white;">
        <div class="column">
      <h5>Passo 1</h5>
    <img src="imagens/criaa.png" style="width:100%" class="center">
    <h6>Se você não tem uma conta ou prefere criar uma nova para se cadastrar em nosso site, clique em "Crie uma".</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 2</h5>
    <img src="imagens/criaa2.png" style="width:100%" class="center">
    <h6>Nesse passo é possível colocar o nome que preferir para seu email.</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 3</h5>
    <img src="imagens/criaa3.png" style="width:100%" class="center">
    <h6>Sua senha deve ser forte mas fácil de lembrar. Clique em "Exibir senha" para que você visualize o que esta digitando.</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 4</h5>
    <img src="imagens/criaa4.png" style="width:100%" class="center">
    <h6>Coloque o nome e sobrenome que preferir como está no exemplo, lembrando sempre que não é necessário ser seu nome verdadeiro.</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 5</h5>
    <img src="imagens/criaa5.png" style="width:100%" class="center">
    <h6>Sua data de nascimento também não precisa ser verdadeira, mas se atente para não colocar como <b>menor de idade</b>, pois <b>não</b> 
    será válido.</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 6</h5>
    <img src="imagens/criaa6.png" style="width:100%" class="center">
    <h6>Esse passo é apenas para segurança do email.</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 7</h5>
    <img src="imagens/cria7.png" style="width:100%" class="center">
    <h6>No último passo, você pode escolher se quer deixar seu email conectado, assim não precisará logar de novo quando for entrar 
        nas próximas vezes.</h6>
        <h6>Clique em <b>sim ou não</b> e estará pronto seu email.</h6>
    <br>
    </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
    </div>
  </div>
<br>
  

  <!-- Gmail -->

  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModa2">
   Gmail
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModa2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Como criar um email no gmail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="background-color: white;">
        <div class="column">
      <h5>Passo 1</h5>
    <img src="imagens/gmail1.png" style="width:100%" class="center">
    <h6>Se você não tem uma conta ou prefere criar uma nova para se cadastrar em nosso site, clique em "Crie uma nova Conta Google".</h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 2</h5>
    <img src="imagens/gmail2.png" style="width:100%" class="center">
    <h6>Nesse passo é possível colocar o nome que preferir no espaço nome e sobrenome, não necessáriamente precisa ser o seu
        o mesmo vale para seu email e uma senha forte mas fácil de lembrar. </h6>
    <br>
    </div>

    <div class="column">
      <h5>Passo 3</h5>
    <img src="imagens/gmail3.png" style="width:100%" class="center">
    <h6>No último passo, não é necessário colocar seu número de telefone ou um email de recuperação, a data de nascimento não precisa 
        ser a sua se preferir, mas cuidado para não colocar como <b>menor de idade</b>, pois <b>não</b> será válido. Seu gênero fica a seu criterio.
    </h6>
    <h6>Clique em <b>próximo</b>, aceite os termos de uso e estará pronto seu email do Google.</h6>
    <br>
    </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
    </div>
  </div>


 <br>
</div>


 <!-- FOOTER-->
 <?php include_once "footer.php"?>