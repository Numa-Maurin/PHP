<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class controllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $cheminlist = array('view','voiture','list.php' );
        require (File::build_path($cheminlist));  //"redirige" vers la vue
    }

    public static function read() {
        $v = ModelVoiture::getVoitureByImmat($_GET["immat"]);     //appel au modèle pour gerer la BD
        if ($v==false) {
            $cheminerror = array('view','voiture','error.php' );
        	require (File::build_path($cheminerror));  //"redirige" vers la vue d'erreur
        }
        else{
            $chemindetail = array('view','voiture','detail.php');
        	require (File::build_path($chemindetail));  //"redirige" vers la vue
        }
    }

    public static function create(){
        $chemincreat = array('view','voiture','create.php' );
    	require (File::build_path($chemincreat));
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