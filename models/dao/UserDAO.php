<?php
require_once("Connexion.php");
require_once("models/domaine/Users.php");

class UserDAO
{

	
	public function userExists(Users $user){

		$this->db = (new Connexion)->getBdd();

		$req = $this->db->prepare("SELECT * FROM users WHERE prenom = ? AND password = ?");

		$req->execute([ 
						$user->getPrenom(),
						$user->getPassword() 
					  ]);

        $the_user = $req->fetch(PDO::FETCH_OBJ);

        return [(boolean)$the_user,$the_user];
        
        $req->closeCursor();
	}

}
?>