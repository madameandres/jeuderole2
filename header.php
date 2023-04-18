<!DOCTYPE html>
<html>

<head>
	<title>Félicitations !</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<h1>Jeu de rôle médiéval</h1>
		<nav>
			<ul>
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="personnage.php">Personnages</a></li>
				<li><a href="jeu.php">Quêtes</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</nav>
	</header>
	<div class="stats"> <?= $_SESSION["nom"] ?> le <?= $_SESSION["classe"] ?> : <img width="18" src="img/piece.gif" />
		<?= $_SESSION["piece"] ?> pièce<?= $_SESSION["piece"] > 0 ? "s" : "" ?> | <img width="18" src="img/coeur.png" />
		<?= $_SESSION["pv"] ?> pv | </div>