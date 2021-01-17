<?php

	use \RDFOils\Page;
	use \RDFOils\Model\Oils;
	use \RDFOils\Model\Blends;

	$app->get("/", function() 
		{    
			$page = new Page();

			$page->setTpl("index");
		});

	$app->get("/oils/:desurl", function($desurl) 
		{    
			$oil = new Oils();

			$oil->getFromURL($desurl);

			$page = new Page();

			$page->setTpl("oil-detail", [
				'oils'=>$oil->getValues()
			]);
		});

	$app->get("/blends/:desurl", function($desurl) 
		{    
			$blend = new Blends();

			$blend->getFromURL($desurl);

			$page = new Page();

			$page->setTpl("blend-detail", [
				'blends'=>$blend->getValues()
			]);
		});

?>