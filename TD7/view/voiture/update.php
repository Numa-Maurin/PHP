<!DOCTYPE html>
<html>
    <body>

         <form method="GET">
          <fieldset>
            <legend>LA VOITURE A MODIFIER :</legend>
            <?php 
            	$vImmat= htmlspecialchars($v->getImmatriculation());
	            $vCouleur=htmlspecialchars($v->getCouleur());
	            $vMarq=htmlspecialchars($v->getMarque());
            ?>
            <p>
              <input type='hidden' name='action' value='updated'>

              <label for="immat_id">Immatriculation</label>
              <?php
              echo '<input type="text" value='.$vImmat.' readonly name="immatriculation" id="immat_id" required/>';
              ?>

              <label for="couleur_id">Couleur</label> :
              <?php
              echo '<input type="text" value='.$vCouleur.' name="couleur" id="couleur_id" required/>';
              ?>

              <label for="marque_id">Marque</label> :
              <?php
              echo '<input type="text" value='.$vMarq.' name="marque" id="marque_id" required/>';
              ?>
            </p>

            <p>
              <input type="submit" value="Envoyer" />
            </p>
          </fieldset> 
        </form>
    </body>
</html> 
