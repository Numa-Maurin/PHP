<?php
require_once 'Model.php';
class Utilisateur {
   private $login;
   private $nom;
   private $prenom;

  public function __construct($l = NULL, $n = NULL, $p = NULL) {
    if (!is_null($l) && !is_null($n) && !is_null($p)) {
      $this->login = $l;
      $this->nom = $n;
      $this->penom = $p;
    }
  }

    public static function getAllUtilisateurs()
  {
      $sql='SELECT * FROM utilisateur';
      $rep=(Model::$pdo)->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
      $tab_utilisateur = $rep->fetchAll();
      foreach ($tab_utilisateur as $key1 => $value1) {
        $value1->afficherUtilisateur();
    }
  }

    public function afficherUtilisateur() {
    echo "login utilisateur : $this->login, nom : $this->nom, prenom : $this->prenom" ;
    echo "</br>";
  }
 
}
?>