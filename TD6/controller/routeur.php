<?php

$cheminControllerVoiture = array('controller','controllerVoiture.php' );
require_once (File::build_path($cheminControllerVoiture));

if ( isset($_GET['action'])) {
	// On recupère l'action passée dans l'URL
	$action =$_GET["action"];
	$tab_metho=get_class_methods('controllerVoiture');

	if (!in_array($action,$tab_metho)) {
		$action ="error";
	}
}

else {
	$action ="readAll";
}

// Appel de la méthode statique $action de ControllerVoiture si non vide
ControllerVoiture::$action(); 

?>