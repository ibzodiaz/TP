<section class="container-fluid">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3">
			<form method="post" class="form-style">
			  <div class="mb-3">
			    <label for="pseudo" class="form-label">Adresse Pseudo</label>
			    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudoHelp" name="pseudo" placeholder="pseudo..." value="<?= isset($user->pseudo) ? $user->pseudo : "" ?>">
			    <div id="pseudoHelp" class="form-text">Connectez vous en toute sécurités en tant qu'administrateur.</div>
			  </div>
			  <div class="mb-3">
			    <label for="password" class="form-label">Mot de passe</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe...">
			  </div>
			  <br>
			  <input type="submit" class="btn btn-primary w-100" value="Connexion" name="submit">
			</form>
		</section>
	</section>
</section>