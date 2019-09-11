
<html>
    <head>
        <meta charset="utf-8">
        <title>testVoiture</title>
    </head>
    <body>
       <?php
        	require_once('./Voiture.php'); 
        	$voiture1 = new Voiture('peugeot','grise','AA207');
        	$voiture1->afficher();
        ?> 
    </body>
</html>