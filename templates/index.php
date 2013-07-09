<?php
	if (!DEFINED ( 'ABSPATH' ) ) {
		DEFINE ( 'ABSPATH', dirname(__FILE__) . '/' );
	}

	require_once ( ABSPATH . 'config.php' );	

	$html = '<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="' . $_SERVER['HTTP_REFERER'] . TEMPLATE_PATH . 'style.css" type="text/css" />

		<title> Placeholder title </title>
	</head>

	<body>

		<header>
			<h1 id="main-header"> Placeholder header </h1>
		</header>

		<article id="body-text">
				
		</article>

	</body>

</html>';
return $html;
?>
