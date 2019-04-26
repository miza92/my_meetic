<?php
//include_once (__DIR__ . '/../class/user.php');
$error = false;

//vérification que les deux mots de passes sont les mêmes
if (isset($_POST["password"])
	&& !empty($_POST["password"])
	&& isset($_POST["password-confirmation"])
	&& !empty($_POST["password-confirmation"])
	&& ($_POST["password-confirmation"] === $_POST["password"])
){
	$error = true;
	echo "<div>Les mots de passes ne sont pas pareils</div>";
}

//récupération des données
if (!empty ($_POST['email'])
	&& !empty($_POST['nom'])
	&& !empty($_POST['prenom'])
){
	$sql = "SELECT * FROM fiche_personne";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	
	while ($data = $stmt->fetchAll()) {
		if ($_POST['nom'] == $data['nom']) {
			$error = true;
			echo "<div>Ce nom existe déjà</div>";

		}
		if ($_POST['prenom'] == $data['prenom']) {
			$error = true;
			echo "<div>Ce prenom existe déjà</div>";
		}
		if ($_POST['email'] == $data['email']) {
			$error = true;
			echo "<div>Ce mail existe déjà</div>";
		}
	}
}



if ($error == false) {
	$nouveau = new User($_POST["nom"], $_POST["prenom"], $_POST["ville"], $_POST["adresse"], $_POST["cpostal"], $_POST["pays"], $_POST["telephone"], $_POST["sexe"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["date_naissance"], $_POST["email"]);
	$nouveau->creerUtilisateur($_POST["nom"], $_POST["prenom"], $_POST["ville"], $_POST["adresse"], $_POST["cpostal"], $_POST["pays"], $_POST["telephone"], $_POST["sexe"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["date_naissance"], $_POST["email"], $pdo);
}
?>