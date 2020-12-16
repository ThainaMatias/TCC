<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>
   <!-- CSS -->
   <style>
  

/* sign in FORM */
#logreg-forms{
    width:794px;
    margin:10vh auto;
    background-color:white;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    margin-top: 8%;
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 14px;
  
}
#logreg-forms .form-control:focus { z-index: 2; }
#logreg-forms .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

#logreg-forms .social-login{
    width:390px;
    margin:0 auto;
    margin-bottom: 14px;
}
#logreg-forms .social-btn{
    font-weight: 100;
    color:white;
    width:190px;
    font-size: 0.9rem;
}

#logreg-forms a{
    display: block;
    padding-top:10px;
    margin-top: -10.3%; 
    margin-left: 34%; 
    color: black;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px; }

#logreg-forms .facebook-btn{  background-color:#3C589C; }

#logreg-forms .google-btn{ background-color: #DF4B3B; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

#logreg-forms .form-signup .social-btn{ width:210px; }

#logreg-forms .form-signup input { margin-bottom: 2px;}

.form-signup .social-login{
    width:210px !important;
    margin: 0 auto;
}

button#modal.btn.btn-link{
  margin-left: 0.5%;
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    background-color: transparent;
    margin-left: -4%;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
    margin-left: -7%;
}
/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
    
    #logreg-forms  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
        
        
    }
    #logreg-forms .social-btn:nth-child(1){
        margin-bottom: 5px;
    }
    #logreg-forms .social-btn span{
        display: none;
    }
    #logreg-forms  .facebook-btn:after{
        content:'Facebook';
    }
  
    #logreg-forms  .google-btn:after{
        content:'Google+';
    }
    
}


@media (min-width: 768px){
.col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 66.666667%;
}

.col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 53.333333%;
}

.col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    color: #111;
    
}
}



h11{
    color:red;
    
}
h5 {
    font-size: 1.25rem;
    margin-left: 8%;
    
}

div#demo.collapse.show{
  text-align: justify;
}

body{
     background-color: white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 Arial;
   }

   .bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-size: cover;

}
.bgimg-1 {
  background-image: url(imagens/teste1.jpg);
  min-height: 100%;
}

.bgimg-2 {
  background-image: url(imagens/body11.jpg);
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 1%;
    font-size: 180%;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px Arial;
  color: #111;
  
}
.modal-body {
    background-color: #fff;
    /* height: 900px; */
}


/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura */
@media screen and (max-width: 600px) {
          /* containers */
          .caption span.border {
  background-color: #111;
  color: #fff;
  padding: 4%;
  font-size: 100%;
  letter-spacing: 9px;
}

.p.help-block{
  text-align: center;
}
.btn-link {
    font-weight: 400;
    color: #007bff;
    background-color: transparent;
    margin-left: -5%;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
    margin-left: -10%;
}
}

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura*/
@media screen and (max-width: 600px) {
          /* containers */
          .bgimg-2 {
  background-image: url(imagens/body11.jpg);
  min-height: 178px;
}
#logreg-forms a{
    display: block;
    padding-top:10px;
    margin-top: -5%;
    margin-left: 0%;
    color: black;
}
#logreg-forms {
  width: 88%;
    margin-left: 6%;
    margin-top: 13%;
}

}



</style>

   <!-- CORPO-->

