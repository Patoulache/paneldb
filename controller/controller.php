<?php

class controller {

    private $regex;
    private $ctable;
    private $dtable;

    public function __construct()  {
            
        $this->regex = '/^[a-z]+$/';
        require_once ("./vue/accueil.php");
        require_once ("./modele/ctable.php");
        require_once ("./modele/dtable.php");
        if (isset ($_POST['ctable'])) {
            $this->ctable();
        }
        if (isset ($_POST['dtable'])) {
            $this->dtable();
        }
        if (isset ($_POST['mtable'])) {
            $this->mtable();
        }
    }

    public function ctable() {

        $this->ctable = $_POST['ctable'];
        preg_match_all($this->regex, $this->ctable, $matches);
        $test = count($matches[0]);
        if ($test === 1){
            $createTable = new ctable();
            $createTable->newTable($this->ctable);
        } else {
            echo '<script> alert ("Vous ne pouvez renseigner qu\'un mot en lettre minuscule")</script>';
        }
    }
    
    public function dtable() {
            
        $this->dtable = $_POST['dtable'];
        preg_match_all($this->regex, $this->dtable, $matches);
        $test = count($matches[0]);
        if ($test === 1){
            $delTable = new dtable();
            $delTable->dropTable($this->dtable);
        } else {
            echo '<script> alert ("Vous ne pouvez renseigner qu\'un mot en lettre minuscule")</script>';
        }

    }

    public function mtable() {
        
    }
}
?>