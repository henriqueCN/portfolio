
<?php
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}
	
?>
<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Areas</title>
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
	
		$area = new Areas();

		if(isset($_POST['cadastrar'])):

			$nome_area  = $_POST['nome_area']; //muda aqui

			$area->setNome($nome_area); //muda aqui

			# Insert
			if($area->insert()){ //muda aqui
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
			$nome_area = $_POST['nome_area']; //muda aqui

			$area->setNome($nome_area); //muda aqui

			if($area->update($id)){ //muda aqui
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($area->delete($id)){ //muda aqui
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $area->find($id); //muda aqui
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_area" value="<?php echo $resultado->nome_area; ?>" placeholder="Nome:"/><!--Muda aqui-->
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_area" placeholder="Nome_area:" /><!--Muda aqui-->
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
			
			<?php foreach($area->findAll() as $key => $value): ?><!--Muda aqui-->

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome_area; ?></td><!--Muda aqui-->
					<td>
						<?php echo "<a href='Areas.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?><!--Muda aqui-->
						<?php echo "<a href='Areas.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?><!--Muda aqui-->
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