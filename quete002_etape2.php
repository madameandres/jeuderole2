<?
//$_SESSION['progression_next'] = "quete002_etape2";
?>
<div id="wrapper">
	<main>
		<h2>Vous avez accepté la quête ! </h2>
		<p> Après avoir enquêté sur la disparition des récoltes, vous avez découvert que certains villageois ont volé
			les provisions pour leur propre usage. </br /> Le chef du village est furieux et décide d'organiser une
			confrontation entre les villageois et les voleurs pour récupérer les provisions volées.</p>
		<form id="quete2" action="jeu.php?next=1" method="POST">
			<input type="radio" name="action" id="accepter" value="accepter">
			<label for="accepter"> Accepter la confrontation et affronter les voleurs.</label>
			<br>
			<input type="radio" name="action" id="refuser" value="refuser">
			<label for="refuser">Refuser la confrontation et essayer de convaincre les voleurs de rendre les provisions.
			</label>
			<br>
			<br>
			<button type="submit">Continuer</button>
		</form>
	</main>
</div>