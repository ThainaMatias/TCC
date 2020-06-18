<?php
// Conexão
include_once 'conecta_banco.php';
// header - css - bootstrap
include_once 'header.php';

?>
<div class="row">
	<div class="container">
		<h3 style="color:grey"> Usuários </h3>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
					<th>Email</th>
					<th>Ação</th>
					<th></th>
					
					
				</tr>
			</thead>
			<tbody>
				
				<?php
				$banco = "SELECT * FROM cadastro_usuario ORDER BY nome";
				$result = mysqli_query($conexao, $banco);
               
                if(mysqli_num_rows($result) > 0):

				while($row = mysqli_fetch_array($result)):
				?>
				<tr>
					<td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['sobrenome']; ?></td>
                    <td><?php echo $row['idade']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td> <span style="font-size: 25px"><a href="alterar_dado.php"  class="far fa-edit "></a></span> </td>
					<td> <span style="font-size: 25px"><a href="excluir_usuario.php" name="btn-deletar" class="far fa-window-close"></a> </span> </td>
					
					
					
				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		
	</div>
</div>
