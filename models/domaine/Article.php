<?php 

class Article
{
	private $id;
	private $titre;          
	private $contenu;         
	private $dateCreation;     
	private $dateModification; 
	private $categorie;
    

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
    }

    public function getDateCreation(){
        return $this->dateCreation;
    }
	
    public function setDateModification($dateModification){
        $this->dateModification = $dateModification;
    }

    public function getDateModification(){
        return $this->dateModification;
    }

    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }

    public function getCategorie(){
        return $this->categorie;
    }
}
?>