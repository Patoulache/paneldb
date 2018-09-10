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
            echo "La colonne a bien été ajoutée";
        
        } catch (Exception $e) {
            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Suppression colonne
    public function dropColumn($tableName,$colName) {

        $dropColumn = $this->bdd->prepare("ALTER TABLE $tableName DROP COLUMN $colName");

        try {
            $dropColumn->execute();
            echo "La colonne a bien été supprimée";
        
        } catch (Exception $e) {
            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif nom colonne
    public function renColumn($tableName,$oldColName,$colName,$colType) {

        $renColumn = $this->bdd->prepare("ALTER TABLE $tableName CHANGE $oldColName $colName $colType");

        try {
            $renColumn->execute();
            echo "La colonne a bien été renommée";
        
        } catch (Exception $e) {
            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif type colonne
    public function modColumn($tableName,$colName,$colType) {

        $modColumn = $this->bdd->prepare("ALTER TABLE $tableName MODIFY COLUMN $colName $colType");

        try {
            $modColumn->execute();
            echo "Le type de la colonne a bien été modifié";
        
        } catch (Exception $e) {
            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Ajout ligne
    public function addEntry($tableName,$colName,$newEntry) {
        
        $addEntry = $this->bdd->prepare("INSERT INTO $tableName($colName) VALUES ('$newEntry')");

        try {
            $addEntry->execute();
            echo "L\'entrée a bien été enregistrée";
        
        } catch (Exception $e) {

             echo "une erreur est survenue.";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Suppression ligne
    public function dropRow($tableName,$colName,$newEntry) {

        $dropRow = $this->bdd->prepare("DELETE FROM $tableName WHERE $colName = '$newEntry'");

        try {
            $dropRow->execute();
            echo "La ligne d\'entrée a bien été supprimée";
        
        } catch (Exception $e) {

            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB
    }

    // Modif ligne
    public function modEntry($tableName,$colName,$oldEntry,$newEntry) {
   
        $modEntry = $this->bdd->prepare("UPDATE $tableName SET $colName = '$newEntry' WHERE $colName = '$oldEntry'");
    
        try {
            $modEntry->execute();
            echo "L\'entrée a bien été modifiée";
        
        } catch (Exception $e) {

            echo "Une erreur est survenue";
        }

        $this->bdd=null; // Arrêt connexion DB    
    }
}

?>