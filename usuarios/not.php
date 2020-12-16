<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>     
        <script type="text/javascript">
        function atualizarTarefas() {
           // aqui voce passa o id do usuario
           var url="get.php?id=1";
            jQuery("#tarefas").load(url);
        }
        setInterval("atualizarTarefas()", 1000);
        </script>   
 
INFORMACAO EH EXIBIDA AQUI: <div id="tarefas"></div> 

 <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'banco_tcc');

    $id = $_GET['id'];

    $banco = "SELECT * FROM recados WHERE id =$id";

    $result = mysqli_query($conn, $banco);
    
    $resultado = mysqli_fetch_assoc($result);

        $retorna = $resultado['vencidas'];
        echo $retorna;
?>