<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_u as $u){
            echo '<p> Utilisateur '.$u->getlogin().'</p>';
        }
        ?>
    </body>
</html>