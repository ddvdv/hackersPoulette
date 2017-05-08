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

			<h1 class="titre">Merci pour votre feed-back</h1>

			<div class="content">
 
			<?php 

			// Fonction de vérification d'un champ type string
			function verifString($key, $value){
				//Sanitazation du champ
		 		$value = filter_var($value, FILTER_SANITIZE_STRING);
		 		//Vérification que le champ n'est pas vide
	 			if ($value == "") {
		 			die("Veuillez renseigner le champ " . $key . " dans un format valide.");
		 		}
		 		echo "<p>" . $key . ":  " . $value . "</p>";
		 	}

			// Fonction de vérification d'un email
			function verifEmail($key, $value){
				//Sanitazation du champ
	 			$value = filter_var($value, FILTER_SANITIZE_EMAIL);
	 			//Validation format email
		 		if ($value != filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		 			die("Veuillez renseigner votre adresse email dans un format valide.");
		 		}
		 		echo "<p>" . $key . ":  " . $value . "</p>";
		 	}

		 	// Vérification que les adresses emails sont identiques
		 	if (isset($_GET['email']) AND isset($_GET['emailConfirm'])) {
		 		if ($_GET['email'] != $_GET['emailConfirm']){
		 			die("Les adresses emails renseignées ne sont pas identiques. <br>");
		 		}
		 	}
		 	// Si GET est set, 
		 	if (isset($_GET['email']) AND isset($_GET['emailConfirm'])) {
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
		 	}

			// Si GET n'est pas set, réorienter vers form
			else {
				echo "Merci de" ?> <a href="form.php">remplir le formulaire</a> <?php echo "avant d'accéder à cette page" ;
			}

			?>


			</div>

			

	</body>
</html>
