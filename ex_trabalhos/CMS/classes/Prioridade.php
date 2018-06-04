<?php
require_once 'Crud.php';

class Prioridade extends Crud{ //muda aqui
	
	protected $table = 'prioridade'; //muda aqui
	private $nome_prioridade;  //muda aqui
	
	public function setNomePrioridade($nome_prioridade){
		$this->nome_prioridade = $nome_prioridade; //muda aqui
	}

	public function getNomePrioridade(){
		return $this->nome_prioridade;//muda aqui
	}


	public function insert(){

		$sql  = "INSERT INTO $this->table (nome_prioridade) 
		VALUES (:nome_prioridade)"; //muda aqui e na linha acima
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_prioridade', $this->nome_prioridade); //muda aqui
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table 
		SET nome_prioridade = :nome_prioridade
		WHERE id = :id"; //muda na linha acima 
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_prioridade', $this->nome_prioridade); //muda aqui 
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

}
?>