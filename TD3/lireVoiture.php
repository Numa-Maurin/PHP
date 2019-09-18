<?php
require_once 'Model.php';
require_once 'Voiture.php';

	//Voiture::getAllVoitures();

	//(Voiture::getVoitureByImmat('EE777BB'))->afficher();

	$v1=new Voiture("ferrari","rouge","AABBAA");
	$v1->save();

?>