<?php
require_once 'Model.php';
class ModelUtilisateur {
   
  private $login;
  private $mdp;
  private $nom;
  private $prenom;
      
  // un getter      
  public function getnom() {
       return $this->marque;  
  }
     
  // un setter 
  public function setnom($nom2) {
       $this->nom = $nom2;
  }
      
  // un constructeur
  public function __construct($m = NULL, $c = NULL, $i2 = NULL,$i = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      // Si aucun de $m, $c et $i sont nuls,
      // c'est forcement qu'on les a fournis
      // donc on retombe sur le constructeur à 3 arguments
      $this->login = $m;
      $this->nom = $c;
      $this->prenom = $i;
      $this->mdp = $i2;
    }
  }
           
  // une methode d'affichage.
   //public function afficher() {
    //echo "immatriculation voiture : $this->immatriculation, couleur : $this->couleur, marque : $this->marque" ;
  //}

  public function getprenom(){
    return $this->prenom;
  }

  public function setprenom( $prenom2){
    $this->prenom=$prenom2;
  }

    public function getlogin(){
    return $this->login;
  }

  public function setlogin( $login2){
    $this->login=$login2;
  }

  public static function getAllUtilisateur()
  {
      $sql='SELECT * FROM utilisateur';
      $rep=(Model::$pdo)->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
      $tab_uti = $rep->fetchAll();
      return $tab_uti;
  
  }

}
?>
