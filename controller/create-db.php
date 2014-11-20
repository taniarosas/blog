<?php
//this looks for database.php
	require_once(__DIR__ . "/../model/config.php");


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
