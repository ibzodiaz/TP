<?php

class categorie
{
	private $id;
	private $libelle;

	private function setId($id){
		$this->id = $id;
	}

	private function getId(){
		return $this->id;
	}

	private function setLibelle($libelle){
		$this->libelle = $libelle;
	}

	private function getLibelle(){
		return $this->libelle;
	}


}
?>