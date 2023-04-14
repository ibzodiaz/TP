<?php include_once "partials/nav.php"; ?>
<div class="from-top">
	<?php if(isset($redirectAdmin) && $redirectAdmin == "no-checked"): ?>

		<?php include_once "views/form-Admin/_viewForm.php"; ?>

	<?php elseif(isset($redirectAdmin) && $redirectAdmin == "checked"):?>
		
		<?php header("Location:index.php?page=8") ?>

	<?php else:?>

		<?php include_once "views/form-Admin/_viewForm.php"; ?>

	<?php endif;?>
</div>