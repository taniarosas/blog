<?php
//this looks for database.php
	require_once(__DIR__ . "/../model/config.php");

	// it looks for those variables
	$connection = new mysqli($host, $username, $password);

	//checks if there is an error in your connection
	if($connection->connect_error){
		die("<p>Error: " . $connection->connect_error . "</p>");
	}
	
	//it checks if select_db exists
	$exists = $connection->select_db($database);
	//it checks to see if database doesnt exists
	if(!$exists){

		//if not then it creates one
		$query = $connection->query("CREATE DATABASE $database");
		if($query){
			// if it created it prints out the sentence
			echo "<p>Successfully created database: " . $database . "</p>" ;
		}
	}
	//database is already there
	else{
		echo "<p>Database already exists</p>";
	}
	//the query creates a table
	//the table is to put info in it
	//the table is called post and it must have id, title, and post text
	//the table must be NOT NULL(not empty)
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id) )");
	//check to see if the table is created successfully
	if($query) {
		echo "<p>Successfully created a table posts</p>";
	}
	else{
		echo "<p>$connection->error</p>";
	}
	//closes connection
	$connection->close();