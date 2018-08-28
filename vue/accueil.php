<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hé ma DB!</title>
    <link rel="stylesheet" href="vue/css/style.css">
</head>
<body>
    <form action="<?php echo htmlentities("ctable.php"); ?>" method="post">
        <label>Nom table :</label>
        <input type="text" value="ctable" placeholder="Entrez nom table à créer">
        <input type="submit" name="ctable" value="Valider">
    </form>

    <form action="<?php echo htmlentities("dtable.php"); ?>" method="post">
        <label>Nom table :</label>
        <input type="text" value="dtable" placeholder="Entrez nom table à supprimer">
        <input type="submit" name="dtable" value="Valider">
    </form>

</body>
</html>
