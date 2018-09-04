<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hé ma DB!</title>
    <link rel="stylesheet" href="vue/css/style.css">
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <table>
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
                <td><label>Nom table à modifier :</label></td>
                <td><input type="text" name="mtable" value="" placeholder="Entrez nom table à modifier"></td>
                <td><input type="submit" name="" value="Valider"></td>
            </tr>
        </table>
    </form>
</body>
</html>
