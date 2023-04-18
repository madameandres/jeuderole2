<?
$_SESSION['progression_next'] = "quete001_etape5";

// On récupère la valeur du choix du joueur
$classe = $_SESSION["classe"];
$choix = $_SESSION["choix"];
// Exemple de fin en fonction des choix précédemment faits et de la classe du personnage
$message = "Vous arrivez enfin au village de Brennac.<br/><br/>";

switch ($classe) {
	case "voleur":
		$message .= "Vous êtes accueilli avec suspicion, car les habitants savent que vous êtes un voleur. <br/>Cependant, grâce à votre astuce et à votre charisme, vous parvenez à les convaincre que vous êtes là pour les aider. <br/>Vous utilisez vos compétences pour infiltrer le repaire des bandits et pour voler leur butin<br/>Vous le rapportez ensuite au village et le remettez au chef. <br/>Celui-ci vous remercie et vous offre une récompense pour vos services.";
		$_SESSION['piece'] += 300;
		break;
	case "guerrier":
		$message .= "Vous êtes accueilli en héros, car grâce à vous, les bandits ont été vaincus et la paix est revenue dans la région. <br/>Le chef du village vous accueille et vous récompense généreusement pour votre bravoure. <br/>Vous vous sentez fier de vous et de votre réussite.";
		$_SESSION['piece'] += 150;
		break;
	case "mage":
		$message .= "Vous êtes accueilli avec méfiance, car les habitants craignent les pouvoirs magiques. <br/>Cependant, grâce à votre intelligence et à votre diplomatie, vous parvenez à les convaincre que vous êtes là pour les aider. <br/>Vous utilisez vos pouvoirs pour soigner les blessés et pour aider à reconstruire le village. <br/>Finalement, le chef du village vous remercie et vous offre une récompense pour vos services.";
		$_SESSION['piece'] += 100;
		break;
	case "clerc":
		$message .= "Le chef du village vous accueille avec gratitude et vous remercie d'avoir sauvé leur communauté. <br/>
		Il vous offre de l'or en récompense et vous invite à vous reposer dans leur village aussi longtemps que vous le souhaitez. <br/>Vous vous sentez béni et heureux d'avoir pu aider les gens de Brennac. <br/>Vous remerciez humblement le chef du village et vous vous retirez en paix, en sachant que votre mission est accomplie.";
		$_SESSION['piece'] += 100;
		break;
}

?>
<div id="wrapper">
	<main>
		<h2>La quête de Brennac</h2>
		<p> <?= $message ?> </p>
		<a href="jeu.php?next=1">Retourner au village</a>
	</main>
</div>