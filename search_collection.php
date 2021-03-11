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

$coll ='';
if($_POST["selectionlego"] == "alllego") {
	$search = "bynom";
	$coll = '';
}


if($_POST["selectionlego"] == "nomlego") {
	$search = "bynom";
	$coll = $_POST["nomlego"];
}

if($_POST["selectionlego"] == "typelego") {
	$search = "bytype";
	$coll = $_POST["typelego"];
}



if(file_exists("connect.php")) {
	include("connect.php");
}

if(file_exists("print.php")) {
	include("print.php");
	
}


$sql = connect();
try {

$request = $sql->query("SELECT * FROM lego NATURAL JOIN proprietaire");


$collection = $request->fetchAll();


}
catch(PDOException $e) {

	print "Erreur :" . $e->getMessage() . "<br/>";
	die();

}
?>

<table class="requete">
	<tr class="req">
		<th class="entete">Nom de la collection</th>
		<th class="entete">Type de la collection</th>
		<th class="entete">Nombre de pièces dans la collection</th>
		<th class="entete">Prénom du propriétaire</th>
		<th class="entete">Nom du propriétaire</th>
	</tr>
	<?php

if($search == "bynom") {
	foreach($collection as $elements) {
		if($elements["nom_lego"] == $coll || $coll == '') {
			print_collection($elements["nom_lego"], $elements["type_lego"], $elements["nb_pieces"],$elements["prenom_proprio"],$elements["nom_proprio"]);
		}
	}
}

if($search == "bytype") {
	foreach($collection as $elements) {
		if($elements["type_lego"] == $coll || $coll == '') {
			print_collection($elements["nom_lego"], $elements["type_lego"], $elements["nb_pieces"],$elements["prenom_proprio"],$elements["nom_proprio"]);
		}
	}
}
?>
</table>

</body>

</html>