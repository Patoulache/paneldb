<?php
require_once ("codb.php");

class Affichage extends connexion {

    public function affich() {

        $this->connect();
        $recup = $this->bdd->query("SHOW TABLES");
        $tableName = $recup->fetchAll(PDO::FETCH_NUM);
        $balisage = "<table><tbody>";
        $endBal = "</tbody></table>";
        echo $balisage;
        foreach($tableName as $key) {

            echo "<tr class='table'><td>".$key[0]."</td></tr>";
            $affi = $this->bdd->query("SHOW COLUMNS FROM $key[0]");
            $affich = $affi->fetchAll(PDO::FETCH_NUM);
            echo "<tr class='col'>";
            foreach($affich as $value) {
                echo "<td>".$value[0]."</td>";
                $affEnt = $this->bdd->prepare("SELECT * FROM $key[0]");
                //$affEnt->bindParam(':valeur', $key[0]); Pas de nom de table en bindParam
                $affEnt->execute();
                $affiEnt = $affEnt->fetchAll(PDO::FETCH_NUM);
            
                
            }
            echo "</tr>";
            foreach($affiEnt as $tata) {

                echo "<tr>";
                foreach($tata as $val)
                echo "<td class='entree'>".$val."</td>";
            };
            echo "</tr>";
        };
     
        echo $endBal;
    }

}

?>