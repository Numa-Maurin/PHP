<?php
require_once 'Model.php';
class Trajet {
   private $id;
   private $depart;
   private $arrivee;
   private $date;
   private $nbplaces;
   private $prix;
   private $conducteur_login;

public function get($nom_attribut){
	return $this->$nom_attribut;
}

public function set($nom_attribut,$value){
	$this->$nom_attribut=$value;
}

public function __construct($data)
{
	if (!is_null($data["id"]) && (!is_null($data["depart"]) && (!is_null($data["arrivee"]) && (!is_null($data["date"]) && (!is_null($data["nbplaces"]) && (!is_null($data["prix"]) && (!is_null($data["conducteur_login"])) {
		$this->$id=$data["id"];
		$this->$=$data["depart"];
		$this->$=$data["arrivee"];
		$this->$=$data["date"];
		$this->$=$data["nbplaces"];
		$this->$=$data["prix"];
		$this->$=$data["conducteur_login"];
	}
}

    public static function getAllUtilisateurs()
  {
      $sql='SELECT * FROM trajet';
      $rep=(Model::$pdo)->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
      $tab_trajet = $rep->fetchAll();
      foreach ($tab_trajet as $key1 => $value1) {
        $value1->afficherTrajet();
    }
  }

    public function afficherTrajet() {
    echo "id trajet : $this->id, depart : $this->depart, arrivee : $this->arrivee, date : $this->date, nbplaces : $this->nbplaces, prix : $this->prix, conducteur_login : $this->conducteur_login" ;
  }

}

?>