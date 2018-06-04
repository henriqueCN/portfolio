<!DOCTYPE html>
<html>
<?php include_once('cabecalho.php'); ?>
<body class="base">
<div class = "row">
	
		<img class = "logo" src="../imagens/logomarca_nome.png">
		<img class = "imge_cabecalho" src="../imagens/header_madeira.jpg">		
	
	<div class = "img_header imagem_inicial_pequeno">	
		<div class="div_imagem_inicial">
			<form action="#conteudo">
			<button class="botao_menu">Início</button>
			</form>
			<form action="#sobre">
			<button class="botao_menu1">Sobre</button>
			</form>
			<form action="#"> 
			<button class="botao_menu2">Encomendar Site</button>
			</form>
			<form action="#portfolio">
			<button class="botao_menu3">Portfólio</button>
			</form>
			<form action="#contato">
			<button class="botao_menu4">Contato</button>
			</form>
			<img class = "logomarca_small" src="../imagens/logomarca.png">
		</div>
	</div>		

</div>
<div>
	<div id = "conteudo" class = "conteudo">
		<h1 class = "titu">* Funcionalidades do site *</h1>
		<div class = "displayer">
				<div class = "quadrinho_agenda" >
					<a href="cu" class = "links"><img class = "foto_agenda"  src="../imagens/dog.jpg">
					<div class= "desc_foto_agenda">
					<h3>Conheça o site</h3>
					<div class="descri">
					<p class="desc1">Mas afinal de contas, quais são as funcionalidades reais desse site? Clique aqui e descubra todas as funções.</p>
					</div>
					</div></a>
				</div>

				<div class = "quadrinho_agenda" >
					<a href="cu" class = "links"><img class = "foto_agenda"  src="../imagens/book.jpg">
					<div class= "desc_foto_agenda">
					<h3>Encomendar site</h3>
					<div class="descri">
						<p class="desc1">Caso tenha se interassado nesse layout, ou em algum outro disponível em "Exemplos de traballhos",entre em contato.</p>
					</div>
					</div></a>
					
				</div>

				<div class = "quadrinho_agenda">
					<a href="oi" class = "links"><img class = "foto_agenda"  src="../imagens/anota.jpg">
					<div class= "desc_foto_agenda">
						<h3>Ver portfólio </h3>
						<div class="descri">
							<p class="desc1">Caso queira saber mais sobre mim (Henrique Costa) clique nessa aba que você terá acesso às minhas informações profissionais.</p>
					    </div>
					</div></a>
				</div>
		</div>

		<div class = "quadro_sobre_back">
			<div class = "quadro_sobre" id = "sobre">
				<h1 class = "titu_sobre" >* Sobre o site *</h1>
				<div class="desc_sobre">
					<h2 class = "sub_desc_sobre">Funcionalidade</h2>
					<p>Olá vizitante! Este é um site que serve como meu portfólio, e como uma ferramenta para que os clientes possam fazer a encomenda de sites. Minhas informações profissionais se encontram na aba "ver currículo", no canto superior direito do tópico, e os projetos disponíveis para exemplo se encontram na aba "Exemplos de Trabalhos", fique a vontade para dar uma olhada, e caso queira entrar em contato comigo, sinta-se a vontade para me enviar uma mensagem pela aba "Contato" ou  pelo meu email, também na área de contato.</p>
					<h2 class="sub_desc_sobre">Detalhes técnicos</h2>
					<p>Template feito completamente do zero, foram usados somente HTML, CSS, JavaScript e PHP, sem uso de templates pré construídos.</p>
					<h2 class="sub_desc_sobre">Desenvolvedor</h2>
					<br>
					<strong>Henrique Costa do Nascimento</strong>

					<p>Vespasiano MG</p>
			</div>
		</div>
			
		</div>

	<h1 class = "titu" id = "portfolio">* Modelos de Sites *</h1>
			<div class = "displayer">
				<div class = "quadrinho_trabalhos" >
					<a href="../ex_trabalhos/CMS" target="blank" class = links><img class = "foto_agenda"  src="../imagens/cms.png">
					<div class= "desc_foto_agenda">
					<h3>Modelo de CMS</h3></a>

					</div>
				</div>
				<div class = "quadrinho_trabalhos" >
					<a href="https://www.w3schools.com/w3css/tryw3css_templates_cv.htm" target="blank" class = links><img class = "foto_agenda"  src="../imagens/curriculo_online.png">
					<div class= "desc_foto_agenda">
					<h3>Currículo </h3></a>

					</div>
				</div>
				<div class = "quadrinho_trabalhos" >
					<a href="https://www.w3schools.com/w3css/tryw3css_templates_clothing_store.htm" target="blank" class = links><img class = "foto_agenda"  src="../imagens/loja_online.png">
					<div class= "desc_foto_agenda">
					<h3>E-Commerce</h3></a>

					</div>
				</div>				
				<div class = "quadrinho_trabalhos" >
					<a href="https://www.w3schools.com/w3css/tryw3css_templates_fashion_blog.htm" target="blank" class = links><img class = "foto_agenda"  src="../imagens/blog.png">
					<div class= "desc_foto_agenda">
					<h3>Blog</h3></a>

					</div>
				</div>
				<div id = "contato" style="margin-top: 10%;">
					<h1 class = "titu" >* Contato *</h1>
					<div class = "info_contato">

					</div>

			<div class="contato" id = "#contato">
				<form method="post" action="">
				<div style="display: inline-block;">
				<label for = "nome">Nome</label>
				<br>
				<input type="text" name="nome">
				<br>
				<label for = "email" >Email</label>
				<br>
				<input type="email" name="email">
				<br>
				<label for = "telefone" >Telefone</label>
				<br>
				<input type="text" name="telefone">	
				<br>			
				<label for = "message" >Mensagem</label>
				<br>
				<textarea name="message" cols="34" rows="10" id="txtBox">
				</textarea>
				</div>
				<br>
				<br>

				<!--<div style="display: inline-block;">
				<label for = "textarea">Mensagem</label>
				<br>
				<textarea rows="7" cols="30">
				</textarea>
				</div>-->

				<input type="submit" value="Enviar" name="enviar">
				</form>
			</div>
			<div class = "info_contato">
				<center><h3>Meios de contato</h3></center><br>

			<strong>Desenvolvedor: </strong>Henrique Costa<br>
			<strong>Celular/Whatsapp: </strong>(31)99580-5480<br>
			<br>
			<strong>E-mail: </strong>henriquecostadonascimento@gmail.com<br>

			</div>

		</div>
</div>
</div>
<?php 
if(isset($_POST['enviar']))
{
$name = $_POST['nome'];
$email = $_POST['email'];
$subject = $_POST['telefone'];
$message = $_POST['message'];

ini_set('display_errors', 1);
 
error_reporting(E_ALL);
 
$From = "SITE OLHARIS";
 
$To = "henriquecostadonascimento@gmail.com";
 
$Subject = "NOVA REQUISICAO";
 
$Message = "Nova Requisicão de: ".$name." Email: ".$email. " Telefone: ".$subject." Mensagem: ".$message;
 

mail($To, $Subject, $Message);

echo "<script>javascript:alert('Email enviado com Sucesso!');</script>";

}
?>
</div>
<?php include ('rodape.php'); ?>
</body>
<!--
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<strong>Dar uma olhada em: </strong><u> https://www.origamid.com/codex/animacao-durante-o-scroll/</u>
-->
</html>