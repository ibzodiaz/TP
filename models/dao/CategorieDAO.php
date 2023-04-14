<?php require_once("Connexion.php");

class CategorieDAO
{
	
	public function get_all_categories(){
        $req = (new Connexion)->getBdd()->query("SELECT * FROM categorie");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
?>