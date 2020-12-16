<?php session_start(); ?>
<?php include "header.php"?>
<?php include_once "menuresp.php"?>


   <!-- CSS -->
   <style>

body{
     background-color: white;
     height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
   }

   .card {
    background-color: white;
    padding: 18%;
    margin-top: -1%;
    margin-left: 0%;
    width: 100%;
    height: 825px;
   }


/* Style the tab */
.tab {
  float: left;
  background-color: #e1c6fe;
  width: 30%;
  height: 300px;
  margin-top: -26%;
    margin-left: -26%;
    
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: #e1c6fe;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  font-family: Candara;
 
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ad68f7;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ad68f7;
}

/* Style the tab content */
.tabcontent {
  float: left;
    padding: 0px 7px;
    width: 122%;
    border-left: none;
    height: 790px;
    margin-top: -37.2%;
    margin-left: 4%;
    
}


.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-size: cover;
}

.bgimg-2 {
  background-image: url(imagens/body12.jpg);
  min-height: 100%;
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

.tablinks{
    font-family:Arial;
}

/* Consultas de mídia - Linha do timelime  responsiva em telas com menos de 600 px de largura (não sei o que muda) */
@media screen and (max-width: 600px) {
          /* containers */
          .caption span.border {
  background-color: #111;
  color: #fff;
  padding: 4%;
  font-size: 100%;
  letter-spacing: 10px;
}

.card {
    background-color: white;
    padding: 18%;
    margin-top: -5%;
    margin-left: -1%;
    width: 100%;
    height: 901px;
}


/* Style the tab */
.tab {
  float: left;
  background-color: #e1c6fe;
  width: 30%;
  height: 300px;
  margin-top: -26%;
    margin-left: -26%;
    
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: #e1c6fe;
  color: black;
  padding: 22px 0px;
  width: 121%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  font-family: Candara;
 
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ad68f7;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ad68f7;
}

.tabcontent {
  float: left;
    padding: 0px 7px;
    width: 122%;
    border-left: none;
    height: 790px;
    margin-top: -113.2%;
    margin-left: 4%;
    
}

}



</style>

 <!-- CORPO -->

<div class="card">

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'ComoDe')" id="defaultOpen">Lista de Delegacias</button>
<button class="tablinks" onclick="openCity(event, 'Santos')">Santos</button>
  <button class="tablinks" onclick="openCity(event, 'SV')">São Vicente</button>
  <button class="tablinks" onclick="openCity(event, 'Cubatao')">Cubatão</button>
  <button class="tablinks" onclick="openCity(event, 'PG')">Praia Grande</button>
  <button class="tablinks" onclick="openCity(event, 'Mongagua')">Mongaguá</button>
  <button class="tablinks" onclick="openCity(event, 'Itanhaem')">Itanhaém</button>
  <button class="tablinks" onclick="openCity(event, 'Peruibe')">Peruíbe</button>
  <button class="tablinks" onclick="openCity(event, 'Bertioga')">Bertioga</button>
  <button class="tablinks" onclick="openCity(event, 'Guaruja')">Guarujá</button>

</div>

<div id="ComoDe" class="tabcontent">
  <h3 style="font-family: Arial; margin-left:6%; margin-top:6%;">Procure Delegacias mais próximas em sua cidade</h3>
  <br>
  <p style="margin-left: 6%;">Aqui estão listadas todas as delegacias nas cidades da Baixada Santista, clique em sua 
cidade ou na cidade mais próxima para saber onde denunciar, lembre-se <b>NÃO SE CALE, DENUNCIE!</b></p>
</div>

<div id="Santos" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Santos</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher.</h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> Dr. Assis Corrêa, 50 - Gonzaga, Santos - SP, 11055-310</h5>
<h5 style="font-family: Arial;">Contato disponível pelo <a href="https://www.santos.sp.gov.br/?q=portal/delegacia-da-mulher" target="_black"> site </a> da instituição
</h5>
<h4 style="font-family: Arial; font-weight: bold;">(13) 3235-4222</h4>
</li>

