<?php

  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;

    public  $bdd;

    public function __construct() {
      // constructeur 
      $this->host     = 'localhost';
      $this->dbname   = 'testpanel';
      $this->login    = 'root';
      $this->psw      = 'coda2018';
    }
    
    public function connect() {
      
      try { $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->psw,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      //  echo "connexion réussi";  
    } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
      
    }

    

  }


  ?>