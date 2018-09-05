<?php

class mtable extends connexion {

    private $tableName;
    private $oldColName;
    private $colName;
    private $colType;
    private $oldEntry;
    private $newEntry;

    public function __construct() {
       
        parent::__construct(); // sert a utiliser plusieurs construct quand on extends une classe
        $this->connect();
    }

    // Ajout colonne
    public function addColumn($tableName,$colName,$colType) {

        $newColumn = $this->bdd->prepare("ALTER TABLE $tableName ADD $colName $colType");
        try {
            $newColumn->execute();
            echo '<script> alert ("La colonne a bien été ajoutée")</script>';
        
        } catch (Exception $e) {
            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Suppression colonne
    public function dropColumn($tableName,$colName) {

        $dropColumn = $this->bdd->prepare("ALTER TABLE $tableName DROP COLUMN $colName");
        try {
            $dropColumn->execute();
            echo '<script> alert ("La colonne a bien été supprimée")</script>';
        
        } catch (Exception $e) {
            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif nom colonne
    public function renColumn($tableName,$oldColName,$colName,$colType) {

        $renColumn = $this->bdd->prepare("ALTER TABLE $tableName CHANGE $oldColName $colName $colType");
        try {
            $renColumn->execute();
            echo '<script> alert ("La colonne a bien été renommée")</script>';
        
        } catch (Exception $e) {
            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif type colonne
    public function modColumn($tableName,$colName,$colType) {
        $modColumn = $this->bdd->prepare("ALTER TABLE $tableName MODIFY COLUMN $colName $colType");
        try {
            $modColumn->execute();
            echo '<script> alert ("Le type de la colonne a bien été modifié")</script>';
        
        } catch (Exception $e) {
            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Ajout ligne
    public function addEntry($tableName,$colName,$newEntry) {
        echo "colname=$colName";
        $addEntry = $this->bdd->prepare("INSERT INTO $tableName($colName) VALUES ('$newEntry')");
        try {
            $addEntry->execute();
            echo '<script> alert ("L\'entrée a bien été enregistrée")</script>';
        
        } catch (Exception $e) {

             echo '<script> alert ("une erreur est survenue.")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Suppression ligne
    public function dropRow($tableName,$colName,$newEntry) {

        $dropRow = $this->bdd->prepare("DELETE FROM $tableName WHERE $colName = '$newEntry'");
        try {
            $dropRow->execute();
            echo '<script> alert ("La ligne d\'entrée a bien été supprimée")</script>';
        
        } catch (Exception $e) {

            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif ligne
    public function modEntry($tableName,$colName,$oldEntry,$newEntry) {
        echo "$tableName";
        echo "$colName";
        echo "$oldEntry";
        echo "$newEntry";
        $modEntry = $this->bdd->prepare("UPDATE $tableName SET $colName = '$newEntry' WHERE $colName = '$oldEntry'");
        var_dump($modEntry);
        try {
            $modEntry->execute();
            echo '<script> alert ("L\'entrée a bien été modifiée")</script>';
        
        } catch (Exception $e) {
            // echo "<br>";
            // var_dump($e);
            echo '<script> alert ("Une erreur est survenue")</script>';
        }

        $this->bdd=null; // Arrêt connexion DB    
    }
}

?>