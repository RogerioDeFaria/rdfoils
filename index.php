<?php 
	session_start();
	require_once("vendor/autoload.php");

	  // use \RDFOils\DB\Sql;
	use \Slim\Slim;
	use \RDFOils\Page;
	use \RDFOils\PageAdmin;
	use \RDFOils\Model\User;
	use \RDFOils\Model\Oils;

	$app = new Slim();

	$app->config('debug', true);

	$app->get("/", function() 
		{    
			$page = new Page();

			$page->setTpl("index");
		});

	$app->get('/admin', function()
		{
			User::verifyLogin();

			$page = new PageAdmin();

			$page->setTpl("index");
		});

	$app->get('/admin/login', function()
		{
			$page = new PageAdmin([
				"header"=>false,
				"footer"=>false
			]);

			$page->setTpl("login");
		});

	$app->post('/admin/login', function()
		{
			User::login($_POST["login"], $_POST["password"]);

			header("Location: /admin");
			exit;
		});

	$app->get('/admin/logout', function()
		{
			User::logout();

			header("Location: /admin/login");
			exit;
		});

	$app->get("/admin/oils", function()
		{
			User::verifyLogin();

			$oils = Oils::listAll();

			$page = new PageAdmin();

			$page->setTpl("oils", [
				'oils'=>$oils
			]);
		});

	$app->get("/admin/oils/create", function()
		{
			User::verifyLogin();

			$page = new PageAdmin();

			$page->setTpl("oils-create");
		});

	$app->post("/admin/oils/create", function()
		{
			User::verifyLogin();

			$oil = new Oils();

			$oil->setData($_POST);

			$oil->save();

			header('Location: /admin/oils');
			exit;
		});

	$app->get("/admin/oils/:idoils/delete", function($idoils)
		{
			User::verifyLogin();

			$oil = new Oils();

			$oil->get((int)$idoils);

			$oil->delete();

			header('Location: /admin/oils');
			exit;
		});

	$app->get("/admin/oils/:idoils", function($idoils)
		{
			User::verifyLogin();

			$oil = new Oils();

			$oil->get((int)$idoils);

			$page = new PageAdmin();

			$page->setTpl("oils-update", [
				'oils'=>$oil->getValues()
			]);
		});

	$app->post("/admin/oils/:idoils", function($idoils)
		{
			User::verifyLogin();

			$oil = new Oils();

			$oil->get((int)$idoils);

			$oil->setData($_POST);

			$oil->save();

			header('Location: /admin/oils');
			exit;
		});

	$app->get("/oils-list", function()
		{
			$page = new Page();

			$page->setTpl("oils-list");
		});

	$app->get("/conceitos", function()
		{
			$page = new Page();

			$page->setTpl("conceitos");
		});

	/***********************************************/

	$app->run();

?>

/conceitos