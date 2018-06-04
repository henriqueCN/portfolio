<!DOCTYPE html>
<html>
<?php include_once('cabecalho.php'); ?>
<body>
	<div class = "conteudo">
	
	<div class = "conteudo-25_1">	
		<img class = "foto" src="../imagens/agenda.jpg">
	</div>
	<div class = "desc_foto_agenda">
		<h3>Página Contato</h3>
		<p>Lorem ipsum ante enim vitae elit himenaeos risus praesent mollis luctus proin, est sed suscipit ipsum egestas donec adipiscing consectetur sollicitudin etiam. vestibulum nibh dui nibh varius ultricies non tristique habitasse, vestibulum mattis in fusce molestie.</p>
	</div>


	<div id = "contato">
		<h1 class = "titulo_inicial">Contato</h1>
		<div class = "info_contato">
		</div>

		<div class="contato">
			<div style="display: inline-block;">
			<label for = "nome">Nome</label>
			<br>
			<input type="text" name="nome">
			<br>
			<label for = "email" >Email</label>
			<br>
			<input type="text" name="nome">
			<br>
			<label for = "telefone" >Telefone</label>
			<br>
			<input type="text" name="nome">
			</div>
			<div style="display: inline-block;">
			<label for = "textarea">Mensagem</label>
			<br>
			<textarea rows="7" cols="30">
			</textarea>
			</div>

			<input type="submit" name="enviar">
		</div>
	</div>
	</div>
	<?php include ('rodape.php'); ?>
</body>
</html>