<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
require_once 'Crud.php';

class Cabecalho extends Crud{
	
	protected $table = 'cabecalho';
	private $nome_indice;

	public function setNome($nome_indice){
		$this->nome_indice = $nome_indice;
	}

	public function getNome(){
		return $this->nome_nome_indice;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome_indice) VALUES (:nome_indice)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_nome_indice', $this->nome_indice);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome_indice = :nome_indice WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_indice', $this->nome_indice);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}
?>