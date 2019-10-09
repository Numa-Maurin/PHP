<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v){
            $vImmatHTML= htmlspecialchars($v->getImmatriculation());
            $vImmatURL=rawurlencode($v->getImmatriculation());
            echo '<p> Voiture d\'immatriculation <a href="http://webinfo/~maurinn/PHP/TD5/index.php?action=read&immat='.$vImmatURL.'">'.$vImmatHTML.'</a>.</p>';
        }
        ?>
    </body>
</html>