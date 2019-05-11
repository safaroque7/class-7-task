<?php
	include 'FullName.php';

	class MyName implements FullName
	{
		public function __construct()
		{
			$this->printName();
		}

		public function printName()
		{
			echo 'faroque';
		}
		
	}
?>