<?php session_start(); ?>
<nav>
    <div class="top-categorie">
  
        <ul class="my-nav">
            <li><h4><a href="index.php?page=0"><i class="fa-solid fa-earth-africa active"></i>Accueil</a></h4></li>
            <?php if(isset($categories)): ?>
                <?php $i=0; foreach ($categories as $category): ?>
                    <li><h4><a href="index.php?page=<?= $category->id ?>">
                        <i class="fa-solid fa-<?= $var[$i] ?>"></i>
                        <?= $category->libelle."<br>" ?></a></li></h4>
                <?php $i++; endforeach; ?>
            <?php endif; ?>
            <?php if(!$_SESSION): ?>
                <li><h4><a href="index.php?page=5"><i class="fa-solid fa-lock"></i>&nbsp;Connexion</a></h4></li>
            <?php else:?>
                <?php if(isset($_SESSION['user_prenom'])):?>
                    <li><h4><a href="index.php?page=8"><i class="fa-solid fa-user"></i>&nbsp;Profil</a></h4></li>
                <?php else:?>    
                    <li><h4><a href="index.php?page=6&action=add"><i class="fa-solid fa-plus"></i>&nbsp;Ajouter</a></h4></li>
                    <li><h4><a href="index.php?page=6"><i class="fa-solid fa-user">&nbsp;</i>Utilisateurs</a></h4></li>
                <?php endif;?>    
                <li><h4><a href="index.php?page=7"><i class="fa-solid fa-right-to-bracket">&nbsp;</i>Deconnexion</a></h4></li>
            <?php endif;?>    
        </ul>

    </div>
</nav>


