<!DOCTYPE html>
	<html>
		<body>
			<form method="get">
				<input name="prenom" placeholder="prénom de l'enfant">
				<label> <br>
					<input name="excuse" type="radio" value="malade">malade
				</label>
				<label>
					<input name="excuse" type="radio" value="grand-mere">grand-mere
				</label>
				<label>
					<input name="excuse" type="radio" value="poisson">poisson
				</label>
				<label>
					<input name="excuse" type="radio" value="soleil">soleil
				</label> <br>

				<input name="prof" placeholder="prénom institutrice">
				<input type="submit" value="submit">
			</form>

			<?php
				$prof = $_GET['prof'];
				$excuse = $_GET['excuse'];
				$prenom = $_GET['prenom'];
			?>
			<br>
			<br>
			<br>

			<h3>
			<p>Chère <?php echo $prof ?>, </p>

			<p>
<<<<<<< HEAD:excuse.php
				Je vous prie d'excuser l'absence ce <?php echo date(d m y); ?>, du fruit de mes entrailles, <?php echo $prenom ?>.
=======
				Je vous prie d'excuser l'absence ce <?php echo date('d m y'); ?>, du fruit de mes entrailles, <?php echo $prenom ?>.
>>>>>>> master:exo php/excuse.php
			</p>

			<p>
				En effet, suite
				<?php 

				if ($excuse == 'malade') {
					echo "à l'effroyable rhume l'ayant frappé sans crier gare, ";
				}

				elseif ($excuse == 'grand-mere') {
					echo "à la disparition subite de sa grand-mère (elle était là et puis pouf, plus là, )";
				}

				elseif ($excuse == 'poisson') {
					echo "aux ravages gastriques engendrés par le poisson pas frais dégusté vendredi dernier à la cantine, ";
				}

				elseif ($excuse == 'soleil') {
					echo "à la météo tout à fait délicieuse que nous offre le ciel aujourd'hui, ";
				}

				?>
				sa présence aujourd'hui au sein de votre institution est  impossible.
			</p>

				<p>	
				Respectueusement,
				</p>

				<p>
				Le père de <?php echo $prenom ?>  <br>
<<<<<<< HEAD:excuse.php
				Signature le <?php echo (strftime("%A %d %B")); ?>
=======
				Signature le <?php echo date('d m y'); ?>
>>>>>>> master:exo php/excuse.php
				</p>



			 </h3>