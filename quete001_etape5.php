<?

// On récupère la valeur du choix du joueur
$classe = $_SESSION["classe"]; // Récupérer la classe du joueur (dans cet exemple, on suppose que la classe est stockée dans la variable $classe)
switch ($classe) {
	case 'guerrier':
		$message = "Vous retournez au village de Brennac, fier de votre victoire sur les bandits. <br/><br/>
                    Le chef du village vous accueille chaleureusement et vous remet votre récompense. <br/><br/>
                    <span class='surbrillance'>Félicitations, vous avez réussi votre quête et sauvé le village de Brennac !</span>";
		break;
	case 'voleur':
		$message = "Vous retournez au village de Brennac, satisfait d'avoir rempli votre mission. <br/><br/>
                    Le chef du village vous remercie pour votre aide et vous remet votre récompense. <br/><br/>
                    <span class='surbrillance'>Mission accomplie ! Vous pouvez désormais retourner à vos activités habituelles.</span>";
		break;
	case 'clerc':
		$message = "Vous retournez au village de Brennac, heureux d'avoir aidé à protéger les villageois. <br/><br/>
                    Le chef du village vous accueille avec gratitude et vous remercie pour votre aide précieuse. <br/><br/>
                    <span class='surbrillance'>Grâce à vous, les villageois peuvent désormais dormir sur leurs deux oreilles. Vous avez accompli une mission noble et honorable.</span>";
		break;
	default:
		$message = "Vous retournez au village de Brennac pour remettre votre rapport au chef du village. <br/><br/>
                    Après avoir écouté attentivement votre récit, le chef du village vous remet votre récompense. <br/><br/>
                    <span class='surbrillance'>Vous avez accompli votre mission avec succès. Félicitations !</span>";
		break;
}

$_SESSION['piece'] += 100;
$_SESSION['progression_next'] = "quete002_etape1";

?>
<div id="wrapper">
	<main>
		<h2>La quête de Brennac</h2>
		<p> <?= $message ?> </p>
		<a href="update.php">Terminer la quête</a>
	</main>
</div>