<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hé ma DB!</title>
    <link rel="stylesheet" href="vue/css/style.css">
</head>
<body>
    <table>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td><label>Nom table à créer :</label></td>
            <td><input type="text" name="ctable" value="" placeholder="Entrez nom table à créer"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td><label>Nom table à supprimer :</label></td>
            <td><input type="text" name="dtable" value="" placeholder="Entrez nom table à supprimer"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Ajout colonne</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom nouvelle colonne :</label></td>
            <td><input type="text" name="newColumn" value="" placeholder="Entrez nom nouvelle colonne"></td>
            <td>
                <select name="colType">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Suppression colonne</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à supprimer :</label></td>
            <td><input type="text" name="dropColumn" value="" placeholder="Entrez nom colonne à supprimer"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Changement nom colonne</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à renommer :</label></td>
            <td><input type="text" name="renColumn" value="" placeholder="Entrez nom colonne à renommer"></td>
        </tr>
        <tr>
            <td><label>Nouveau nom de colonne :</label></td>
            <td><input type="text" name="newName" value="" placeholder="Entrez nom colonne à renommer"></td>
            <td>
                <select name="colType">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Modification colonne</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne à modifier:</label></td>
            <td><input type="text" name="modColumn" value="" placeholder="Entrez nom colonne à modifier"></td>
            <td>
                <select name="colType">
                    <option value="int">INT</option>
                    <option value="varchar(255)">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select>
            </td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Ajout entrée table</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne :</label></td>
            <td><input type="text" name="addCol" value="" placeholder="Nom colonne nouvelle entrée"></td>
        </tr>
        <tr>
            <td><label>Entrée à ajouter :</label></td>
            <td><input type="text" name="addEntry" value="" placeholder="Entrée à ajouter"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Suppression ligne table</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Colonne entrée à supprimer :</label></td>
            <td><input type="text" name="dropCol" value="" placeholder="colonne entrée à supprimer"></td>
        </tr>
        <tr>
            <td><label>Entrée à supprimer :</label></td>
            <td><input type="text" name="dropRow" value="" placeholder="Entrée à supprimer"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <tr>
            <td>Modification entrée table</td>
        </tr>
        <tr>
            <td><label>Nom table à modifier :</label></td>
            <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nom colonne :</label></td>
            <td><input type="text" name="aColumn" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Nouvelle entrée :</label></td>
            <td><input type="text" name="newEntry" value="" placeholder="Entrez nom table à modifier"></td>
        </tr>
        <tr>
            <td><label>Ancienne entrée :</label></td>
            <td><input type="text" name="oldEntry" value="" placeholder="Entrée à modifier"></td>
            <td><input type="submit" name="" value="Valider"></td>
        </tr>
    </form>
    </table>
</body>
</html>
