<?php

	require_once ( 'config.php' );
	require_once ( 'classes/view.php' );

	$view = new View();

	$view->setById ( 'main-header', 'Installation' );

	// Try to connect to the Postgres database
	try {
	
		$dbh = new PDO( 'pgsql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';user=' . DB_USER . ';password=' . DB_PASSWORD );

		$view->setById ( 'body-text', '<p>Databaskoppling korrekt.</p>' );


	} catch ( PDOException $e ) {

		$view->setById ( 'body-text', '<p>Databaskopplingen misslyckades.</p>' );

	}
	
	echo $view->getHTML();

?>
