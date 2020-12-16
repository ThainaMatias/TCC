<?php
session_start();
?>
<?php include_once "header.php"?>
<?php include_once "menuresp.php"?>

        
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <style>
            #logreg-forms{
    width:794px;
    margin:10vh auto;
    background-color: white;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    margin-top: 8%;
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 10px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 14px;
    margin-left: 6%;
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
    color:lightseagreen;
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

select, textarea {
  width: 55%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #212529;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input.btn.btn-dark{
    background-color: #212529;
    font-family:Arial;
    font: 15px Arial;
    
}
input[type=submit]:hover {
  background-color: #212529;
}

input#myFile{
    margin-left: 6.5%;
}

label#pdf1.col-md-2.control-label{
    color: black;
    margin-left: -1%;
}
label.col-md-2.control-label{
    color: black;
    margin-left: 2.4%;
}
/* Mobile */

@media (min-width: 768px){
.col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 60.666667%;
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

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
          /* containers */
          .bgimg-2 {
  background-image: url(imagens/body11.jpg);
  min-height: 178px;
}

#logreg-forms {
    width: 100%;
    margin-left: 0.2%;
    margin-top: 29%;
}
input#myFile{
    width: 183%;
    margin-left: -1%;
    margin-top: -9%;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 14px;
    margin-left: 0%;
}
label#pdf1.col-md-2.control-label{
    color: black;
    margin-left: -4%;
}
label.col-md-2.control-label{
    color: black;
    margin-left: -4%;
}
input.btn.btn-dark{
    background-color: #212529;
    font-family:Arial;
    font: 15px Arial;
    
}
}
        </style>
        <div id="logreg-forms">
        <h5 style="margin-left: 21%; margin-top: -12%;"></h5>
   <br>
        <h4 style="color:#1c2331; font-family:Arial; text-align:center; margin-top:2%;">Cadastrar Atestado de Matricula</h4>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">
        <fieldset>
            <div class="panel panel-primary">
            <div class="panel-body">
            <div class="form-group">
            <div class="col-md-11 control-label">
                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
            </div>
            </div>
        <div class="form-group">
            <label  class="col-md-2 control-label" for="Nome">Nome<h11>*</h11></label>
            <input type="text" name="nome" placeholder="Digitar o nome do arquivo" class="form-control input-md"><br><br>
            <input  id="myFile" type="file" name="imagem"><br><br>
            
            </div>

            <div class="form-group">
            <div class="col-md-8">
            <input name="SendCadImg" type="submit" class="btn btn-dark" value="Finalizar Cadastro">
            </div>
            </div>
        </div>
                </div>
            
    </fieldset>
        </form>
        </div>

        
        <?php include_once "footer.php"?>