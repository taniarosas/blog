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
		//this function opens the connection
		public function openConnection() {
			this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			//checks if there is an error in your connection
			if($this->connection->connect_error){
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}
		}
		//this function closes the connection
		public function closeConnection() {
			if(isset($this->connection)) {
				this->connection->close();
			}
		}
		//every time we call the query we have to write a string
		//in the end it will be passed as a variable 
		public function query($string) {
			this->openConnection();

			$query = $this->connection->query($string);

			$this->closeConnection();

			return $query;
		}
	}