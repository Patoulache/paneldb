<?php

  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;

    public  $bdd;

    public function __construct() {
      // constructeur 
      $this->host     = '192.168.3.125';
      $this->dbname   = 'testexodbdroopy';
      $this->login    = 'root';
      $this->psw      = 'sqlcoda#2018!';
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