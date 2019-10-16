<?php

$cheminControllerVoiture = array('controller','controllerVoiture.php' );
require_once (File::build_path($cheminControllerVoiture));

if ( isset($_GET['action'])) {
	// On recupère l'action passée dans l'URL
	$action =$_GET["action"];
	// Appel de la méthode statique $action de ControllerVoiture
}
else {
	$action ="readAll";
}
ControllerVoiture::$action(); 

?>