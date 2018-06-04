
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
   <title>Prioridade</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Andrew Esteves"/>
   <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" />
</head>
<body>

	<div class="container">

		<?php
	
		$prioridade = new Prioridade();//muda aqui

		if(isset($_POST['cadastrar'])):

			$nome_prioridade  = $_POST['nome_prioridade']; //muda aqui
			
			$prioridade->setNomePrioridade($nome_prioridade);//muda aqui
			# Insert
			if($prioridade->insert()){ //muda aqui
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
			$nome_prioridade = $_POST['nome_prioridade']; //muda aqui

			$prioridade->setNomePrioridade($nome_prioridade); //muda aqui

			if($prioridade->update($id)){ //muda aqui
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($prioridade->delete($id)){ //muda aqui
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $prioridade->find($id); //muda aqui
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_prioridade" value="<?php echo $resultado->nome_prioridade; ?>" placeholder="Nome:" /> <!--muda aqui-->

			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>"> 
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados"> 					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_prioridade" placeholder="Nome_prioridade:" /> <!--muda aqui-->
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome_prioridade:</th> 
					<th>Acoes:</th> 
				</tr>
			</thead>
			
			<?php foreach($prioridade->findAll() as $key => $value):?> <!--muda aqui-->

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome_prioridade; ?></td> <!--muda aqui-->
					<td>
						<?php echo "<a href='Prioridade.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?> <!--muda aqui-->
						<?php echo "<a href='Prioridade.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?><!--muda aqui-->
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