<!DOCTYPE html>


<html lang="fr">
    <head>
        <title>Page d'accueil</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h1 class="header"><img class="logo" src="lego.png" alt="Logo de l'entreprise lego."/>   Bienvenue !</h1><br>
        <table>
            <tr class="case">
                <td class="case" colspan = 2>
                <p class="grandetaille">Sur ce site, vous pouvez consulter les collections LEGO de différents utilisateurs du site, ou tout simplement, rechercher une pièce LEGO en particulier.</p>
                </td>
            </tr>
            <tr class="case">
                <td class="case relatif">
                    <div>
                        <p class="grandetaille">
                            Vous pouvez effectuer une recherche sur les collectionneurs ou sur des pièces LEGO en cliquant sur ce bouton.
                        </p>
                    </div>
                    <div>
                        <form action="recherche.php" method="get">
                            <button name="button" class="recherche">Rechercher dans la base de données</button>
                        </form>
                    </div>
                </td>
                <td class="case relatif">
                    <div>
                        <p class="grandetaille">
                            Vous pouvez ajouter votre collection au site ou rajouter à celle-ci des pièces LEGO en cliquant sur ce bouton.
                        </p>
                    </div>
                    <div>
                        <form action="ajout.php" method="get">
                            <button name="button" class="recherche">Ajouter ou compléter votre collection</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
