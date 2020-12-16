<?php session_start(); 
	include_once('crud/conexao.php');
?>
 <?php include_once "header.php"?>
 <?php include_once "menuresp.php"?>

<style>
  .card{
    
  background-color: white; 
  height: 595px;
  margin-top: -5.5%;
  color: #EAD7FE; 

  }
  img {
    vertical-align: middle;
    border-style: none;
    width: 18%;
}
@media screen and (max-width: 600px) {
 
.card{
  background-color: white; 
  height: 623px;
}


p#text1{
  text-align:justify; 
  font-family:Arial; 
  margin-left: 10%; 
  margin-right:10%;
}
img {
    vertical-align: middle;
    border-style: none;
    width: 66%;
}
}
</style>
<div class="card">

      <h2 style="color:#1c2331; font-family:Arial; text-align:center; margin-top: 6.5%; margin-bottom: 0.8%">
      Entre em contato com nossas voluntárias</h2>
      
      <div style="color: #777; background-color:#d8d8d8; text-align:center; padding:50px 80px; text-align: justify; ">
   <p id="tex1"> <b>Clique no botão abaixo para abrir a janela de chat</b>.</p>
   <p id="tex1" > 
   Caso a voluntária não esteja online no momento, não se preocupe, é só deixar uma mensagem que retornaremos 
   o contato o mais rápido possível.</p>
      </div>
<!-- mibew button --><a id="mibew-agent-button" href="/TCC-Site/mibew/chat?locale=pt-br" target="_blank" onclick="Mibew.Objects.ChatPopups['5f9c7349bb711cdd'].open();return false;"><img src="/TCC-Site/mibew/b?i=botao&amp;lang=pt-br" border="0" alt="" /></a><script type="text/javascript" src="/TCC-Site/mibew/js/compiled/chat_popup.js"></script><script type="text/javascript">Mibew.ChatPopup.init({"id":"5f9c7349bb711cdd","url":"\/TCC-Site\/mibew\/chat?locale=pt-br","preferIFrame":true,"modSecurity":false,"forceSecure":false,"style":"","width":640,"height":480,"resizable":true,"styleLoader":"\/TCC-Site\/mibew\/chat\/style\/popup"});</script><!-- / mibew button -->

</div>

<?php include_once "footer.php"?>