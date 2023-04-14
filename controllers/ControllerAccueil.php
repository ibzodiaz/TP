<?php require_once("models/dao/ArticleDAO.php");
	  require_once("models/dao/CategorieDAO.php");
	  require_once("models/dao/logAdminDAO.php");
	  require_once("models/dao/AdminDAO.php");
	  require_once("models/dao/UserDAO.php");

class ControllerAccueil
{
	private $_articleDAO;
	private $_categorieDAO;
	private $_logAdminDAO;
	private $_adminDAO;
	private $_logUserDAO;

	public function Error(){
		require_once("views/viewError.php");
	}

	public function User(){
		if (!$_SESSION) {

			header("Location:index.php?page=5");
		}

		if (!isset($_SESSION['user_prenom'])) {

			header("Location:index.php?page=6");
			
		}
		

		require_once("views/viewUsers.php");
	}


	public function Admin(){
		if (!$_SESSION) {

			header("Location:index.php?page=5");
		}

		if (!isset($_SESSION['admin_pseudo'])) {

			header("Location:index.php?page=8");

		}
		extract($_POST);
		$action = isset($_GET['action']) ? $_GET['action'] : "";
		$id = isset($_GET['id']) ? $_GET['id'] : "";

		$this->_adminDAO = new AdminDAO();

		if (isset($add)) {

			$user = new Users();

			$user->setPrenom($prenom);
			$user->setNom($nom);
			$user->setEmail($email);
			$user->setPassword($password);

			$this->_adminDAO->addUser($user);

		}

		if (isset($update)) {

			$user = new Users();

			$user->setPrenom($prenom);
			$user->setNom($nom);
			$user->setEmail($email);
			$user->setPassword($password);

			$this->_adminDAO->updateUser($id,$user);

			header("Location:index.php?page=6");

			

		}

		if ($action == 'delete') {

			$this->_adminDAO->deleteOneUser($id);

			header("Location:index.php?page=6");

		}


		$users = $this->_adminDAO->getAllUsers();

		$oneUser = $this->_adminDAO->getUserById($id);

		require_once("views/viewAdmin.php");
	}

	public function OutLockAdmin(){
		session_start();

		$_SESSION = array();

		session_destroy();

		require_once("views/viewOutLock.php");
	}


	public function logAdmin(){

		extract($_POST);

		$this->_logAdminDAO = new logAdminDAO();


		$this->_logUserDAO = new UserDAO();


		$redirectAdmin = "";

		if (isset($submit)) {

			if (!empty($pseudo) && !empty($password) ) {

				$logAdmin = new logAdmin($pseudo,$password);

				$logUser = new Users();

				$logUser->setPrenom($pseudo);

				$logUser->setPassword($password);

				$adminExists = $this->_logAdminDAO->userExists($logAdmin)[0];

				$admin = $this->_logAdminDAO->userExists($logAdmin)[1];

				$userExists = $this->_logUserDAO->userExists($logUser)[0];

				$user = $this->_logUserDAO->userExists($logUser)[1];

				if ($adminExists){

					$redirectAdmin = "checked-admin";

					$_SESSION['admin_id'] = $admin->id;

					$_SESSION['admin_pseudo'] = $admin->pseudo;					

				}elseif($userExists) {

					$redirectAdmin = "checked-user";

					$_SESSION['user_id'] = $user->id;

					$_SESSION['user_prenom'] = $user->prenom;

				}
				else{

					$$redirectAdmin = "no-checked";
				}

			}
		}

		require_once("views/viewLogAdmin.php");

	}

	public function categories(){

		$this->_categorieDAO = new CategorieDAO;

		$categories = $this->_categorieDAO->get_all_categories();

		$var = ["medal","user-doctor","building-columns","handshake"];
		
		require_once("views/viewCategories.php");
	}

	public function articles(){

		$this->_articleDAO = new ArticleDAO;

		$articles = $this->_articleDAO->get_all_articles();

		require_once("views/viewArticles.php");

	}

	public function articleByCategoryId($categorie){

		$this->_articleDAO = new ArticleDAO;

		$articles_by_categories = $this->_articleDAO->get_article_by_category_id($categorie)[0];

		$total_articles = $this->_articleDAO->get_article_by_category_id($categorie)[1];

		require_once("views/viewArticles.php");

	}

	public function accueil(){

		$articles = $this->articles();

		require_once("views/viewAccueil.php");
	}
}

?>