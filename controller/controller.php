<?php

class controller {

    private $ctable;

    public function __construct()  {
        
        require_once ("./modele/codb.php");    
        require_once ("./vue/accueil.php");
        require_once ("./modele/ctable.php");


    }

    public function ctable() {

        if (isset ($_POST['ctable'])){
            
            $this->ctable = $_POST['ctable'];
            $createTable = new ctable();
            $createTable->newTable($this->ctable);
            if ($reponse === false) {
                echo '<script> alert ("Cette table existe déjà")</script>';
            } else {
                echo '<script> alert ("La table a bien été créée")</script>';
            }
            
        }
    }  
}
?>