<?php 
	$pref =$_GET["preference"];
	setcookie("homepage", $pref, time()+3600);
?>