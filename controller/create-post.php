<?php
	//require config file
	require_once(__DIR__ . "/../model/config.php");
	//able to create connection using mysqli object
	//all these parameters are in the config.php
	$connection = new mysqli($host, $username, $password, $database);

	//the variable filters the input and gets the post from title and filters it 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//the post means to get the data and filter it 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	//run query to insert things into the table
	//sql command starts off with an action/verb
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//use conditional statement to see if its true or false
	// to see we are successful in inserting information into the database
	if($query) {
		//if successit outputs with a title
		echo "<p>Successfully inserted post: $title</p>";
	}
	else{
		//if not successful display an error
		echo "<p>$connection->error</p>";
	}
	//run query on the connection and it closes the connection
	$connection->close();