<?php

class Users
{
	private $id;
	private $prenom;
	private $nom;
	private $email;
	private $password;

	public function __construct()
	{

	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getPassword(){
		return $this->password;
	}
}
?>