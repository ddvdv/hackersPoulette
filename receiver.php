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
 
 <!--
			Si le formulaire a été soumis:
			  L nettoie chaque champ.
			  L vérifie que chacun des champs obligatoires n'est pas vide (un à la fois).
			  L à la moindre erreur, provoque un arrêt critique via la fonction die("Message d'erreur.");
			  (va voir la doc pour savoir ce qu'elle fait.)
			Sinon, affiche simplement le formulaire.
-->
			<?php 

			// Vérification que GET n'est pas vide
			if (!empty($_GET)) {
				// Validation du prénom
			 	if ($_GET['firstname'] != "") {
			 		$firstname = filter_var($_GET['firstname'], FILTER_SANITIZE_STRING);
			 		if ($firstname == "") {
			 			die("Veuillez renseigner votre prénom dans un format valide");
			 		}
			 		else {}
			 	} 
			 	
			 	else {
			 		die("Veuillez renseigner votre prénom");
			 	}

			 	// Validation du nom
			 	if ($_GET['lastname'] != "") {
			 		$lastname = filter_var($_GET['lastname'], FILTER_SANITIZE_STRING);
			 		if ($lastname == "") {
			 			die("Veuillez renseigner votre nom dans un format valide");
			 		} 
			 		else {}
			 	}
			 	else {
			 		die("Veuillez renseigner votre nom");
			 	}
			 	//Validation de l'adresse email
			 	if ($_GET['email'] != "") {
			 		$email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
			 		if ($email != filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
			 			die("Veuillez renseigner une adresse email dans un format valide");
			 		}
			 		else {}
			 	}
			 	else {
			 		die("Veuillez renseigner une adresse email");
			 	}

			 	//Validation du champ texte
			 	if ($_GET['issue'] != "") {
			 		$issue = filter_var($_GET['issue'], FILTER_SANITIZE_STRING);
			 		if ($issue == "") {
			 			die("Veuillez entrer un message valide pour expliquer votre problème");
			 		}
			 		else {}
			 	} 
			 	
			 	else {
			 		die("Veuillez entrer un message pour expliquer votre problème");
			 	}

			}
			else {
				echo "Merci de"?> <a href="form.php">remplir le formulaire</a> <?php echo "avant d'accéder à cette page" ;
			}

			?>


			</div>

			

	</body>
</html>
