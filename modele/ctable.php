<?php

require_once ("codb.php");

class ctable extends connexion {
    
    private $tableName;

/*     public function __construct() {        
        parent::__construct(); // sert a utiliser plusieurs construct quand on extends une classe
    } */


    //créer la table avec le nom donné en parametre.
    public function newTable($tableName) {
        
        $this->connect();

        $newTable = $this->bdd->prepare("CREATE TABLE $tableName (column1 int);");
        try {
            $newTable->execute();
            $rep = '<script> alert ("La table a bien été créée avec une colonne (column1 int)")</script>';
            // return $rep;
            
        } catch (Exception $e) {
            $repF = '<script> alert ("Cette table existe déjà")</script>';
            // return $repF;
            echo "je suis la";
        }

        $this->bdd=null; // Arrêt connexion DB
    }
}

?>