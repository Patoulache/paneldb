<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hé ma DB!</title>
    <link rel="stylesheet" href="vue/css/style.css">
    <script src="././controller/controler.js"></script>
    <script src="././modele/ajax.js"></script>
</head>
<body>

    <table id="left">
        <tr>
            <td><label>Nom table à créer :</label></td>
            <td><input type="text" name="ctable" value="" data-zone="creaTab" placeholder="Entrez nom table à créer"></td>
            <td><button data-zone="creaTab">Valider</button></td>
        </tr>
        <tr>
            <td><label>Nom table à supprimer :</label></td>
            <td><input type="text" name="dtable" value="" data-zone="delTab" placeholder="Entrez nom table à supprimer"></td>
            <td><button data-zone="delTab">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Ajout colonne</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="addCol" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom nouvelle colonne :</label></td>
            <td><input type="text" name="newColumn" value="" data-zone="addCol" placeholder="Entrez nom nouvelle colonne"></td>
            <td>
                <select name="colType" data-zone="addCol">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><button data-zone="addCol">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Suppression colonne</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="delCol" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à supprimer :</label></td>
            <td><input type="text" name="dropColumn" value="" data-zone="delCol" placeholder="Entrez nom colonne à supprimer"></td>
            <td><button data-zone="delCol">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Changement nom colonne</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable2" value="" data-zone="renCol" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à renommer :</label></td>
            <td><input type="text" name="renColumn" value="" data-zone="renCol" placeholder="Entrez nom colonne à renommer"></td>
        </tr>
        <tr>
            <td><label>Nouveau nom de colonne :</label></td>
            <td><input type="text" name="newName" value="" data-zone="renCol" placeholder="Entrez nom colonne à renommer"></td>
            <td>
                <select name="colType" data-zone="renCol">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><button data-zone="renCol">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Modification colonne</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="modCol" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à modifier:</label></td>
            <td><input type="text" name="modColumn" value="" data-zone="modCol" placeholder="Entrez nom colonne à modifier"></td>
            <td>
                <select name="colType" data-zone="modCol">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><button data-zone="modCol">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Ajout entrée table</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="addEnt" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne :</label></td>
            <td><input type="text" name="addCol" value="" data-zone="addEnt" placeholder="Nom colonne nouvelle entrée"></td>
        </tr>
        <tr>
            <td><label>Entrée à ajouter :</label></td>
            <td><input type="text" name="addEntry" value="" data-zone="addEnt" placeholder="Entrée à ajouter"></td>
            <td><button data-zone="addEnt">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Suppression ligne table</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="delEnt" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Colonne entrée à supprimer :</label></td>
            <td><input type="text" name="dropCol" value="" data-zone="delEnt" placeholder="colonne entrée à supprimer"></td>
        </tr>
        <tr>
            <td><label>Entrée à supprimer :</label></td>
            <td><input type="text" name="dropRow" value="" data-zone="delEnt" placeholder="Entrée à supprimer"></td>
            <td><button data-zone="delEnt">Valider</button></td>
        </tr>
        <tr>
            <td><h2>Modification entrée table</h2></td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" data-zone="modEnt" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne :</label></td>
            <td><input type="text" name="aColumn" value="" data-zone="modEnt" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nouvelle entrée :</label></td>
            <td><input type="text" name="newEntry" value="" data-zone="modEnt" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Ancienne entrée :</label></td>
            <td><input type="text" name="oldEntry" value="" data-zone="modEnt" placeholder="Entrée à modifier"></td>
            <td><button data-zone="modEnt">Valider</button></td>
        </tr>
    </table>
    <div id="affichage">
        <h1>Affichage : </h1>
        <div id="maman"></div>
    </div>
</body>
</html>
