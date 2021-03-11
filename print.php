<?php

function print_collection($nom_lego, $type_lego, $nb_pieces, $nom_proprio, $prenom_proprio) {

	echo "
	
	
	<tr class='req'> 	
		<td class='req'>$nom_lego</td> 
		<td class='req'>$type_lego</td>
		<td class='req'>$nb_pieces</td>
		<td class='req'>$nom_proprio</td>
		<td class='req'>$prenom_proprio</td>
	</tr>


	";



}

function print_owner($nom_proprio, $prenom_proprio, $nb_coll) {


	echo "
	<tr class='req'>
		<td class='req'>$nom_proprio</td>
		<td class='req'>$prenom_proprio</td>
		<td class='req'>$nb_coll</td>
	</tr>";




}
?>

