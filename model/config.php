<?php
	require_once(__DIR__ . "/database.php");

	//a variable that stores our path to our project
	$path = "/blog/";

	// this is where you store info
	//*note you dont need a closing tag when there is only php
	// you are storing database server information here
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	//created a new object 
	$connection = new Database($host, $username, $password, $database);