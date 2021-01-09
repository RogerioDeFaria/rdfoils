<?php

	use \RDFBlends\Page;
	use \RDFOils\PageAdmin;
	use \RDFOils\Model\Blends;
	use \RDFOils\Model\User;

	$app->get("/admin/blends", function()
		{
			User::verifyLogin();

			$blends = Blends::listAll();

			$page = new PageAdmin();

			$page->setTpl("blends", [
				'blends'=>$blends
			]);
		});

	$app->get("/admin/blends/create", function()
		{
			User::verifyLogin();

			$page = new PageAdmin();

			$page->setTpl("blends-create");
		});

	$app->post("/admin/blends/create", function()
		{
			User::verifyLogin();

			$blend = new Blends();

			$blend->setData($_POST);

			$blend->save();

			header('Location: /admin/blends');
			exit;
		});

	$app->get("/admin/blends/:idblends/delete", function($idblends)
		{
			User::verifyLogin();

			$blend = new Blends();

			$$blend->get((int)$idblends);

			$$blend->delete();

			header('Location: /admin/blends');
			exit;
		});

	$app->get("/admin/blends/:idblends", function($idblends)
		{
			User::verifyLogin();

			$blend = new Blends();

			$blend->get((int)$idblends);

			$page = new PageAdmin();

			$page->setTpl("blends-update", [
				'blends'=>$blend->getValues()
			]);
		});

	$app->post("/admin/blends/:idblends", function($idblends)
		{
			User::verifyLogin();

			$blend = new Blends();

			$blend->get((int)$idblends);

			$blend->setData($_POST);

			$blend->save();

			header('Location: /admin/blends');
			exit;
		});

?>