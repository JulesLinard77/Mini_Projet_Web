<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Search collection</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<form action="ajout.php" method="get">
    <h1 class="header"><img class="logo" src="lego.png" alt="Logo de l'entreprise lego."/>   Résultats de la requête
        <button name="button" class="retour">Revenir à la page précédente</button>
    </h1><br>
</form>

<?php



if(file_exists("connect.php")) {
	include("connect.php");
}


$idp = $_POST["id_proprietaire"];
$pnp = $_POST["prenom_proprietaire"];
$np = $_POST["nom_proprietaire"];
$vp = $_POST["ville_proprietaire"];
$sql = connect();
try {
$request = $sql->prepare("INSERT INTO proprietaire (id_proprio,prenom_proprio,nom_proprio,ville_proprio) VALUES ('$idp','$pnp','$np','$vp')");
$request->execute(array());

}
catch(PDOException $e) {

	print "Erreur :" . $e->getMessage() . "<br/>";
	die();

}
?>
<table>
    <tr class="case">
        <td class="case relatif">
            Les informations ont été insérées dans la base de données.
        </td>
    </tr>
</table>


</body>
</html>