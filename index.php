<?php 

	require_once("vendor/autoload.php");

	  // use \RDFOils\DB\Sql;
	use \Slim\Slim;
	use \RDFOils\Page;
	use \RDFOils\PageAdmin;

	$app = new Slim();

	$app->config('debug', true);

	$app->get('/', function() 
		{    
			$page = new Page();

			$page->setTpl("index");
		});

	$app->get('/admin', function()
		{
			$page = new PageAdmin();

			$page->setTpl("index");
		});

	$app->run();

?>