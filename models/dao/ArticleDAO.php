<?php require_once("Connexion.php");

class ArticleDAO
{

	public function get_all_articles(){
        $req = (new Connexion)->getBdd()->query("SELECT * FROM article");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }

    public function get_article_by_id($id){
        $req = (new Connexion)->getBdd()->prepare("SELECT * FROM article WHERE id = ?");
        $req->execute(array($id));
        $donnees = $req->fetchAll(PDO::FETCH_OBJ); 
        return $donnees;
        $req->closeCursor();
    }
 
	public function get_article_by_category_id($categorie){
        $req = (new Connexion)->getBdd()->prepare("SELECT * FROM article WHERE categorie = ?");
        $req->execute(array($categorie));
        $donnees = $req->fetchAll(PDO::FETCH_OBJ);
        $number_of_rows = $req->rowCount();
        return [$donnees,$number_of_rows];
        $req->closeCursor();
    }
}
?>