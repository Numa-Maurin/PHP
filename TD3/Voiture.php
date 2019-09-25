<?php
require_once 'Model.php';
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
      
  // un constructeur
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      // Si aucun de $m, $c et $i sont nuls,
      // c'est forcement qu'on les a fournis
      // donc on retombe sur le constructeur à 3 arguments
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
    }
  }
           
  // une methode d'affichage.
  public function afficher() {
    echo "immatriculation voiture : $this->immatriculation, couleur : $this->couleur, marque : $this->marque" ;
  }

  public function getcouleur(){
    return $this->couleur;
  }

  public function setcouleur( $newcolor){
    $this->couleur=$newcolor;
  }
  public function getimmatriculation(){
    return $this->immatriculation;
  }

  public function setimmatriculation( $newim){
    if (strlen($newim)<=8) {
      $this->immatriculation=$newim;
    }
  }

  public static function getAllVoitures()
  {
      $sql='SELECT * FROM voiture';
      $rep=(Model::$pdo)->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
      $tab_voit = $rep->fetchAll();
      foreach ($tab_voit as $key1 => $value1) {
        $value1->afficher();
    }
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false;
    return $tab_voit[0];
}

  public function save()
  {
    $sql1="INSERT INTO voiture(immatriculation,couleur,marque) VALUES (:immat,:coul,:marque)";
    $req_prep1 = Model::$pdo->prepare($sql1);
    $values1 = array(
      "immat"=>($this->immatriculation),
      "coul"=>($this->couleur),
      "marque"=>($this->marque),
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep1->execute($values1);
  }

}
?>