<?
session_start();
include "bdd.php";
$connexion = connexion();

if (isset($_POST['nom'])) {
    // récupération des données du formulaire
    $nom = $_POST['nom'];
    $race = $_POST['race'];
    $classe = $_POST['classe'];
    $niveau = $_POST['niveau'];
    $pv = $_POST['pv'];
    $force_ = $_POST['force_'];
    $dexterite = $_POST['dexterite'];
    $constitution = $_POST['constitution'];
    $intelligence = $_POST['intelligence'];
    $sagesse = $_POST['sagesse'];
    $charisme = $_POST['charisme'];

    $id = ajouterPersonnage(
        $connexion,
        $nom,
        $race,
        $classe,
        $niveau,
        $pv,
        $force_,
        $dexterite,
        $constitution,
        $intelligence,
        $sagesse,
        $charisme
    );

    $_SESSION["nom"] = $nom;
    $_SESSION["race"] = $race;
    $_SESSION["classe"] = $classe;
    $_SESSION["pv"] = $pv;
    $_SESSION["piece"] = 0;
    $_SESSION["id"] = $id;
    $_SESSION['progression'] = "start";
    // redirection vers la page d'accueil
    header('Location: jeu.php');
    exit();
}
