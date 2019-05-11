<?php
	class Connection
	{
		public $conn;

		public function __construct()
		{
			$this->conn = new PDO('mysql:host=localhost;dbname=avenger', 'root', '');
		}

		public function insertnger($name, $email, $phone)
		{
			try {

				$statement = $this->conn->prepare("INSERT INTO insertavenger(name, email, phone) VALUES(:name, :email, :phone)");
					$statement->execute	(
						array(	
							':name'		=>	$name,
							':email'	=>	$email,
							':phone'	=>	$phone
						)	
					);
					echo 'inserted';
				
			} catch (Exception $e) {
				echo 'error:'. $e->getMessage();
			}


		}
	}

?>