<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            $vImmat= htmlspecialchars($v->getImmatriculation());
            $vCouleur=htmlspecialchars($v->getCouleur());
            $vMarq=htmlspecialchars($v->getMarque());

            echo '<p> Voiture d\'immatriculation ' . $vImmat. '.</p>';
            echo '<p> Voiture de couleur ' . $vCouleur. '.</p>';
            echo '<p> Voiture de marque ' . $vMarq. '.</p>';
        ?>
    </body>
</html>