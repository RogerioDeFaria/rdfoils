<?php

	use \RDFOils\Page;

	$app->get("/", function() 
		{    
			$page = new Page();

			$page->setTpl("index");
		});

?>