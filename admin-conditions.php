<?php

	use \RDFOils\Page;
	use \RDFOils\PageAdmin;
	use \RDFOils\Model\Conditions;
	use \RDFOils\Model\User;

	$app->get("/admin/conditions", function()
		{
			User::verifyLogin();

			$conditions = Conditions::listAll();

			$page = new PageAdmin();

			$page->setTpl("conditions", [
				'conditions'=>$conditions
			]);
		});

	$app->get("/admin/conditions/create", function()
		{
			User::verifyLogin();

			$page = new PageAdmin();

			$page->setTpl("conditions-create");
		});

	$app->post("/admin/conditions/create", function()
		{
			User::verifyLogin();

			$condition = new Conditions();

			$condition->setData($_POST);

			$condition->save();

			header('Location: /admin/conditions');
			exit;
		});

	$app->get("/admin/conditions/:idconditions/delete", function($idconditions)
		{
			User::verifyLogin();

			$condition = new Conditions();

			$$condition->get((int)$idconditions);

			$$condition->delete();

			header('Location: /admin/conditions');
			exit;
		});

	$app->get("/admin/conditions/:idconditions", function($idconditions)
		{
			User::verifyLogin();

			$condition = new Conditions();

			$condition->get((int)$idconditions);

			$page = new PageAdmin();

			$page->setTpl("conditions-update", [
				'conditions'=>$condition->getValues()
			]);
		});

	$app->post("/admin/conditions/:idconditions", function($idconditions)
		{
			User::verifyLogin();

			$condition = new Conditions();

			$condition->get((int)$idconditions);

			$condition->setData($_POST);

			$condition->save();

			header('Location: /admin/conditions');
			exit;
		});

	$app->get("/conditions-list", function()
		{
			$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

			$search = (isset($_GET['search'])) ? $_GET['search'] : "";

			$conditions = new Conditions();

			if ($search != '') {
				$pagination = $conditions->getConditionsPageSearch($search, $page);
			} else {
				$pagination = $conditions->getConditionsPage($page);
			}			

			$pages = [];

			for ($i=1; $i <= $pagination["pages"]; $i++) 
			{ 
				array_push($pages, [
					'link'=>'/conditions-list?'.http_build_query([
						'page'=>$i,
						'search'=>$search
					]), 
					'page'=>$i
				]);
			}

			$page = new Page();

			$page->setTpl("conditions-list", [
				'conditions'=>$pagination["data"],
				'pages'=>$pages,
				'numPages'=>$pagination["pages"],
				'search'=>$search
			]);
		});

?>