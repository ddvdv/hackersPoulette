<?php
    include 'functions.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Hackers Poulette Help</title>
		<link rel="stylesheet" type="text/css" href="pureform/forms.css">
		<link rel="stylesheet" type="text/css" href="pureform/buttons.css">
		<link rel="stylesheet" type="text/css" href="pureform/perso.css">
	</head>

	<body>
		<div class="header">
			<img class="logo" src="hackers-poulette-logo.png" alt="logo">
		</div>

			<div class="content" style="text-align: center !important">
 
		<?php
		 	// Vérification que les adresses emails sont identiques
		 	if (isset($_GET['email']) AND isset($_GET['emailConfirm'])) {
		 		if ($_GET['email'] != $_GET['emailConfirm']){
		 			die("Les adresses emails renseignées ne sont pas identiques. <br>");
		 		}
		 	}
		 	// Si GET est set, 
		 	if (isset($_GET['email']) AND !isset($_GET['honey'])) {
		 	?>
			<h1 class="titre">Merci pour votre feed-back</h1>
			<?php
		 		// lancer une boucle pour vérification de chaque champ
		 		foreach ($_GET as $key => $value) {
					// Pour chaque champ GET, voir si 'email' et faire les vérif en fonction
					if ($key == 'email' OR $key == 'emailConfirm') {
						verifEmail($key, $value);
					}
					else {
						verifString($key, $value);
					}
				}
			 	mail('vdv.david@gmail.com', 'test php', 'contenu du message');
		
		 	}

			// Si GET n'est pas set, réorienter vers form
			else {
				echo "Merci de" ?> <a href="form.php">remplir le formulaire</a> <?php echo "avant d'accéder à cette page" ;
			}
		?>
			</div>
	</body>
</html>
