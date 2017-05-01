<!DOCTYPE html>
	<html>
		<body>
			<form method="get">
				<input name="sujet" placeholder="prénom de l'enfant">
				<label> <br>
					<input name="excuse" type="radio" value="H">malade
				</label>
				<label>
					<input name="excuse" type="radio" value="F">grand-mere
				</label>
				<label>
					<input name="excuse" type="radio" value="H">poisson
				</label>
				<label>
					<input name="excuse" type="radio" value="F">soleil
				</label> <br>

				<input name="prof" placeholder="prénom institutrice">
				<input type="submit" value="submit">
			</form>

			<?php

			$sujet = $_GET['sujet'];
//			$verbe = $_GET['verbe'];
//			$complement = $_GET['complement'];
			$gender = $_GET['gender'];
			$adjectif;

			if ($gender == "H") {
				$adjectif = "joli";
				}
			else {
				$adjectif = "jolie";
			}


			?>

			<h1><?php echo $sujet . " " . "est " . $adjectif; ?> </h1>