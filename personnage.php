<?
session_start();
include "bdd.php";
$pdo = connexion();
$perso = getAllPerso($pdo);

include "header.php";
$i = 0;
?>
<div id="wrapper">
	<main>
		<h2>Classement des personnages</h2>
		<table>
			<thead>
				<tr>
					<th>Position</th>
					<th>Nom</th>
					<th>Race</th>
					<th>Classe</th>
					<th>Niveau</th>
					<th>Points de vie</th>
					<th>Pièces d'or</th>
				</tr>
			</thead>
			<tbody>
				<? foreach ($perso as $p) { ?>
					<? if ($p["nom"] == $_SESSION["nom"]) {
						$class = "surbrillance";
					} else {
						$class = "";
					}
					$i++;
					?>
					<tr class=<?= $class ?>>
						<td><?= $i ?></td>
						<td><?= $p["nom"] ?></td>
						<td><?= $p["race"] ?></td>
						<td><?= $p["classe"] ?></td>
						<td><?= $p["niveau"] ?></td>
						<td><?= $p["pv"] ?></td>
						<td><?= $p["piece"] ?></td>
					</tr>
				<? } ?>
			</tbody>
		</table>
	</main>
</div>
<? include "footer.php";
