<?php
	
	class db{

		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "";
		private $dbname = "restapi";

		public function getConnection(){
			
			$conn = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conn;
		}
	}