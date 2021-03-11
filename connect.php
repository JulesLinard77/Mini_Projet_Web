
<?php

function connect() {


	try {
		return new PDO("pgsql:dbname='mini_projet_web';host='pgsql2';port=5432", "tpcurseurs", "tpcurseurs");
	}
	catch(PDOException $e) {
	print "Erreur :" . $e->getMessage() . "<br/>";
	die();

	}



}

?>


