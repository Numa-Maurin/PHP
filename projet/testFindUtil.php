<?php
require_once 'Model.php';
require_once 'Utilisateur.php';
require_once 'Trajet.php';

	//ex7
	$tabUtiRES=(Trajet::findPassagers(1));
    foreach ($tabUtiRES as $key1 => $value1) {
        $value1->afficher();
    }
?>