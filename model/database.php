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

		public function __construct($host, $username, $password, $database){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}

		public function openConnection() {
			this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			//checks if there is an error in your connection
			if($this->connection->connect_error){
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}
		}
		public function closeConnection() {
			if(isset($this->connection)) {
				this->connection->close();
			}
		}
		public function query($string) {
			this->openConnection();

			$query = $this->connection->query($string);

			$this->closeConnection();

			return $query;
		}
	}