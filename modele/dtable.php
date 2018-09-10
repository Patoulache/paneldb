<?php

    class dtable extends connexion {

        private $tableName;

    //supprimer la table avec le nom donné en parametre.
    public function dropTable($tableName) {
        
        $this->connect();

        $dropTable = $this->bdd->prepare("DROP TABLE $tableName");
        try {
            $dropTable->execute();
            echo "La table a bien été supprimée";
        
        } catch (Exception $e) {
            echo "Cette table n\'existe pas";
        }
        
        $this->bdd=null;// Arrêt connexion DB.
    }

    }

?>