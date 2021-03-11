<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Ajout</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <form action="index.php" method="get">
            <h1 class="header"><img class="logo" src="lego.png" alt="Logo de l'entreprise lego."/>   Modification de votre collection
                <button name="button" class="retour">Revenir à la page d'accueil</button>
            </h1><br>
        </form>
        <table>
            <tr class="case ajout">
                <td class="case relatif">
                <form action="add_prop.php" method="post">
                    <p class="ajout">Informations sur l'utilisateur à ajouter:</p>
                    <div>
                        <label for="idprop">Votre id: </label>
                        <input type="text" id="idprop" name="id_proprietaire" required>
                    </div>
                    <div>
                        <label for="nomprop">Votre nom: </label>
                        <input type="text" id="nomprop" name="nom_proprietaire" required> 
                    </div>
                    <div>
                        <label for="prenomprop">Votre prénom: </label>
                        <input type="text" id="prenomprop" name="prenom_proprietaire" required> 
                    </div>
                    <div>
                        <label for="villeprop">Votre ville: </label>
                        <input type="text" id="villeprop" name="ville_proprietaire" required> 
                    </div>
                    <div>
                        <button name="button" class="recherche">Ajouter le collectionneur à la base de données</button>
                    </div>
                </form>
                </td>
                <td class="case relatif">
                <form action="add_lego.php" method="post">
                    <p class="ajout">Les informations sur la pièce LEGO à ajouter:</p>
                    <div>
                        <label for="idlegoprop">L'id du propriétaire de la pièce LEGO: </label>
                        <input type="text" id="idlegoprop" name="id_lego_prop" required>
                    </div>
                    <div>
                        <label for="idlego">L'id de la pièce LEGO: </label>
                        <input type="text" id="idlego" name="id_lego" required>
                    </div>
                    <div>
                        <label for="nomlego">Le nom de la pièce LEGO: </label>
                        <input type="text" id="nomlego" name="nom_lego" required> 
                    </div>
                    <div>
                        <label for="typelego">Le type de la pièce: </label>
                        <input type="text" id="typelego" name="type_lego" required> 
                    </div>
                    <div>
                        <label for="nblego">Le nombre de pièce(s) à ajouter: </label>
                        <input type="text" id="nblego" name="nb_lego" required> 
                    </div>
                    <div>
                        <button name="button" class="recherche">Ajouter cette pièce à votre collection</button>
                    </div>
                </form>
                </td>
            </tr>
        </table>
    </body>
</html>