<div id="logreg-forms">
   <h5 style="margin-left: 21%; margin-top: -12%;"></h5>
   <br>
   <h2 style="color:#1c2331; font-family:Arial; text-align:center;">Cadastro</h2>

   <h4 style="margin-left: 15%; margin-right: 15%; font-size: 1.25rem; color: black; margin-top:2%; text-align:center;">
   Cadastre-se para receber auxílio e orientação das voluntárias.</h4>
   <h4 style="margin-left: 15%; margin-right: 15%; font-size: 1.25rem; color: black; margin-top:2%; text-align:center;"> Não se cale!</h4>
   <form class="form-horizontal" action="crud/cadastrocrudU.php" method="POST">
            <fieldset>
            <div class="panel panel-primary">
                <div class="panel-body">
            <div class="form-group">
            <div class="col-md-11 control-label">
                    <p class="help-block"><h11>*</h11> Campos Obrigatórios </p>
            </div>
            </div>

            <!-- Nome-->
            <div class="form-group">
            <label class="col-md-2 control-label" for="Nome" style="color: black;">Nome (Fictício se preferir) <h11>*</h11></label>  
            <p style="margin-left: 4%; color:#777777;"> Nome Fictício é apenas para respeitar seu anonimato.</p>
            <div class="col-md-12">
            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
            </div>
            </div>

            <!-- Data de Nascimento-->
            <div class="form-group">
            <label class="col-md-1 control-label" for="Nome" style="color: black;"> Data de Nascimento<h11>*</h11></label> 
            <div class="col-md-2">
            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" >
            </div>
            </div>

            <!-- CPF-->
            <div class="form-group">
            <label class="col-md-2 control-label" for="Nome" style="color: black;">CPF<h11>*</h11></label>  
            <p style="margin-left: 4%;  color:#777777;"> Essa informação é confidencial, não estará visível para todos, fique tranquila!</p>
            <div class="col-md-12">
          <!--  <input id="cpf" name="cpf" placeholder="" class="form-control input-md" required="" type="text" maxlength="11"  onblur="return verificarCPF(this.value)"> -->
            <input id="cpf" name="cpf" type="text" onkeyup="cpfCheck(this)" required="" class="form-control input-md" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );"> <span id="cpfResponse"></span></p>
            </div>
            </div>


            <!-- Email-->
            <div class="form-group">
            <label class="col-md-2 control-label" for="prependedtext" style="color: black; max-width: 125.666667%;">Email <h11>*</h11>
          <p style="margin-left: 0%; color:#777777;"> Caso não tenha ou não saiba como criar um email, nós te ajudamos! <a href="email.php">
              clique aqui </a> </p>
          </label>
            <div class="col-md-12">
                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
            </div>
            </div>

             <!-- Senha-->
            <div class="form-group">
            <label  class="col-md-2 control-label" for="psw" style="color: black;">Senha<h11>*</h11></label>
            <div class="col-md-12">
    <input type="password" id="psw" name="psw" class="form-control" placeholder="Números e letras, mínimo de 8 caracteres" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" 
    title="Sua senha deve conter números e letras, mínimo de 8 caracteres" required required maxlength="20">
    <input type="checkbox" onclick="myFunction()"> Mostrar Senha
            </div>
            </div>

           
<!-- TERMO DE USO -->
<div class="form-check">
<div class="col-auto my-1">
<div class="custom-control custom-checkbox mr-sm-6">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2" style="margin-left: auto;">
    Aceito os Termos de Proteção
  </label>
  </div>
  </div>
</div>
            <!-- Button to Open the Modal -->
  <button type="button" id="modal" class="btn btn-link" data-toggle="modal" data-target="#myModal">
  Termo de Proteção de dados
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Termo de Proteção dos dados pessoais</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        A Contratada, por si e por seus colaboradores, obriga-se, sempre que aplicável, a atuar no presente Contrato em conformidade com a Legislação vigente sobre proteção de dados relativos a uma pessoa física (“Titular”) identificada ou identificável (“Dados Pessoais”) e as determinações de órgãos reguladores/fiscalizadores sobre a matéria, em especial a Lei 13.709/2018 (“Lei Geral de Proteção de Dados”), além das demais normas e políticas de proteção de dados. Contratada obriga-se a:

a) Garantir a confidencialidade em todo e qualquer processo que envolva tratamento de dados pessoais, assegurando que tais informações permanecerão apenas entre as partes e enquanto vigorar o contrato.

b) Realizar o tratamento dos dados pessoais apenas para processos puramente necessários à perfeita execução do contrato.

