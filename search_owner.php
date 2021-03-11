<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Search collection</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<form action="recherche.php" method="get">
    <h1 class="header"><img class="logo" src="lego.png" alt="Logo de l'entreprise lego."/>   Résultats de la requête
        <button name="button" class="retour">Revenir à la page précédente</button>
    </h1><br>
</form>

<?php




if($_POST["selectionprop"] == "allprop") {
	$own = '';

}

if($_POST["selectionprop"] == "singleprop") {
	$own = $_POST["nomprop"];
}


if(file_exists("connect.php")) {
	include("connect.php");
}

if(file_exists("print.php")) {
	include("print.php");
	
}




$sql = connect();
try {

$request = $sql->query("SELECT * FROM proprietaire");
$requestNbColl = $sql->query("SELECT p.id_proprio, count(l.id_lego) as nbCollection FROM proprietaire as p LEFT JOIN lego as l ON p.id_proprio = l.id_proprio GROUP BY p.id_proprio");

$nbColl = $requestNbColl->fetchAll();

$owner = $request->fetchAll();

}
catch(PDOException $e) {

	print "Erreur :" . $e->getMessage() . "<br/>";
	die();

}
?>


<table class="requete">
	<tr class="req">
		<th class="entete">Prénom</th>
		<th class="entete">Nom</th>
		<th class="entete">Nombre de collection(s)</th>
	</tr>
	<?php
	foreach($owner as $elements) {
		if($elements["nom_proprio"] == $own || $own == '' || $elements["prenom_proprio"] == $own) {
			foreach($nbColl as $nbCollOwn) {
				if($nbCollOwn["id_proprio"] == $elements["id_proprio"]) {
					print_owner($elements["prenom_proprio"],$elements["nom_proprio"],$nbCollOwn["nbcollection"]);
				}
			}
		}
	}
	?>
</table>
</body>
</html>