<?php
$cheminModelUtilisateur = array('model','ModelUtilisateur.php' );
require_once (File::build_path($cheminModelUtilisateur));
// chargement du modèle
class controllerUtilisateur {
    public static function readAll() {
        $tab_u = ModelUtilisateur::getAllUtilisateur();     //appel au modèle pour gerer la BD
        $controller='utilisateur';
        $view='list';
        $pagetitle='Liste des utilisateur';
        $cheminview = array('view','view.php' );
        require (File::build_path($cheminview));  
        //"redirige" vers la vue
    }

    public static function create(){
        $controller='utilisateur';
        $view='create';
        $pagetitle='Création d\'un utilisateur';
        $cheminview = array('view','view.php' );
        require (File::build_path($cheminview));
    }
}
?>