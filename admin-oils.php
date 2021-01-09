<?php

	use \RDFOils\Page;
	use \RDFOils\PageAdmin;
	use \RDFOils\Model\Oils;
	use \RDFOils\Model\OilFacts;
	use \RDFOils\Model\Blends;
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

			$oil = new OilFacts();

			$oil->get((int)$idoils);

			$page = new PageAdmin();

			$page->setTpl("oilfacts", [
				'oilfacts'=>$oil->getValues()
			]);
		});




	$app->get("/oils-list", function()
		{
			$page = new Page();

			$page->setTpl("oils-list");
		});

	$app->get("/concepts", function()
		{
			$page = new Page();

			$page->setTpl("concepts");
		});

	$app->get("/blends-list", function()
		{
			$page = new Page();

			$page->setTpl("blends-list");
		});

	$app->get("/conditions", function()
		{
			$page = new Page();

			$page->setTpl("conditions");
		});

	$app->get("/peppermint", function()
		{
			$page = new Page();

			$page->setTpl("peppermint");
		});

	$app->get("/deepblue", function()
		{
			$page = new Page();

			$page->setTpl("deepblue");
		});

	$app->get("/hematomas", function()
		{
			$page = new Page();

			$page->setTpl("hematomas");
		});

?>