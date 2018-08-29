<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hé ma DB!</title>
    <link rel="stylesheet" href="vue/css/style.css">
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label>Nom table :</label>
        <input type="text" name="ctable" value="" placeholder="Entrez nom table à créer">
        <input type="submit" name="" value="Valider">
    </form>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label>Nom table :</label>
        <input type="text" name="dtable" value="" placeholder="Entrez nom table à supprimer">
        <input type="submit" name="" value="Valider">
    </form>

</body>
</html>
