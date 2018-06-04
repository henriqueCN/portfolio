
<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	
?>
<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Cabecalho</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Andrew Esteves"/>
   <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>

	<div class="container">

		<?php
	
		$cabecalho = new Cabecalho();

		if(isset($_POST['cadastrar'])):

			$nome_indice  = $_POST['nome_indice']; //muda aqui

			$cabecalho->setNome($nome_indice); //muda aqui

			# Insert
			if($cabecalho->insert()){ //muda aqui
				echo "Inserido com sucesso!";
			}

		endif;

		?>
		<?php
		include_once('header.php');
		?>

		<?php 
		if(isset($_POST['atualizar'])):

			$id = $_POST['id'];
			$nome_indice = $_POST['nome_indice']; //muda aqui

			$cabecalho->setNome($nome_indice); //muda aqui

			if($cabecalho->update($id)){ //muda aqui
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($cabecalho->delete($id)){ //muda aqui
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $cabecalho->find($id); //muda aqui
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_indice" value="<?php echo $resultado->nome_indice; ?>" placeholder="Nome:"/><!--Muda aqui-->
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_indice" placeholder="nome_indice:" /><!--Muda aqui-->
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th><!--Muda aqui-->
					<th>Acoes:</th>
				</tr>
			</thead>
			
			<?php foreach($cabecalho->findAll() as $key => $value): ?><!--Muda aqui-->

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome_indice; ?></td><!--Muda aqui-->
					<td>
						<?php echo "<a href='Cabecalho.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?><!--Muda aqui-->
						<?php echo "<a href='Cabecalho.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?><!--Muda aqui-->
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>