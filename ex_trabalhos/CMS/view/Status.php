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
   <title>Status</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Andrew Esteves"/>
   <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" />
</head>
<body>

	<div class="container">

		<?php
	
		$status = new Status();//muda aqui

		if(isset($_POST['cadastrar'])):

			$nome_status  = $_POST['nome_status']; //muda aqui
			$desc_status  = $_POST['desc_status']; //muda aqui

			$status->setNomeStatus($nome_status);//muda aqui
			$status->setDescStatus($desc_status);//muda aqui

			# Insert
			if($status->insert()){ //muda aqui
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
			$nome_status = $_POST['nome_status']; //muda aqui
			$desc_status = $_POST['desc_status']; //muda aqui

			$status->setNomeStatus($nome_status); //muda aqui
			$status->setDescStatus($desc_status); //muda aqui

			if($status->update($id)){ //muda aqui
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($status->delete($id)){ //muda aqui
				echo "Deletado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $status->find($id); //muda aqui
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_status" value="<?php echo $resultado->nome_status; ?>" placeholder="Nome:" /> <!--muda aqui-->
				<input type="text" name="desc_status" value="<?php echo $resultado->desc_status; ?>" placeholder="Descricao:" /> <!--muda aqui-->
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>"> 
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados"> 					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome_status" placeholder="Nome_status:" /> <!--muda aqui-->
				<input type="text" name="desc_status" placeholder="Desc_status:" /> <!--muda aqui-->
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome_status:</th> 
					<th>Desc_status:</th> 
					<th>Acoes:</th> 
				</tr>
			</thead>
			
			<?php foreach($status->findAll() as $key => $value):?> <!--muda aqui-->

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome_status; ?></td> <!--muda aqui-->
					<td><?php echo $value->desc_status; ?></td> <!--muda aqui-->
					<td>
						<?php echo "<a href='Status.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?> <!--muda aqui-->
						<?php echo "<a href='Status.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?><!--muda aqui-->
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