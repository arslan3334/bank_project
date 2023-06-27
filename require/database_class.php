<?php 

	class Database{

		public $hostname 	= NULL;
		public $username 	= NULL;
		public $password 	= NULL;
		public $database 	= NULL;
		public $connection 	= NULL;
		public $query 		= NULL;
		public $result 		= NULL;

		public function __construct($hostname,$username, $password, $database){
			$this->hostname = $hostname;		
			$this->username = $username;		
			$this->password = $password;		
			$this->database = $database;		
		
			mysqli_report(FALSE);
			$this->connection = mysqli_connect($this->hostname, $this->username,$this->password, $this->database);

			if(mysqli_connect_errno()){
				echo "<p style='color:red'>Database Connection Problem <b>Errro No:</b> ".mysqli_connect_errno()." Errro Message: ".mysqli_connect_error()."</p>";
			}

		}

		public function login_process($account){
		 	$this->query = "SELECT * FROM customer WHERE accountnum = '$account';";

		 	return $this->result = mysqli_query($this->connection,$this->query);
		
		}

		public function select($column,$table){
			$this->query = "SELECT $column FROM $table";
		 	return $this->result = mysqli_query($this->connection,$this->query);
		}

public function insertsignup($fullname,$email,$account,$phone){
			$this->query = "INSERT INTO customer(fullname,email,accountnum,phone) 
                             VALUES('$fullname','$email','$account','$phone');
			";
		 	return $this->result = mysqli_query($this->connection,$this->query);
		}


public function update($account,$amount){
			$this->query = "UPDATE customer SET balance= customer.`balance`+$amount
            WHERE accountnum=$account;
			
			";
		 	return $this->result = mysqli_query($this->connection,$this->query);
		}



public function withdraw($account,$amount){
		 	$this->query ="UPDATE customer SET balance= customer.`balance`-$amount
            WHERE accountnum=$account;
";

		 	return $this->result = mysqli_query($this->connection,$this->query);
		
		}
		


public function select2($acc){
			$this->query = "SELECT accountnum FROM customer where accountnum='$acc';";
		 	return $this->result = mysqli_query($this->connection,$this->query);
		}



	}







?>