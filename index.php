<?php

  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;

    private  $bdd;

    public function __construct() {
      // constructeur 
      $this->host     = 'localhost';
      $this->dbname   = 'testpanel';
      $this->login    = 'root';
      $this->psw      = 'coda2018';
    }
    
    public function connect() {
      
      try { $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->psw);
         
    } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
      $this->test();
    }

    public function test() {

      if (isset ($_GET['envoyer'])){
        $nom=$_GET['nom'];
        $prenom=$_GET['prenom'];
        $birthday=$_GET['birthday'];
        $compare = $this->bdd->prepare('SELECT nom,prenom,birthday FROM inputs WHERE nom=:nom AND prenom=:prenom AND birthday=:birthday ');
        $compare->bindParam(':nom', $nom);
        $compare->bindParam(':prenom', $prenom);
        $compare->bindParam(':birthday', $birthday);
        $compare->execute();
        $rep = $compare->fetch();

        if ($rep[0].$rep[1].$rep[2] === $nom.$prenom.$birthday) {
          echo "Vous êtes déjà dans la base de données, ".$prenom." : ".(date('Y')-substr($birthday, -4, 4))." ans!";
        } else {
          $this->bdd->query("INSERT INTO inputs (nom,prenom,birthday) VALUES('$nom','$prenom','$birthday')");
          echo "Bienvenue ".$prenom." dans notre base de données, vous avez ".(date('Y')-substr($birthday, -4, 4))." ans!";
        };

      }
        
    }

  }

  ?>