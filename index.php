<?php 
require_once("controllers/ControllerAccueil.php");

$id = isset($_GET['page']) ? $_GET['page'] : "";

//$action = isset($_GET['action']) ? $_GET['action'] : "";

$controller = new ControllerAccueil;

if($id >= 0 && $id <= 8 || $id == ""){
	$controller->categories();
}

if ($id == "") {

	$controller->accueil();

}elseif ($id == 0 ) {

	$controller->articles();

}elseif ($id >= 1 && $id <= 4) {

	$controller->articleByCategoryId($id);

}elseif ($id == 5) {

	$controller->logAdmin();

}elseif ($id == 6) {

	$controller->Admin();

}
elseif($id == 7){

	$controller->OutLockAdmin();

}elseif($id == 8){

	$controller->User();

}
else{

	$controller->Error();
}

?>

