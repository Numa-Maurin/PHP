<?php

$cheminControllerVoiture = array('controller','controllerVoiture.php' );
require_once (File::build_path($cheminControllerVoiture));

$cheminControllerUtilisateur = array('controller','controllerUtilisateur.php' );
require_once (File::build_path($cheminControllerUtilisateur));


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

if ( isset($_GET['controller'])) {
	// On recupère l'controller passée dans l'URL
	$controller =$_GET["controller"];
}
else {
	$controller ="voiture";
}

$controller_class="Controller".ucfirst($controller);

if (class_exists($controller_class)) {
	$controller_class::$action(); 
}
else{
	ControllerVoiture::error(); 
}

?>