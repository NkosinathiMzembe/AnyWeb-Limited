<?php
include_once("mydatabase.php");

	class DatabaseController{
        
		private $connection=null;
		private $data=null;
		
		function __construct(){
			$this->connect();
		}

		function __destruct(){
			if($this->connection){
				$this->connection->close();
			}
		}
	
		function connect(){
			$this->connection = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
			
			if($this->connection->connect_errno){
				echo $this->connection->connect_errno;
				return false;
			}
				
			return true;
		}
		
		function execute_query($queryString){
			if(!$this->connect()){
				$this->connect();
			}
			
			$this->data = $this->connection->query($queryString);
			
			if(!$this->data){
				echo $this->connection->error;
				return false;
			}

			return true;
		}
		
		function get_record(){
			if(!$this->data){
				return false;
			}
			
			return $this->data->fetch_assoc();
		}
	}

?>