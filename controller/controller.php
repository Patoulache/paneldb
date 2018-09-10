<?php

class controller {

    private $regex;
    private $ctable;
    private $dtable;
    private $mtable;
    private $newColumn;
    private $dropColumn;
    private $renColumn;
    private $newName;
    private $modColumn;
    private $addEntry;
    private $addCol;
    private $dropCol;
    private $dropRow;
    private $oldEntry;
    private $newEntry;
    private $aColumn;
    private $colType;

    public function __construct()  {

    }
    
    public function postTaMere () {
        
       if (!empty($_POST)) {
           $this->vueBtn();
       } else {
           $this->vueSP();
       }
        
    }
    
    private function vueSP() {
        require_once ("./vue/accueil.php");
    }
    
    private function vueBtn() {
        
        $this->regex = '/^[a-z]+$/';
        require_once ("./modele/ctable.php");
        require_once ("./modele/dtable.php");
        require_once ("./modele/mtable.php");
        if (isset ($_POST['ctable'])) {
            $this->ctable();
        } else if (isset ($_POST['dtable'])) {
            $this->dtable();
        } else if (isset ($_POST['mtable'])) {
            $this->mtable();
        } 
    }

    private function ctable() {

        $this->ctable = $_POST['ctable'];
        preg_match_all($this->regex, $this->ctable, $matches);
        $test = count($matches[0]);
        if ($test === 1){
            $createTable = new ctable();
            $createTable->newTable($this->ctable);
        } else {
            echo "Vous ne pouvez renseigner qu'un mot en lettre minuscule";
        }
    }
    
    private function dtable() {
            
        $this->dtable = $_POST['dtable'];
        preg_match_all($this->regex, $this->dtable, $matches);
        $test = count($matches[0]);
        if ($test === 1){
            $delTable = new dtable();
            $delTable->dropTable($this->dtable);
        } else {
            echo "Vous ne pouvez renseigner qu'un mot en lettre minuscule";
        }

    }

    private function mtable() {

        $this->mtable = $_POST['mtable'];

        $modifTable = new mtable();

        switch(true) {
            case (!empty($_POST['newColumn'])) :
                $this->newColumn = $_POST['newColumn'];
                $this->colType = $_POST['colType'];
                $modifTable->addColumn($this->mtable,$this->newColumn,$this->colType);
                break;
            case (!empty($_POST['dropColumn'])) :
                $this->dropColumn = $_POST['dropColumn'];
                $modifTable->dropColumn($this->mtable,$this->dropColumn);
                break;
            case (!empty($_POST['renColumn'])) :
                $this->renColumn = $_POST['renColumn'];
                $this->newName = $_POST['newName'];
                $this->colType = $_POST['colType'];
                $modifTable->renColumn($this->mtable,$this->renColumn,$this->newName,$this->colType);
                break;
            case (!empty($_POST['modColumn'])) :
                $this->modColumn = $_POST['modColumn'];
                $this->colType = $_POST['colType'];
                $modifTable->modColumn($this->mtable,$this->modColumn,$this->colType);
                break;
            case (!empty($_POST['addEntry'])) :
                $this->addEntry = $_POST['addEntry'];
                $this->addCol = $_POST['addCol'];
                $modifTable->addEntry($this->mtable,$this->addCol,$this->addEntry);
                break;
            case (!empty($_POST['dropRow'])) :
                $this->dropCol = $_POST['dropCol'];
                $this->dropRow = $_POST['dropRow'];
                $modifTable->dropRow($this->mtable,$this->dropCol,$this->dropRow);
                break;
            case (!empty($_POST['oldEntry'])) :
                $this->aColumn = $_POST['aColumn'];
                $this->oldEntry = $_POST['oldEntry'];
                $this->newEntry = $_POST['newEntry'];
                $modifTable->modEntry($this->mtable,$this->aColumn,$this->oldEntry,$this->newEntry);
                break;
            default:
                echo "une erreur est survenue";
                break;
        }
        
    }
}
?>