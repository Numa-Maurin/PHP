<?php
require_once 'controllerVoiture.php';
require_once '../lib/File.php';

// On recupère l'action passée dans l'URL
$action =$_GET["action"];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>