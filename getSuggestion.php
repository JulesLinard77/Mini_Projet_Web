
<?php 
$type= $_GET["type"];
$value = $_GET["value"];
$query="";

if(file_exists("connect.php")) {
	include("connect.php");
}

try{
	$bdd = connect();
}
catch(PDOException $e) {
	print "Erreur :" . $e->getMessage() . "<br/>";
	die();
}



switch($type) {
	case "owner":

		$query = "SELECT * FROM proprietaire WHERE nom_proprio LIKE '".$_GET["value"] . "%' OR prenom_proprio LIKE '".$_GET["value"]."%'";
		break;
	case "legoPiece":
		$query = "SELECT * FROM lego WHERE nom_lego LIKE '".$_GET["value"]."%'";
		break;
	case "legoType":
		$query = "SELECT type_lego FROM lego WHERE type_lego LIKE '".$value."%'  GROUP BY type_lego";
		
		break;
}


$result = $bdd->query($query);

$res = $result->fetchAll();
$out = "";
foreach($res as $elem) {
	switch($type) {
		case "owner":
			$out .= $elem["nom_proprio"] . ", " . $elem["prenom_proprio"] . " ; ";
			break;
		case "legoPiece":
			$out .= $elem["nom_lego"] . " ; ";
			break;
		case "legoType":
			$out .= $elem["type_lego"] . " ; ";

			break;
	}	
}
$bdd=null;

echo($out);
?>


