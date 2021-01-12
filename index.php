<?php 
	session_start();
	require_once("vendor/autoload.php");

	use \Slim\Slim;
	
	$app = new Slim();

	$app->config('debug', true);

	require_once("site.php");	
	require_once("admin.php");
	require_once("admin-oils.php");
	require_once("admin-blends.php");
	require_once("admin-conditions.php");


	$app->get("/teste", function() 
		{    
			$page = new Page();

			$page->setTpl("index-fig");
		});


	$app->run();

?>