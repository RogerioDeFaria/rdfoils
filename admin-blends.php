<?php

	use \RDFOils\Page;
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

			$blend->get((int)$idblends);

			$blend->delete();

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

	$app->get("/admin/blendfacts/:idblends", function($idblends)
		{
			User::verifyLogin();

			$blend = new Blends();

			$blend->get((int)$idblends);

			$page = new PageAdmin();

			$page->setTpl("blendfacts", [
				'blendfacts'=>$blend->getValues()
			]);
		});

	$app->get("/blends-list", function()
		{
			$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

			$search = (isset($_GET['search'])) ? $_GET['search'] : "";

			$blends = new Blends();

			if ($search != '') {
				$pagination = $blends->getBlendsPageSearch($search, $page);
			} else {
				$pagination = $blends->getBlendsPage($page);
			}

			$pages = [];

			for ($i=1; $i <= $pagination["pages"]; $i++) 
			{ 
				array_push($pages, [
					'link'=>'/blends-list?'.http_build_query([
						'page'=>$i,
						'search'=>$search
					]),
					'page'=>$i
				]);
			}

			$page = new Page();

			$page->setTpl("blends-list", [
				'blends'=>$pagination["data"],
				'pages'=>$pages,
				'search'=>$search
			]);
		});


?>