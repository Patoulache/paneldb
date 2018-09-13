<?php
require_once ("codb.php");

class Affichage extends connexion {

    public function affich() {

        $this->connect();
        $recup = $this->bdd->query("SHOW TABLES");
        $tableName = $recup->fetchAll(PDO::FETCH_NUM);
        //print_r($tableName);
        foreach($tableName as $key) {
            echo $key[0]." : ";
            $affi = $this->bdd->query("SHOW COLUMNS FROM $key[0]");
            $affich = $affi->fetchAll(PDO::FETCH_NUM);
            foreach($affich as $value) {
                echo $value[0]."<br>";
                $affEnt = $this->bdd->prepare("SELECT * FROM $value");
                $affEnt->execute();
                $affiEnt = $affEnt->fetchAll(PDO::FETCH_NUM);
                print_r($affiEnt);
            }
        }
    }

}

?>