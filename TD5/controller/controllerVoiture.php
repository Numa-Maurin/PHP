<?php
$cheminModelVoiture = array('model','ModelVoiture.php' );
require_once (File::build_path($cheminModelVoiture));
// chargement du modèle
class controllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller='voiture';
        $view='list';
        $pagetitle='Liste des voitures';
        $cheminview = array('view','view.php' );
        require (File::build_path($cheminview));  
        //"redirige" vers la vue
    }

    public static function read() {
        $v = ModelVoiture::getVoitureByImmat($_GET["immat"]);     //appel au modèle pour gerer la BD
        if ($v==false) {
            $controller='voiture';
            $view='error';
            $pagetitle='Page erreur';
            $cheminview = array('view','view.php' );
            require (File::build_path($cheminview));   //"redirige" vers la vue d'erreur
        }
        else{
            $controller='voiture';
            $view='detail';
            $pagetitle='Page de detail';
            $cheminview = array('view','view.php' );
            require (File::build_path($cheminview));
  //"redirige" vers la vue
        }
    }

    public static function create(){
        $controller='voiture';
        $view='create';
        $pagetitle='Création d\'une voiture';
        $cheminview = array('view','view.php' );
        require (File::build_path($cheminview));
    }

    public static function created(){
    	$immat =$_GET["immatriculation"];
    	$couleur =$_GET["couleur"];
    	$marque =$_GET["marque"];
    	$v1=new ModelVoiture($marque,$couleur,$immat);
    	$v1->save();
        
        $tab_v = ModelVoiture::getAllVoitures();
        $controller='voiture';
        $view='created';
        $pagetitle='Validation';
        $cheminview = array('view','view.php' );
        require (File::build_path($cheminview));
    }

}
?>