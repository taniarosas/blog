<?php
	//require config file
	require_once(__DIR__ . "/../model/config.php");

	//the variable filters the input and gets the post from title and filters it 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//the post means to get the data and filter it 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

	//run query to insert things into the table
	//sql command starts off with an action/verb
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//use conditional statement to see if its true or false
	// to see we are successful in inserting information into the database
	if($query) {
		//if successful outputs with a title
		echo "<p>Successfully inserted post: $title</p>";
		echo "Posted on;" . $date->format("M/D/Y") . "at" . $time->format("g:i");
	}
	else{
		//if not successful display an error
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
