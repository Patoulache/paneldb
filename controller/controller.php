<?php

class controller {

    private $regex;
    private $ctable;
    private $dtable;

    public function __construct()  {
            
        $this->regex = '/[a-z]+/';
        require_once ("./vue/accueil.php");
        require_once ("./modele/ctable.php");
        require_once ("./modele/dtable.php");

    }

    public function ctable() {
        // print_r($_POST);
        if (isset ($_POST['ctable'])){
            if (preg_match_all($this->regex,)){};
            $this->ctable = $_POST['ctable'];
            $createTable = new ctable();

            $createTable->newTable($this->ctable);
  
        }
        
    }
    
    public function dtable() {

        if (isset ($_POST['dtable'])){
            
            $this->dtable = $_POST['dtable'];
            $delTable = new dtable();

            $delTable->dropTable($this->dtable);
  
        }
    }
}
?>