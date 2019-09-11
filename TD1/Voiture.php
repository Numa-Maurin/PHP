<?php
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
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "immatriculation voiture : $this->immatriculation, couleur : $this->couleur marque : $this->marque" ;
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


}
?>