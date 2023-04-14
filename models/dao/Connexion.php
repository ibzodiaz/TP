<?php

class Connexion
{

    public function getBdd(){

        try {
            return new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8','root','');
   
        } catch (Exception $e) {

            return $e->getMessage();
        }
    } 

}


?>