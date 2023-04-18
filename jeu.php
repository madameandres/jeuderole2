<?
session_start();
include "verification.php";
include "header.php";

if (isset($_GET["next"])) {
	$_SESSION["progression"] = $_SESSION["progression_next"];
}
// Affichage de la page en cours
include $_SESSION["progression"] . ".php";
include "footer.php";
