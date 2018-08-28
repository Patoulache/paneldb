<?php
echo "pouet";

class ctable {
    
    public function __construct() {
        echo "tata";
        require_once ("codb.php");
        $test = new connexion();
        $test->connect();
        var_dump($test->bdd);
        // if (isset ($_POST['ctable'])){
            $ctable = "test";
            $compare = $test->bdd->prepare("SHOW TABLES FROM testpanel LIKE :ctable");
            $compare->bindParam(':ctable', $ctable);
            $compare->execute();
            $rep = $compare->fetch();
            var_dump($rep);
            echo "mouais";
            
            /* if ($rep[0].$rep[1].$rep[2] === $nom.$prenom.$birthday) {
                echo "Vous êtes déjà dans la base de données, ".$prenom." : ".(date('Y')-substr($birthday, -4, 4))." ans!";
            } else {
                $this->bdd->query("INSERT INTO inputs (nom,prenom,birthday) VALUES('$nom','$prenom','$birthday')");
                echo "Bienvenue ".$prenom." dans notre base de données, vous avez ".(date('Y')-substr($birthday, -4, 4))." ans!";
            }; */
            
        // }
        
       
    }
    
}

$test2 = new ctable();

?>