<?php

class ctable {
    
    public $tableName;

    public function __construct() {

    }


    //créer la table avec le nom donné en parametre.
    public function newTable($tableName) {

        $newTable = $this->bdd->prepare("CREATE TABLE :tableName (column1 int,column2 int,column3 int,column4 int);");
        $newTable->bindParam(":tableName", $tableName);
        $newTable->execute();
        $reponse = $newTable->fetch();
        return $response;

    }
}

?>