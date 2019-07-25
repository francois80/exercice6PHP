<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 6 PHP</title>
	</head>
	<body>
		<h1>Afficher tous les éléments du tableau $week grâce à une boucle.</h1>
			<?php
			$week = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
			//parcours du tableau pour afficher les jours de la semaine dans une <p>
			foreach ($week as $days) { ?>
				<p><?php echo $days ?></p>
	<?php	} ?>
	</body>
</html>
