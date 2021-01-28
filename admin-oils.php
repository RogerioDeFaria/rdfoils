<?php

	use \RDFOils\Page;
	use \RDFOils\PageAdmin;
	use \RDFOils\Model\Oils;
	use \RDFOils\Model\User;

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
					
	$app->get("/admin/oilfacts/:idoils", function($idoils)
		{
			User::verifyLogin();

			$oil = new Oils();

			$oil->get((int)$idoils);

			$page = new PageAdmin();

			$page->setTpl("oilfacts", [
				'oilfacts'=>$oil->getValues()
			]);
		});

	$app->get("/oils-list", function()
		{
			$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

			$search = (isset($_GET['search'])) ? $_GET['search'] : "";

			$oils = new Oils();

			if ($search != '') {
				$pagination = $oils->getOilsPageSearch($search, $page);
			} else {
				$pagination = $oils->getOilsPage($page);
			}			

			$pages = [];

			for ($i=1; $i <= $pagination["pages"]; $i++) 
			{ 
				array_push($pages, [
					'link'=>'/oils-list?'.http_build_query([
						'page'=>$i,
						'search'=>$search
					]), 
					'page'=>$i
				]);
			}

			$page = new Page();

			$page->setTpl("oils-list", [
				'oils'=>$pagination["data"],
				'pages'=>$pages,
				'numPages'=>$pagination["pages"],
				'search'=>$search
			]);
		});





	$app->get("/concepts", function()
		{
			$page = new Page();

			$page->setTpl("concepts");
		});

	$app->get("/conditions", function()
		{
			$page = new Page();

			$page->setTpl("conditions");
		});

?>