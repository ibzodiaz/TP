<?php include_once "partials/nav.php"; ?>
<div class="container top-article">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="tableau">
				<h5>Admin : <?= $_SESSION['admin_pseudo'] ?></h5>
				<?php if( isset($_GET['action']) ):?>
					<?php if($_GET['action'] == 'add'):?>

						<?php require_once("form-Admin/_viewAddUserForm.php"); ?>

					<?php elseif($_GET['action'] == 'update'):?>

						<?php require_once("form-Admin/_viewAddUserForm.php"); ?>

					<?php endif;?>	
				<?php else:?>
					<table class="table">
						<thead>
						    <tr>
						      <th scope="col">PRENOM</th>
						      <th scope="col">NOM</th>
						      <th scope="col">EMAIL</th>
						      <th scope="col">ACTIONS</th>
						    </tr>
						</thead>	
						<tbody>
							<?php foreach($users as $user):?>
								
								<tr>
									<td><h5><?= $user->prenom ?></h5></td>
									<td><h5><?= $user->nom ?></h5></td>
									<td><h5><?= $user->email ?></h5></td>
									<td><a href="index.php?page=6&action=update&id=<?= $user->id?>" class="btn btn-primary"><i class="fa-solid fa-pen"></i>Modifier</a></td>
									<td><a href="index.php?page=6&action=delete&id=<?= $user->id?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Supprimer</a></td>
								</tr>
								
							<?php endforeach;?>	
						</tbody>
					</table>
				<?php endif;?>	
			</div>
		</div>
	</div>
</div>