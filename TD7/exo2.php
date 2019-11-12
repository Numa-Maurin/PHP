<?php
	session_start();
	$_SESSION['login'] = 'num';
		$array = [
    "foo" => "bar",
    "bar" => "foo",
	];
	$_SESSION['tab'] =serialize($array);
	$_SESSION['actif']=1;

	echo $_SESSION['login'];
	echo $_SESSION['actif'];
	unset($_SESSION['actif']);
	session_destroy();

?>
