<?php
	//this class serves as a packet and holds all the private variables
	//a class is a collection of variables
	//it creates an object that connects to the database
	class Database{
		//private makes the variables unavailable to other classes
		private $connection;
		//private makes the variables unavailable to other classes
		private $host;
		//private makes the variables unavailable to other classes
		private $username;
		//private makes the variables unavailable to other classes
		private $password;
		//private makes the variables unavailable to other classes
		private $database;

		//local variables
		//it is the consructor for the class
		//this construct function is needed to make objects
		public function __construct($host, $username, $password, $database){
			//setting the global variables to our local variables
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		//a function will be executed by a call to the function
		//this function opens the connection
		public function openConnection() {
			//it establishes a new conection
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			//checks if there is an error in your connection
			if($this->connection->connect_error){
				//it outputs error
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}
		}
		//this function closes the connection
		public function closeConnection() {
			//to check if you opened the connection
			//isset is checking if the variable has been set
			if(isset($this->connection)) {
				//if its true close the connection
				$this->connection->close();
			}
		}
		//every time we call the query we have to write a string
		//in the end it will be passed as a variable 
		public function query($string) {
			//to run the openfunction which will open the connection
			this->openConnection();
			//to query the connection we have 
			$query = $this->connection->query($string);
			//closes the connection
			$this->closeConnection();
			//return the result
			return $query;
		}
	}