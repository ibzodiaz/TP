<?php
require_once("Connexion.php");
require_once("models/domaine/logAdmin.php");

class logAdminDAO
{
	private $db;

	public function userExists(logAdmin $logadmin){

		$this->db = (new Connexion)->getBdd();

		$req = $this->db->prepare("SELECT * FROM admin WHERE pseudo = ? AND password = ?");

		$req->execute([ 
						$logadmin->getPseudo(),
						$logadmin->getPassword() 
					  ]);

        $user = $req->fetch(PDO::FETCH_OBJ);

        return [(boolean)$user,$user];
        
        $req->closeCursor();
	}

}
?>