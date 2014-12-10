<?php
	//require the config file to get to the $path variable
	require_once(__DIR__ . "/../model/config.php");

	unset($_SESSION["authenticated"]);
	session_destroy();
	header("Location: " . $path . "index.php");