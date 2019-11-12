<?php

	setcookie("TestCookie", "OK", time()+3600);  /* expire dans 1 heure = 3600 secondes */
	echo $_COOKIE["TestCookie"];
	//setcookie ("TestCookie", "", time() - 1);

	$array = [
    "foo" => "bar",
    "bar" => "foo",
	];

	setcookie("TABCookie", serialize($array), time()+3600);  /* expire dans 1 heure = 3600 secondes */
	$tabrecup=unserialize($_COOKIE["TABCookie"]);
	echo $tabrecup["foo"];
?>
