<?php

	require_once ( 'config.php' );
	require_once ( 'classes/view.php' );

	$view = new View();

	//print_r ( $view->getTemplate() );


	//print_r ( $view->setById('main-header' , 'test') );

	$view->setById ( 'main-header', 'rubrik' );
	//$view->setById ( 'body-text', 'TTTTTTEEEEEESssssT' );
	echo $view->getHTML();

?>
