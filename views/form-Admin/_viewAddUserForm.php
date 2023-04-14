<?php include_once "partials/nav.php"; ?>
<div class="container">
	<form method="post">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="text" name="prenom" value="<?=$_GET['action'] == 'add' ? "" : $oneUser->prenom ?>" class="form-control" placeholder="Prenom..." >
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="text" name="nom" value="<?=$_GET['action'] == 'add' ? "" : $oneUser->nom ?>" class="form-control" placeholder="Nom...">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="email" name="email" value="<?=$_GET['action'] == 'add' ? "" : $oneUser->email ?>" class="form-control" placeholder="Email..." >
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="text" name="password" value="<?=$_GET['action'] == 'add' ? "" : $oneUser->password ?>" class="form-control" placeholder="Mot de passe...">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="submit" name="<?= $_GET['action'] ?>" value="<?= $_GET['action'] == 'add' ? 'Ajouter' : 'Modifier' ?>" style="width: 100%;" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>