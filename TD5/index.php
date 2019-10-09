<?php
	require_once (__DIR__.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'File.php');

	$cheminRouteur = array('controller','routeur.php' );
	require_once (File::build_path($cheminRouteur));

?>