c) Restringir o tratamento dos dados ao cumprimento da finalidade da coleta, qual seja, oferecer crédito, empréstimos, financiar a aquisição de produtos, usufruir de programas de benefícios, utilização para envio de comunicações de marketing direcionado, por e-mail, SMS e mídias sociais, e alimentação de cadastros positivos, de modo que atua em conformidade com o disposto no artigo 7º, incisos V e X, da LGPD.

d) Solicitar o consentimento do titular do dado, caso a finalidade do tratamento seja diferente do ajustado em contrato.

e) Armazenar os dados pessoais coletados de forma segura e pelo tempo estritamente necessário à execução do contrato.

f) Permitir e facilitar a revisão dos dados, quando solicitada pelo seu titular.

g) Em hipótese de tratamento de dados pessoais sensíveis, assegurar que o tratamento será único e exclusivamente para cumprir com a finalidade ajustada e de modo a possibilitar a perfeita execução do contrato.”
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
    </div>
  </div>
  

   </div>    
      </div>
            <!-- Botão -->
            <div class="form-group">
            <div class="col-md-8">
                <button id="Cadastrar" name="Cadastrar" class="btn btn-dark" type="Submit">Cadastrar</button>
            </div>
            </div>
</fieldset>
</form>
   </div>      
   </div>
<div class="bgimg-2">
  <div class="caption">
  
  </div>
</div> 

   



    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
//FUNÇÃO PARA MOSTRAR A SENHA
function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

//Quando o usuário clica no campo de senha, mostra a caixa de mensagem
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// Quando o usuário clicar fora do campo de senha, oculte a caixa de mensagem
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// Quando o usuário começa a digitar algo dentro do campo de senha
myInput.onkeyup = function() {
  //Validar letras minúsculas
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validar números
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validar comprimento
  if(myInput.value.length <= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
 
 // FORMATAÇÃO DE DATA
 $(document).ready(function () {
       $('#dtnasc').mask('99/99/9999');
       return false;
    });

    //VALIDAÇÃO DE CPF
    function verificarCPF(c){
        var i;
        s = c;
        var c = s.substr(0,9);
        var dv = s.substr(9,2);
        var d1 = 0;
        var v = false;
    
        for (i = 0; i < 9; i++){
            d1 += c.charAt(i)*(10-i);
        }
        if (d1 == 0){
            alert("CPF Inválido")
            v = true;
            return false;
        }
        d1 = 11 - (d1 % 11);
        if (d1 > 9) d1 = 0;
        if (dv.charAt(0) != d1){
            alert("CPF Inválido")
            v = true;
            return false;
        }
    
        d1 *= 2;
        for (i = 0; i < 9; i++){
            d1 += c.charAt(i)*(11-i);
        }
        d1 = 11 - (d1 % 11);
        if (d1 > 9) d1 = 0;
        if (dv.charAt(1) != d1){
            alert("CPF Inválido")
            v = true;
            return false;
        }
        if (!v) {
            alert(c + " CPF Válido")
        }
    }
    function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
      return false

    if (c == "00000000000")
      return false;
      if (c == "11111111111")
      return false;
      if (c == "22222222222")
      return false;
      if (c == "33333333333")
      return false;
      if (c == "44444444444")
      return false;
      if (c == "55555555555")
      return false;
      if (c == "66666666666")
      return false;
      if (c == "77777777777")
      return false;
      if (c == "88888888888")
      return false;
      if (c == "99999999999")
      return false;
    var r;
    var s = 0;

    for (i=1; i<=9; i++)
      s = s + parseInt(c[i-1]) * (11 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
      r = 0;

    if (r != parseInt(c[9]))
      return false;

    s = 0;

    for (i = 1; i <= 10; i++)
      s = s + parseInt(c[i-1]) * (12 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
      r = 0;

    if (r != parseInt(c[10]))
      return false;

    return true;
    }

    //Mascara do CPF
    function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
    }

    function fMascEx() {
    obj.value=masc(obj.value)
    }

    function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }

    cpfCheck = function (el) {
      document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
      if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
    }
    </script>

</body>
   <!-- FOOTER-->
<?php include_once "footer.php"?>