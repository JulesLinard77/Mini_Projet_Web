<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Recherche</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <form action="index.php" method="get">
            <h1 class="header"><img class="logo" src="lego.png" alt="Logo de l'entreprise lego."/>   Recherche dans la base de données
                <button name="button" class="retour">Revenir à la page d'accueil</button>
            </h1><br>
        </form>
        <table>
		    <tr class="caserecherche">
		        <td class="caserecherche relatif">
		            <form action="search_owner.php" method="post">
                        <div>
                            <input type="radio" id="allprop" name="selectionprop" value="allprop" onclick="document.getElementById('nomproprietaire').style.display='none'" checked/>
                            <label for="selectionprop">Tous les propriétaires de collections de LEGO</label>
                        </div>
                        <div>
                            <input type="radio" id="particulier" name="selectionprop" value="singleprop"  onclick="document.getElementById('nomproprietaire').style.display='block'"/>
                            <label for="particulier">Nom ou prénom du propriétaire de la collection la collection: </label>
                            <input type="text" id="nomproprietaire" name="nomprop" style="display:none" onkeyup="suggestionOwner(this.value)"><br>
                        </div>
                        <div>
                            <p>Suggestions:<span id="suggestionOwner"></span></p>
                        </div>
                        <div>
                            <button name="button" class="recherche" type="submit">Afficher les résultats de la recherche</button>
			            </div>
		            </form>
		        </td>
                <td class="caserecherche relatif">
                    <form action ="search_collection.php" method="post">
                        <div>
                            <input type="radio" id="alllego" name="selectionlego" value="alllego" onclick="document.getElementById('nomlegotext').style.display='none' ; document.getElementById('typelegotext').style.display='none'" checked/>
                            <label for="selectionlego">Toutes les pièces LEGO</label>
                        </div>
                        <div>
                            <input type="radio" id="nomlego" name="selectionlego" value="nomlego" onclick="document.getElementById('nomlegotext').style.display='block' ; document.getElementById('typelegotext').style.display='none'"/>
                            <label for="nomlego">Nom de la pièce LEGO: </label>
                            <input type="text" id="nomlegotext" name="nomlego" style="display:none" onkeyup="suggestionLegoPiece(this.value)"><br>
                        </div>
                        <div>
                            <input type="radio" id="typelego" name="selectionlego" value="typelego" onclick="document.getElementById('nomlegotext').style.display='none' ; document.getElementById('typelegotext').style.display='block'"/>
                            <label for="typelego">Type de LEGO: </label>
                            <input type="text" id="typelegotext" name="typelego" style="display:none" onkeyup="suggestionLegoType(this.value)"><br>
                        </div>
                        <div>
                            <p>Suggestions:<span id="suggestionLego"></span></p>
                        </div>
                        <div>
                            <button name="button" class="recherche">Afficher les résultats de la recherche</button>
                        </div>
		            </form> 
		        </td>
            </tr>
            <!---<tr class="case">
                <td class="case" colspan=2>
                    Résultat de la recherche :
                </td>
            </tr>--->
        </table>

        <script>
            function suggestionLegoType(str) {
                var xhttp;
                if(str.length == 0) {
                    document.getElementById("suggestionLego").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("suggestionLego").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "getSuggestion.php?type=legoType&value="+str, true);

                xhttp.send();

            }

            function suggestionLegoPiece(str) {
                var xhttp;
                if(str.length == 0) {
                    document.getElementById("suggestionLego").innerHTML = "uruur";
                    return;
                }

                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("suggestionLego").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "getSuggestion.php?type=legoPiece&value="+str, true);

                xhttp.send();

            }

            function suggestionOwner(str) {
                var xhttp;
                if(str.length == 0) {
                    document.getElementById("suggestionOwner").innerHTML = "";
                    return;
                }

                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("suggestionOwner").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "getSuggestion.php?type=owner&value="+str, true);
                xhttp.send();
            }
        </script>
    </body>
</html>
