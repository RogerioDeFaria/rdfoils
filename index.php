<?php 

require_once("vendor/autoload.php");

use \RDFOils\DB\Sql;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_properties");

	echo json_encode($results);

});

$app->run();

 ?>