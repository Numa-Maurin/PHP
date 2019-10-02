<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class controllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
        $v = ModelVoiture::getVoitureByImmat($_GET["immat"]);     //appel au modèle pour gerer la BD
        if ($v==false) 
        	require ('../view/voiture/error.php');  //"redirige" vers la vue d'erreur
        else
        	require ('../view/voiture/detail.php');  //"redirige" vers la vue
    }

    public static function create(){
    	require ('../view/voiture/create.php');
    }

    public static function created(){
    	$immat =$_GET["immatriculation"];
    	$couleur =$_GET["couleur"];
    	$marque =$_GET["marque"];
    	$v1=new ModelVoiture($marque,$couleur,$immat);
    	$v1->save();
		ControllerVoiture::readAll();
    }

}
?>