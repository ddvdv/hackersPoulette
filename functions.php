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
?>