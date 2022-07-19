<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>TP</title>
</head>
<body>
    <?php
        include_once "bdd/connexion.php";

        $id = isset($_GET['page']) ? $_GET['page'] : "";
    ?>
    <br>
    <div class="center">
        <h1>SITE D'ACTUALITE DU MGLSI</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if($id == "all" || $id == ""): ?>
                    <?php 
                        $pdo = $db->query("SELECT * FROM article");
                        $donnees = $pdo->fetchAll(PDO::FETCH_OBJ); 
                    ?>
                    <?php foreach( $donnees as $row):?>
                        <div class="left">     
                            <a href="#"><h2><?= $row->titre?></h2></a>
                            <p><?= $row->contenu ?></p>    
                        </div>
                    <?php endforeach;?>
    
                <?php elseif($id == 1 || $id == 2 || $id == 3 || $id == 4): ?>
                    <?php 
                        $pdo = $db->query("SELECT * FROM article WHERE categorie = $id");
                        $donnees = $pdo->fetchAll(PDO::FETCH_OBJ);
                        $number = $pdo->rowCount(); 
                    ?>
                    <?php foreach( $donnees as $row):?>
                        <div class="left">     
                            <a href="#"><h2><?= $row->titre?></h2></a>
                            <p><?= $row->contenu ?></p>    
                        </div>
                    <?php endforeach;?>
                    <?php if($number == 0): ?>
                        <p class="mv">Aucun article trouvé!</p>
                    <?php endif; ?>        
                <?php endif;?>
            
            </div>
            <div class="col-md-3">
                <div class="right">
                    <h2>Catégories</h2>
                </div>
                <div class="normal">
                    <ul>
                        
                        <li><a href="index.php?page=all">Tout</a></li>
                        <?php 
                            $pdo = $db->query("SELECT * FROM categorie");
                            while($data = $pdo->fetch(PDO::FETCH_OBJ)){
                         ?>
                            <li><a href="index.php?page=<?= $data->id ?>"><?= $data->libelle."<br>" ?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>