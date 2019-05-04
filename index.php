<?php
	session_start();

	require("./lib/functions.php");

	isLogged();

	$path = tratarPath($_GET["r"]);

	require("./templates/header.php");

	require("./templates/navbar.php");

	loadPath($path);

	require("./templates/footer.php");
?>