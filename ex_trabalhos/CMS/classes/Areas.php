<?php
require_once 'Crud.php';

class Areas extends Crud{//muda aqui
		
	protected $table = 'areas';//muda aqui
	
	private $nome_area;//muda aqui
	

	public function setNome($nome_area){ //muda aqui
		$this->nome_area = $nome_area; //muda aqui
	}

	public function getNome(){
		return $this->nome_area; //muda aqui
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome_area) VALUES (:nome_area)"; //muda aqui
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_area', $this->nome_area); //muda aqui
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome_area = :nome_area WHERE id = :id"; //muda aqui
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_area', $this->nome_area); //muda aqui
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}
?>