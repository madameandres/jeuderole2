<?

function connexion()
{
	$local = true;
	if ($local) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "jeu_de_role";
	} else {
		$servername = "192.168.1.XX";
		$username = "root";
		$password = "";
		$dbname = "jeu_de_role";
	}

	try {
		$pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $error) {
		echo $error;
	}
	return $pdo;
}

function ajouterPersonnage(
	$pdo,
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
) {

	// préparation de la requête SQL
	$stmt = $pdo->prepare("INSERT INTO personnage (nom, race, classe, niveau, pv, force_, dexterite, constitution, intelligence, sagesse, charisme)
    VALUES (:nom, :race, :classe, :niveau, :pv, :force_, :dexterite, :constitution, :intelligence, :sagesse, :charisme)");

	// exécution de la requête SQL avec les données du formulaire
	$return = $stmt->execute([
		':nom' => $nom,
		':race' => $race,
		':classe' => $classe,
		':niveau' => $niveau,
		':pv' => $pv,
		':force_' => $force_,
		':dexterite' => $dexterite,
		':constitution' => $constitution,
		':intelligence' => $intelligence,
		':sagesse' => $sagesse,
		':charisme' => $charisme
	]);

	return $pdo->lastInsertId();
}

function getAllPerso($pdo)
{
	// exécution de la requête SQL avec les données du formulaire
	$stmt = $pdo->prepare("select * from  personnage order by (pv+piece) desc");
	if ($stmt->execute()) {
		$perso = $stmt->fetchAll();
	}
	return $perso;
}
function updateStatPerso(
	$pdo
) {

	// préparation de la requête SQL
	$stmt = $pdo->prepare("UPDATE personnage set piece = :piece, pv=:pv where id= :id");

	// exécution de la requête SQL avec les données du formulaire
	$stmt->execute([
		':piece' => $_SESSION["piece"],
		':pv' => $_SESSION["pv"],
		':id' => $_SESSION["id"]
	]);

	//echo $stmt->debugDumpParams();
}

function deletePersonnage(
	$pdo
) {

	// préparation de la requête SQL
	$stmt = $pdo->prepare("DELETE FROM personnage where id= :id");

	// exécution de la requête SQL avec les données du formulaire
	$stmt->execute([
		':id' => $_SESSION["id"]
	]);
}
