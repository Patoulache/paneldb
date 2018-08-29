<?php

    class dtable extends connexion {

        private $tableName;

    //supprimer la table avec le nom donné en parametre.
    public function dropTable($tableName) {
        
        $this->connect();

        $dropTable = $this->bdd->prepare("DROP TABLE $tableName");
        try {
            $dropTable->execute();
            echo '<script> alert ("La table a bien été supprimée")</script>';
        
        } catch (Exception $e) {
            echo '<script> alert ("Cette table n\'existe pas")</script>';
        }
        
        $this->bdd=null;// Arrêt connexion DB.
    }

    }

?>