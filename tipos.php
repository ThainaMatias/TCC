
<?php include "header.php"?>
<?php include_once "menuresp.php"?>

         <!-- CSS DESSA PÁGINA -->
         <style>
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

.bgimg-2 {
  background-image: url(imagens/body10.jpg);
  min-height: 400px;
}


h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px Arial;
  color: #111;
}

.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.card{
  background-color: white; 
  height: 3795px;
  margin-top: -5.5%;
  color: #EAD7FE; 
}

button.collapsible{
  background-color: #1c2331;
  width: 30%;
}

.div-margin {
    margin-top: 80px;
   
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
.card{
  background-color: white; 
  height: 7578px;
}

.bgimg-2 {
  background-image: url(imagens/body10.jpg);
  min-height: 178px;
}
.div-margin {
    margin-top: 26px;
 
}
p#text1{
  text-align:justify; 
  font-family:Arial; 
  margin-left: 10%; 
  margin-right:10%;
}
}

        </style>

 
  <!-- TÍTULO NA PÁGINA -->
  <div class="card">
      <h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top: 5.5%">Tipos de Violência Doméstica</h2>
      
      <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
   <p id="tex1"> Estão previstos cinco 
   tipos de violência doméstica e familiar contra a mulher na 
   Lei Maria da Penha: física, psicológica, moral, 
   sexual e patrimonial − Capítulo II, art. 7º, incisos I, II, III, IV e V. Essas formas de agressão são complexas, 
   perversas, não ocorrem isoladas umas das outras e têm graves consequências para a mulher. 
     Qualquer uma delas constitui ato de violação dos direitos humanos e<b> deve ser denunciada</b>.</p>
   <p id="tex1" > 
   Abaixo estão detalhados todos os tipos de violência e mais sobre a Lei Maria da Penha.</p>
      </div>
  
    <br> 


            <a href="#l1" style="background-color:#B47CF0; color:white;  text-align:center; width: 30%; margin-left:35%;">Violência Física</a><br/>
            <a href="#l2" style="background-color:#B47CF0; color:white;   text-align:center; width: 30%; margin-left:35%;">Violência Psicológica</a><br/>
            <a href="#l3" style="background-color:#B47CF0; color:white;  text-align:center; width: 30%; margin-left:35%;">Violência Sexual</a><br/>
            <a href="#l4" style="background-color:#B47CF0; color:white;   text-align:center; width: 30%; margin-left:35%;">Violência Patrimonial</a><br/>
            <a href="#l5" style="background-color:#B47CF0; color:white;  text-align:center; width: 30%; margin-left:35%;">Violência Moral</a><br/>
            <a href="#l6" style="background-color:#B47CF0; color:white;  text-align:center; width: 30%; margin-left:35%;">Lei Maria da Penha</a><br/>

            <div id="l1" class="div-margin">
            <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify;
            ">
            <h3 style="text-align:center;">Violência Física</h3>
              <p id="tex1">
                Violência Física é definida por atos violentos, nos quais fazem uso 
              da força física de forma intencional, não-acidental, com o objetivo de
              ferir, lesar, provocar dor e sofrimento ou destruir a pessoa, deixando,
              ou não, marcas evidentes no seu corpo.
              <br>
              <li> bater e espancar;
              <li> empurrar;
              <li> atirar objetos;
              <li> sacudir;
              <li> morder;
              <li> puxar os cabelos; 
              <li> mutilar e torturar;
              <li> usar arma branca, como faca ou ferramentas de trabalho, ou de fogo;
            </p>
                </div>
            </div>

            <div id="l2" class="div-margin">
              <div style="color: #777; background-color:#b7b6b6; text-align:center; padding:50px 80px; text-align: justify; ">
              <h3 style="text-align:center;">Violência Psicológica</h3>
              <p id="tex1">É toda forma de rejeição, depreciação, discriminação, desrespeito, cobrança exagerada, 
              punições humilhantes e utilização da pessoa para atender às necessidades psíquicas de outrem. 
              É toda ação que coloque em risco ou cause dano à autoestima, à identidade ou ao desenvolvimento da pessoa.
              <br>
              <li> xingar; 
              <li> humilhar;
              <li> ameaçar;
              <li> intimidar e amedrontar;
              <li> criticar continuamente, desvalorizar os atos e desconsiderar a opinião ou decisão da mulher; 
              <li>debochar publicamente, diminuir a autoestima;
              <li> tentar fazer a mulher ficar confusa ou achar que está louca;
              <li> controlar tudo o que ela faz, quando sai, com quem e aonde vai; 
              <li>usar os filhos para fazer chantagem. </p>
            </div>
            </div>

            <div id="l3" class="div-margin">
              <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
              <h3 style="text-align:center;">Violência Sexual</h3>
              <p id="tex1">É qualquer ação na qual uma pessoa, valendo-se de sua posição de poder e fazendo uso de força física,
              coerção, intimidação ou influência psicológica, com uso ou não de armas ou drogas, obriga outra pessoa,
                de qualquer sexo e idade, a ter, presenciar, ou participar de alguma maneira de interações sexuais ou a 
                utilizar, de qualquer modo a sua sexualidade, com fins de lucro, vingança ou outra intenção.
              <br>
              <li> forçar a mulher a ter relações sexuais quando ela não quer, ou quando estiver dormindo, ou sem condições de consentir;
              <li> fazer a mulher olhar imagens pornográficas quando ela não quer; 
              <li> obrigar a fazer sexo com outra(s) pessoa(s);
              <li> impedir a mulher de prevenir a gravidez, forçá-la a engravidar ou ainda forçar o aborto quando ela não quiser;</p>
            </div>
            </div>

            <div id="l4" class="div-margin">
              <div style="color: #777; background-color:#b7b6b6; text-align:center; padding:50px 80px; text-align: justify; ">
              <h3 style="text-align:center;">Violência Patrimonial</h3>
              <p id="tex1">Entendida como qualquer conduta que configure retenção, subtração, destruição parcial ou total de seus 
              objetos, instrumentos de trabalho, documentos pessoais, bens, valores e direitos ou recursos econômicos,
              incluindo os destinados a satisfazer suas necessidades.
              <li> controlar dinheiro;
              <li> deixar de pagar pensão;
              <li> destruir parcial ou totalmente documentos pessoais, bens e objetos;
              <li> furtar ou extorquir;
              <li> praticar estelionato;
              <li> interferir em instrumentos de trabalho.</p>
            </div>
              </div>

            <div id="l5" class="div-margin">
            <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
              <h3 style="text-align:center;">Violência Moral</h3>
              <p id="tex1">A violência moral é definida como um tipo de agressão que guarda conexão com os crimes contra a honra,
              quais sejam: calúnia, injúria e difamação, e provoca lesão à autoestima, ao convívio social, desqualifica e
            inferioriza a vitima. 
            <li> expor a vida íntima ou vazar nudes;
            <li> acusar injustamente de traição; 
            <li> fazer juízo moral sobre a conduta da mulher;
            <li> fazer críticas mentirosas;
            <li> xingar;
            <li> desvalorizar pelo modo de se vestir.</p>
            </div>
            </div>

            <div id="l6" class="div-margin">
            <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
              <h3 style="text-align:center; "> Lei Maria da Penha</h3>
              <h5 style="color: black;">Sobre</h5>
              <p id="tex1">A Lei Maria da Penha estabelece que todo o caso de violência doméstica e intrafamiliar é crime, 
                deve ser apurado através de inquérito policial e ser remetido ao Ministério Público. Esses crimes são julgados nos 
                Juizados Especializados de Violência Doméstica contra a Mulher, criados a partir dessa legislação, ou, nas cidades em que 
                ainda não existem, nas Varas Criminais.</p>

                <p id="tex1">A lei também tipifica as situações de violência doméstica, proíbe a aplicação de penas pecuniárias aos agressores, 
                  amplia a pena de um para até três anos de prisão e determina o encaminhamento das mulheres em situação de violência, 
                  assim como de seus dependentes, a programas e serviços de proteção e de assistência social. A Lei n. 11.340, sancionada em 
                  7 de agosto de 2006, passou a ser chamada Lei Maria da Penha em homenagem à mulher cujo marido tentou matá-la duas vezes e 
                  que desde então se dedica à causa do combate à violência contra as mulheres.</p>

                  <h5 style="color: black;">LEI 11.340/06</h5>
                  <p id="tex1">Segundo a Lei Maria da Penha, violência doméstica e familiar contra a mulher é qualquer ação ou omissão baseada 
                      no gênero que lhe cause morte, lesão, sofrimento físico, sexual ou psicológico e dano moral ou patrimonial (art. 5º):       
                    </p>
                    <li>
                    No âmbito da unidade doméstica – espaço de convívio permanente de pessoas, com ou sem vínculo familiar, 
                    inclusive as esporadicamente agregadas;
                    </li>
                    <li>
                    No âmbito da família – comunidade formada por indivíduos que são ou se consideram aparentados, 
                    unidos por laços naturais, por afinidade ou por vontade expressa;
                    </li>
                    <li>
                    Em qualquer relação íntima de afeto – onde o agressor conviva ou tenha convivido com a mulher, 
                    independentemente de coabitação.
                    </li>
            </div>
            </div>
</div>


<div class="bgimg-2">
  <div class="caption">
  
  </div>
</div> 

<!-- FOOTER-->
<?php include_once "footer.php"?>



