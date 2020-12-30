<?php 

	require_once("vendor/autoload.php");

	  // use \RDFOils\DB\Sql;
	use \Slim\Slim;
	use \RDFOils\Page;

	$app = new Slim();

	$app->config('debug', true);

	$app->get('/', function() 
		{    
			$page = new Page();

			$page->setTpl("index");
		});

	$app->run();

?>