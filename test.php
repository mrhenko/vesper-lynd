<?php

	require_once ( 'config.sample.php' );
	require_once ( 'classes/view.php' );

	$view = new View();

	print_r ( $view->loadTemplate() );

?>
