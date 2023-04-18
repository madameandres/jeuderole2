<?
$_SESSION['progression_next'] = "quete001_etape4";


// On récupère la valeur du choix du joueur
$_SESSION["choix"] = $_POST['action'];
$classe = $_SESSION["classe"];

// En fonction du choix, on affiche un message différent
switch ($_SESSION["choix"]) {
	case 'attaquer':
		$message = "Vous avancez rapidement vers le buisson, en brandissant votre épée.<br/> " .
			"Des gobelins sont surpris par cette attaque soudaine et tentent de riposter. <br/><br/>" .
			"Vous réussissez à en éliminer quelques-uns, mais vous êtes vite submergé par le nombre et la force de vos ennemis." .
			"Alors que vous tentez de parer un coup de hache, vous êtes désarmé et vous vous retrouvez à terre, " .
			"vulnérable. <br/><br/>Les gobelins en profitent pour vous rouer de coups, jusqu'à ce que vous ne bougiez plus.<br/>" .
			"Le silence retentit dans la forêt, ponctué uniquement par les cris de victoire des gobelins." .
			"<p class='surbrillance'>Vous vous relevez dans un dernier effort, et vous dans une rage folle vous ";

		switch ($classe) {
			case "voleur":
				$message .= "prenez les gobelins par surprise en dérobant leur butin avant de fuir dans les ombres de la forêt.";
				$_SESSION['piece'] += 100;
				break;
			case "guerrier":
				$message .= "brandissez votre épée et chargez sur les gobelins, faisant voler des étincelles à chaque coup porté.";
				break;
			case "mage":
				$message .= "lancez une puissante boule de feu, incinérant les gobelins sur place.";
				break;
			case "clerc":
				$message .= "invoquez la lumière divine pour aveugler les gobelins, puis utilisez votre marteau sacré pour les écraser.";
				break;
			default:
				$message .= "ne savez pas quoi faire et finissez par être submergé par les gobelins.";
				break;
		}

		$message .= "</p>";
		break;
	case 'approcher':
		$message = "Lorsque vous vous approchez lentement du buisson, vous remarquez que quelque chose bouge derrière.<br/>
		<br/>Vous décidez alors de continuer à avancer pour en avoir le cœur net. <br/><br/>
		Soudain, une créature surgit du buisson et vous attaque. <br/><br/>
		<br/>Vous réalisez que la créature est un loup-garou, une bête redoutable capable de se transformer en un monstre sanguinaire les soirs de pleine lune. " .
			"<br/>Malheureusement pour vous, c'était précisément le cas ce soir-là.<br/>";
		switch ($classe) {
			case "voleur":
				$message .= "<p class='surbrillance'>Votre astuce vous sauve une fois de plus : vous parvenez à vous dégager du loup-garou et à prendre la fuite avant qu'il ne vous rattrape. Vous êtes gravement blessé, mais vous avez survécu.</p>";
				$_SESSION['pv'] -= 5;
				break;
			case "guerrier":
				$message .= "<p class='surbrillance'>Votre force surhumaine vous permet de lutter contre le loup-garou jusqu'à ce qu'il prenne la fuite, effrayé par votre ténacité. Vous êtes blessé, mais vous avez sauvé votre vie.</p>";
				$_SESSION['pv'] += 100;
				break;
			case "mage":
				$message .= "<p class='surbrillance'>Votre maîtrise de la magie vous permet de repousser le loup-garou et de vous enfuir. Vous êtes épuisé, mais vous avez survécu à l'attaque.</p>";
				$_SESSION['pv'] -= 6;
				break;
			case "clerc":
				$message .= "<p class='surbrillance'>Votre foi vous permet de repousser le loup-garou et de vous enfuir. Vous êtes épuisé, mais vous avez survécu à l'attaque grâce à votre détermination.</p>";
				$_SESSION['pv'] -= 6;
				break;
		}
		break;
	case 'fuir':
		$message = "<p>Vous décidez de fuir le champ de bataille et de courir le plus vite possible dans la direction opposée. </p>
		Votre coeur bat la chamade et vous êtes à bout de souffle lorsque vous vous arrêtez enfin pour reprendre votre souffle.<br/><br/>
		C'est alors que vous entendez un bruit sourd derrière vous. <br/><br/>
		Vous vous retournez pour voir un énorme rocher qui vous fonce dessus. <br/><br/>";
		switch ($classe) {
			case "voleur":
				$message .= "<p class='surbrillance'>Vous êtes rapide et agile, et vous parvenez à esquiver le rocher qui vous fonce dessus. Vous saisissez cette opportunité pour vous faufiler dans une crevasse rocheuse à proximité, où vous trouvez un passage secret menant à un trésor caché. Vous récupérez le trésor et vous réalisez que vous pourrez l'utiliser pour aider le village de Brennac dans sa quête. Vous vous remettez en route avec une nouvelle motivation, prêt à affronter les dangers qui vous attendent.</p>";
				break;
			case "guerrier":
				$message .= "<p class='surbrillance'>Vous êtes solide et courageux, et vous parvenez à contrer le rocher en le frappant de votre épée. Le rocher se brise en morceaux et vous continuez votre course. Vous arrivez bientôt à une rivière et vous y trouvez un pont détruit. Vous décidez de construire un pont de fortune avec des branches et des pierres, afin de traverser la rivière. Vous réussissez et vous continuez votre quête avec fierté, sachant que vous avez accompli une grande réussite.</p>";
				break;
			case "mage":
				$message .= "<p class='surbrillance'>Vous êtes intelligent et rusé, et vous parvenez à invoquer un bouclier magique pour vous protéger du rocher qui vous fonce dessus. Vous profitez de cette occasion pour explorer les environs et vous trouvez une grotte cachée où vous découvrez des parchemins magiques. Vous apprenez de nouveaux sorts et vous réalisez que vous pourrez les utiliser pour aider le village de Brennac dans sa quête. Vous reprenez votre route avec un sourire satisfait, prêt à faire usage de votre nouvelle magie.</p>";
				break;
			case "clerc":
				$message .= "<p class='surbrillance'>Vous êtes pieux et dévoué, et vous parvenez à invoquer la bénédiction divine pour vous protéger du rocher qui vous fonce dessus. Vous ressentez une force divine vous envahir et vous vous sentez prêt à affronter tous les dangers qui vous attendent. Vous continuez votre route avec une foi renouvelée, sachant que vous pouvez compter sur la protection divine pour vous aider dans votre quête.</p>";
				break;
		}
		break;
	default:
		$message = "Vous n'avez pas sélectionné d'action !";
		break;
}

?>
<div id="wrapper">
	<main>
		<h2>La quête de Brennac</h2>
		<p> <?= $message ?> </p>
		<a href="jeu.php?next=1">Continuer vers le village de Brennac</a>
	</main>
</div>