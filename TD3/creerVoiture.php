
<?php
    require_once 'Model.php';
    require_once 'Voiture.php';
    $voiture1 = new Voiture( $_POST['marque'], $_POST['couleur'],$_POST['immatriculation']);
    $voiture1->afficher();
    $voiture1->save()
?>   
