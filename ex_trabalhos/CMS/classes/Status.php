<?php
require_once 'Crud.php';

class Status extends Crud{ //muda aqui
	
	protected $table = 'status'; //muda aqui
	private $nome_status;  //muda aqui
	private $desc_status;  //muda aqui 

	public function setNomeStatus($nome_status){
		$this->nome_status = $nome_status; //muda aqui
	}

	public function getNomeStatus(){
		return $this->nome_status;//muda aqui
	}

	public function setDescStatus($desc_status){
		$this->desc_status = $desc_status; //muda aqui
	}

	public function getDescStatus(){
		return $this->desc_status;//muda aqui
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome_status, desc_status) 
		VALUES (:nome_status, :desc_status)"; //muda aqui e na linha acima
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_status', $this->nome_status); //muda aqui
		$stmt->bindParam(':desc_status', $this->desc_status); //muda aqui
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table 
		SET nome_status = :nome_status, desc_status = :desc_status 
		WHERE id = :id"; //muda na linha acima 
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_status', $this->nome_status); //muda aqui 
		$stmt->bindParam(':desc_status', $this->desc_status); //muda aqui 
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

}
?>