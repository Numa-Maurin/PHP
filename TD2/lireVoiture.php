<?php
require_once 'Model.php';
require_once 'Voiture.php';

	$sql='SELECT * FROM voiture';
	$rep=(Model::$pdo)->query($sql);
	$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
	$tab_voit = $rep->fetchAll();

	var_dump($tab_voit);

	foreach ($tab_voit as $key1 => $value1) {
        $value1->afficher();
    }

?>