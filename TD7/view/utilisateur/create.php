<!DOCTYPE html>
<html>
    <body>

         <form method="GET">
          <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <input type='hidden' name='action' value='created'>

              <label for="login_id">login</label>
              <input type="text" placeholder="Ex : 02" name="immatriculation" id="login_id" required/>
              <label for="nom_id">nom</label> :
              <input type="text" placeholder="Ex : nene" name="couleur" id="nom_id" required/>
              <label for="prenom_id">prenom</label> :
              <input type="text" placeholder="Ex : dupont" name="marque" id="prenom_id" required/>
              <label for="mdp_id">mdp</label> :
              <input type="password" placeholder="" name="marque" id="mdp_id" required/>
              
            </p>
            <p>
              <input type="submit" value="Envoyer" />
            </p>
          </fieldset> 
        </form>
    </body>
</html> 
