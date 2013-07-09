<?php
	require_once ( 'loader.php' );
?>

<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8" />

		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>style.css" />

	</head>

	<body>

		<h1>Installera</h1>

		<?php
			// Try to connect to the Postgres database
			try {
			
				$dbh = new PDO( 'pgsql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';user=' . DB_USER . ';password=' . DB_PASSWORD );
				$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

				?>
				<p>
					Databaskoppling upprättad.
				</p>
				<form id="create-admin" name="create-admin">
					<p>Ange ett användarnamn och lösenord för
					administratörsanvändaren av den här Vesper Lynd-installationen.</p>

					<label for="username">Användarnamn</label>
					<input type="text" name="username" value="admin" />

					<label for="password">Lösenord</label>
					<input type="password" name="password" value="" />
				
					<label for="repassword">Upprepa lösenord</label>
					<input type="password" name="repassword" value="" />

					<input type="submit" value="Installera" />
				
				</form>

				<?php

			} catch ( PDOException $e ) {

				echo '<p>
					Ett fel uppstod vid anslutning till databasen.
					</p>';

			}
		?>

	</body>

</html>
