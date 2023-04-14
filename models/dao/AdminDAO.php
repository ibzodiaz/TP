<?php
require_once("Connexion.php");
require_once("models/domaine/Users.php");

class AdminDAO
{

	public function addUser(Users $user){
		$req = (new Connexion)->getBdd()->prepare("INSERT INTO users(prenom,nom,email,password) VALUES(?,?,?,?)");
		$req->execute([
						$user->getPrenom(),
						$user->getNom(),
						$user->getEmail(),
						$user->getPassword()
					]);
        $req->closeCursor();
	}

	public function updateUser($id,Users $user){

		$req = (new Connexion)->getBdd()->prepare("UPDATE users SET prenom=?,nom =?,email =?,password=? WHERE id=?");
		$req->execute([
						$user->getPrenom(),
						$user->getNom(),
						$user->getEmail(),
						$user->getPassword(),
						$id
					]);
        $req->closeCursor();

	}

	public function deleteOneUser($id){

		$req = (new Connexion)->getBdd()->prepare("DELETE FROM users WHERE id = ?");
		$req->execute([$id]);
        $req->closeCursor();

	}

	public function deleteUsers(){

	}

	public function getAllUsers(){

		$req = (new Connexion)->getBdd()->query("SELECT * FROM users ORDER BY id DESC");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();

	}

	public function getUserById($id){

		$req = (new Connexion)->getBdd()->prepare("SELECT * FROM users WHERE id = ?");
		$req->execute([$id]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();

	}
}
?>