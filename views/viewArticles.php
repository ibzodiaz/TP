<?php include_once "partials/nav.php"; ?>

<div class="container top-article">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php if(isset($articles)):?>
				<?php foreach( $articles as $article): ?>
				    <div class="left">     
				        <a href="#"><h2><?= $article->titre ?></h2></a>
				        <p><?= $article->contenu ?></p>    
				    </div>
				<?php endforeach; ?>
			<?php endif;?>

			<?php if(isset($total_articles)):?>
				<?php if($total_articles == 0):?>
					<div class="left">     
				        <a href="#"><h2>Pas de résultat</h2></a>
				        <p>Aucun article n'est encore disponible.</p>    
				    </div>
				<?php else:?>	

					<?php if(isset($articles_by_categories)):?>
						<?php foreach( $articles_by_categories as $article_by_category): ?>
						    <div class="left">     
						        <a href="#"><h2><?= $article_by_category->titre ?></h2></a>
						        <p><?= $article_by_category->contenu ?></p>    
						    </div>
						<?php endforeach; ?>
					<?php endif;?>
				<?php endif;?>
			<?php endif;?>
		</div>
	</div>
</div>