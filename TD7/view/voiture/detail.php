<!DOCTYPE html>
<html>
    <body>
        <?php
            $vImmat= htmlspecialchars($v->getImmatriculation());
            $vCouleur=htmlspecialchars($v->getCouleur());
            $vMarq=htmlspecialchars($v->getMarque());

            echo '<p> Voiture d\'immatriculation ' . $vImmat. '.</p>';
            echo '<p> Voiture de couleur ' . $vCouleur. '.</p>';
            echo '<p> Voiture de marque ' . $vMarq. '.</p>';

            echo '<p><a href="
http://webinfo.iutmontp.univ-montp2.fr/~maurinn/PHP/TD7/index.php?action=delete&immat='.$vImmat.'">SUPPRIMER CETTE VOITURE</a>.</p>';

            echo '<p><a href="
http://webinfo.iutmontp.univ-montp2.fr/~maurinn/PHP/TD7/index.php?action=update&immat='.$vImmat.'">MODIFIER CETTE VOITURE</a>.</p>';
        ?>
    </body>
</html>