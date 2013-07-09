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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia massa a nunc mollis, quis sagittis est posuere. Etiam nec velit elit. Vivamus vel sapien vel magna tempus rhoncus eu id elit. Maecenas dapibus tincidunt mauris, nec adipiscing velit cursus sed. Praesent tincidunt gravida consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet blandit nunc. Quisque facilisis elit mauris, vel commodo dolor tristique non.</p>

			<p>Etiam purus neque, rutrum et magna a, tincidunt aliquam nunc. Aliquam erat volutpat. Ut accumsan ultrices turpis, non rutrum lectus sollicitudin non. Proin hendrerit egestas urna ut rhoncus. Mauris eleifend turpis sed semper imperdiet. Nulla volutpat eget orci eget aliquam. Mauris pretium, lorem eu accumsan commodo, lacus risus fringilla lacus, et mollis erat magna a purus. Nullam varius felis erat, ac dictum mauris porttitor a. Suspendisse metus dui, laoreet id odio et, imperdiet mattis elit. Cras mollis, tellus vel tristique scelerisque, nunc lacus congue nisl, ac vestibulum magna lorem quis augue. Morbi cursus aliquet augue id malesuada. Suspendisse faucibus suscipit odio, a pulvinar ante iaculis id.	</p>		
		</article>

	</body>

</html>';
return $html;
?>
