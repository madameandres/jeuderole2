<?
session_start();

include "bdd.php";
$connexion = connexion();
updateStatPerso($connexion);

$_SESSION['progression'] = $_SESSION["progression_next"];
header("Location:personnage.php");