</ul>
</div>

<div id="SV" class="tabcontent">
<h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">São Vicente</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher (DDM)<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> Rua Djalma Dutra, 132, Centro.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3467-3941</h4></h5>
</li>
</br>

</ul>
</div>

<div id="Cubatao" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Cubatão</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family:Arial;"><strong>Endereço:</strong> Avenida Brasil, 384, Jardim Casqueiro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3364-3885</h4></h5>
</li>
</br>

</ul>
</div>

<div id="PG" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Praia Grande</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> Avenida Dr. Roberto de Almeida Vinhas, 11084, Vila Tupi.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3471-8000</h4></h5>
</li>
</br>

</ul>
</div>

<div id="Mongagua" class="tabcontent">
  <h3 style="font-family: Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Mongaguá</h3>
  <ul>

<li><h4 style="font-family: Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> Avenida Monteiro Lobato, 4.654, Vila Atlântica.</h5>
<h4 style="font-family: Arial; font-weight: bold;">(13) 3448-2151</h4>
</li>
</br>
  </ul>
</div>

<div id="Itanhaem" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Itanhaém</h3>
  <ul>

  <h4 style="font-family:Arial; font-weight: bold;">Na ausencia de Delegacia da Mulher na sua cidade, você deverá ir para uma Delegacia mais próxima.</h4>
<br>
  <li><h4 style="font-family:Arial; font-weight: bold;">Delegacia Geral de Polícia<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> R. Leopoldino Araújo, 123</h5>
<h4 style="font-family: Arial; font-weight: bold;">(13) 3422-6061</h4>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">1º Distrito Policial de Itanhaém<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> R. Dr. Ricardo Falcão Rangel, 47 </h5>
<h4 style="font-family: Arial; font-weight: bold;">(13) 3422-1208</h4>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">2º Distrito Policial de Itanhaém<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> R. Pedro Américo, 800 </h5>
<h4 style="font-family: Arial; font-weight: bold;">(13) 3426-7100</h4>
</li>
</br>
  </ul>
</div>

<div id="Peruibe" class="tabcontent">
  <h3 style="font-family: Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Peruíbe</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;"><strong>Endereço:</strong> Rua Ministro Genésio de A Moura, 76, Centro.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3455-7665</h4></h5>
</li>
</br>
  </ul>
</div>

<div id="Bertioga" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Bertioga</h3>
  <ul>
  <h4 style="font-family:Arial; font-weight: bold;">Na ausencia de Delegacia da Mulher na sua cidade, você deverá ir para uma Delegacia mais próxima.</h4>
<br>
  <li><h4 style="font-family:Arial; font-weight: bold;">Delegacia Seccional de Polícia de Bertioga<h4>
<h5 style="font-family:Arial;"><strong>Endereço:</strong> Rua Manoel Gajo, 340 - Vila Clais, Bertioga - SP, 11250-000
<h4 style="font-family:Arial; font-weight: bold;">(13) 3317-4312</h4></h5>
</li>
</br>
</ul>
</br>
</div>

<div id="Guaruja" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:8%; margin-top:5%;">Guarujá</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Defensoria Pública</h4>
<h5 style="font-family:Arial;"><strong>Endereço:</strong> Avenida Adhemar de Barros, 1327
<h4 style="font-family:Arial; font-weight: bold;">(13) 3386-1676</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher (DDM)</h4>
<h5 style="font-family:Arial;"><strong>Endereço:</strong> Rua Washington, 227, Vila Maia.
À noite, fim de semana e feriados o atendimento é 
realizado na Delegacia de Polícia Sede de Guarujá, na Avenida Puglisi, 656, Centro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3386-1676</h4></h5>
</li>
</ul>
</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>
 
   <!-- FOOTER-->
<?php include_once "footer.php"?>