<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire</title>
    </head>
   
    <body>
         <form method="get" action="testFindUtil.php">
          <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <label for="traj_id">ID du trajet</label> :
              <input type="text" placeholder="Ex : 1" name="idTrajet" id="traj_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer" />
            </p>
          </fieldset> 
        </form>
        <?php

          ?>
    </body>
</html> 