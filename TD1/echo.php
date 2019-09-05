<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
         
        <?php

        $tab = array (
          'Voiture1'=>['immatriculation' => 'AA22233', 'couleur' => 'rouge', 'marque' => 'peugeot'],
          'Voiture2'=>['immatriculation' => 'AA
          ', 'couleur' => 'verte','marque' => 'renault'],
          'Voiture3'=>['immatriculation' => 'BB456zd', 'couleur' => 'gris','marque' => 'toyota'],
            );
        echo '<pre>';
        print_r($tab);
        echo '</pre>';

      if (!array_key_exists('Voiture1', $tab)) {
        echo "le tableau est vide";
        }
      else {
        echo "<p>Liste de Voiture : </p><ul>";
        foreach ($tab as $key1 => $value1) {
          echo " <li> $key1 :</li>";

          foreach ($value1 as $key => $value) {
            echo "$key  :  $value   ";
          }
        }
        echo "</ul>";
      }
          ?>
    </body>
</html> 
