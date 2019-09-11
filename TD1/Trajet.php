<?php
class Trajet {
   private $id;
   private $depart;
   private $arrivee;
   private $date;
   private $nbplaces;
   private $prix;
   private $conducteur_login;
   }

public function get($nom_attribut){
	return $this->$nom_attribut;
}

public function set($nom_attribut,$value){
	$this->$nom_attribut=$value;
}

public function __construct($data)
{
	$this->$id=$data["id"];
	$this->$=$data["depart"];
	$this->$=$data["arrivee"];
	$this->$=$data["date"];
	$this->$=$data["nbplaces"];
	$this->$=$data["prix"];
	$this->$=$data["conducteur_login"];
}

?>