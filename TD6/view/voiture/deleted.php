
<?php 
	
	echo '<p> Voiture d\'immatriculation ' . $immat. '.</p>';
	echo "<p>La voiture a bien été supprimée !</p>";

    $cheminview = array('view','voiture','list.php' );
    require (File::build_path($cheminview));
?>