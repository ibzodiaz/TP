<?php
$dsn = 'mysql:host=localhost;dbname=mglsi_news;charset=utf8';
$user = 'mglsi_user';
$password = 'passer';
try{

    $db = new PDO($dsn,$user,$password);

}catch (PDOException $e){
    die("La connexion à la base de données a échoué!");
}

?>