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

$idp = $_POST['id_lego_prop'];
$idl = $_POST["id_lego"];
$nl = $_POST["nom_lego"];
$tl = $_POST["type_lego"];
$nbl = $_POST["nb_lego"];
$sql = connect();
try {
$request = $sql->prepare("INSERT INTO lego (id_lego,nom_lego,type_lego,nb_pieces,id_proprio) VALUES ('$idl','$nl','$tl','$nbl','$idp')");
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
            La collection a bien été insérée dans la base de données.
        </td>
    </tr>
</table>


</body>
</html>