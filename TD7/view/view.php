<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>

    </head>
    <header>
    <table style="border: 1px solid black;text-align:right;padding-right:1em;">
	    <tbody>
	        <tr>
	            <td> <a href="index.php?action=readAll">Liste des voiture</a></td>
	            <td><a href="index.php?action=readAll&controller=utilisateur">Accueil des utilisateurs</a></td>
	            <td><a href="index.php?action=readAll&controller=trajet">Accueil des trajets</a></td>
	            <td><a href="../TD7/preference.html">Personnalisation</a></td>
	        </tr>
	    </tbody>
	</table>
	</header>

    <body>

	<?php
	// Si $controleur='voiture' et $view='list',
	// alors $filepath="/chemin_du_site/view/voiture/list.php"
		$filepath = File::build_path(array("view", $controller, "$view.php"));
		require $filepath;
	?>

    </body>
    <footer>
    	<p style="border: 1px solid black;text-align:right;padding-right:1em;">
  Site de covoiturage de numa
		</p>
	</footer>
</html>