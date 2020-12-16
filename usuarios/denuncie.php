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
    background-color: #EAD7FE;
    padding: 18%;
    margin-top: -5%;
    margin-left: 0%;
    width: 100%;
    height: 1460px;
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
    margin-top: -136.2%;
    margin-left: 4%;
    
}

}



</style>

 <!-- CORPO -->

<div class="card">

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'ComoDe')" id="defaultOpen">Como Denunciar</button>
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
  <h3 style="font-family: Arial; margin-left:6%; margin-top:2%;">Saiba Como Denunciar</h3>
  <br>
  <img src="imagens/denuncie.jpg" style="width: 72%; margin-left: 6%;">
</div>

<div id="Santos" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Santos</h3>
  <ul>
  <li><h4 style="font-family: Arial; font-weight: bold;">Centros de Referência Especializados em Assistência Social (Creas).</h4>
  <h5 style="font-family:  Arial;">
  Avenida Conselheiro Nébias, 452, Encruzilhada.
  Rua Cananéia, 269, Chico de Paula
</h5></li>

</br>
<li><h4 style="font-family:Arial; font-weight: bold;">Núcleo Integrado de Articulação e Atendimento a Crianças e Adolescentes.</h4>
<h5 style="font-family:Arial;">Mercado Municipal - Praça Iguatemi Martins s/nº, Vila Nova. </h5>
</li>

</br>
<li><h4 style="font-family:Arial; font-weight: bold;">Casa das Anas</h4>
<h5 style="font-family:Arial;">Rua Paraná, 219, Vila Belmiro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3041-1849</h4></h5>
</li>

</br>
<li><h4 style="font-family:Arial; font-weight: bold;">Coordenadoria de Assistência Judiciária Gratuita e Orientação Jurídica ao Cidadão (Cadoj).</h4>
<h5 style="font-family: Arial;">Praça José Bonifácio, 50, 2º andar.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3225-8139</h4></h5>
</li>

</br>
<li><h4 style="font-family: Arial; font-weight: bold;">Coordenadoria de Políticas para a Mulher.</h4>
<h5 style="font-family: Arial;">Rua XV de Novembro, nº 183, Centro.
</h5>
</li>

</br>
<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher.</h4>
<h5 style="font-family: Arial;">Contato disponível pelo <a href="https://www.santos.sp.gov.br/?q=portal/delegacia-da-mulher" target="_black"> site </a> da instituição
</h5>
</li>

</br>
<li><h4 style="font-family:Arial; font-weight: bold;">ONG Hella.</h4>
<h5 style="font-family:Arial;">Rua XV de Novembro, nº 183, Centro. <a href="http://onghella.org.br" target="_black"> Site</a>
</h5>
</li>
</ul>
</div>

<div id="SV" class="tabcontent">
<h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">São Vicente</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Casa Rosa<h4>
<h5 style="font-family:Arial">Rua Dr. Júlio Prestes, 59, Vila Valença.
<h4 style="font-family: Arial; font-weight: bold;">(13) 99201-0073</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializado em Assistência Social (Creas)<h4>
<h5 style="font-family:Arial;">Rua Treze de Maio, 609, Centro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3569-2294</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Assessoria Especial da Mulher<h4>
<h5 style="font-family: Arial;">Rua José Bonifácio, 404, 7º andar, Centro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3569-2279</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher (DDM)<h4>
<h5 style="font-family: Arial;">Rua Djalma Dutra, 132, Centro.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3467-3941</h4></h5>
</li>
</br>

</ul>
</div>

<div id="Cubatao" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Cubatão</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializado em Assistência Social (Creas)<h4>
<h5 style="font-family:Arial;">Rua Salgado Filho, 227, Jardim Costa e Silva.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3361-2257</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family:Arial;">Avenida Brasil, 384, Jardim Casqueiro.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3364-3885</h4></h5>
</li>
</br>

</ul>
</div>

<div id="PG" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Praia Grande</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializado de Assistência Social (Creas)<h4>
<h5 style="font-family: Arial;">Rua Armando Pereira da Rocha, 295, Balneário Esmeralda.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3594-1738</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;">Avenida Dr. Roberto de Almeida Vinhas, 11084, Vila Tupi.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3471-8000</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">ONG Defesa e Cidadania da Mulher (DCM)<h4>
<h5 style="font-family: Arial;">Rua 1º de Janeiro, 954, Vila Mirim.
<h4 style="font-family:Arial; font-weight: bold;">(13) 3495-4913</h4></h5>
</li>
</br>

</ul>
</div>

<div id="Mongagua" class="tabcontent">
  <h3 style="font-family: Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Mongaguá</h3>
  <ul>

<li><h4 style="font-family: Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;">Avenida Monteiro Lobato, 4.654, Vila Atlântica.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3448-2151</h4></h5>
</li>
</br>
  </ul>
</div>

<div id="Itanhaem" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Itanhaém</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializado em Assistência Social (Creas)<h4>
<h5 style="font-family: Arial;">Endereço: Estrada Gentil Perez, 260, Jardim Umuarama.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3427-7853</h4></h5>
</li>
</br>
  </ul>
</div>

<div id="Peruibe" class="tabcontent">
  <h3 style="font-family: Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Peruíbe</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher<h4>
<h5 style="font-family: Arial;">Endereço: Rua Ministro Genésio de A Moura, 76, Centro.
<h4 style="font-family: Arial; font-weight: bold;">(13) 3455-7665</h4></h5>
</li>
</br>
  </ul>
</div>

<div id="Bertioga" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Bertioga</h3>
  <ul>
  <li>
  <h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializada em Assistência Social (Creas)
Rua Valter Pereira Prado, 77, Centro
<h4 style="font-family:Arial; font-weight: bold;">(13) 3317-1690 e 3317-4867</h4></h4></li>
</ul>
</br>
</div>

<div id="Guaruja" class="tabcontent">
  <h3 style="font-family:Arial; font-weight: bold; margin-left:3%; margin-top:2%;">Guarujá</h3>
  <ul>

<li><h4 style="font-family:Arial; font-weight: bold;">Centro de Referência Especializado em Assistência Social (Creas)<h4>
<h5 style="font-family:Arial;">Rua Washington, 700, Centro
<h4 style="font-family:Arial; font-weight: bold;">(13) 3355-4381</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Defensoria Pública</h4>
<h5 style="font-family:Arial;">Avenida Adhemar de Barros, 1327
<h4 style="font-family:Arial; font-weight: bold;">(13) 3386-1676</h4></h5>
</li>
</br>

<li><h4 style="font-family:Arial; font-weight: bold;">Delegacia de Defesa da Mulher (DDM)</h4>
<h5 style="font-family:Arial;">Rua Washington, 227, Vila Maia.
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