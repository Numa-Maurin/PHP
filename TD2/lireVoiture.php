<?php
require_once 'Model.php';

	$rep=Model::$pdo::query("SELECT * FROM voiture");
	$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
	
	foreach ($tab_obj as $key1 => $value1) {
          echo " <li> $key1 :</li>";

          foreach ($value1 as $key => $value) {
            echo "$key  :  $value   ";
          }
    }

?>