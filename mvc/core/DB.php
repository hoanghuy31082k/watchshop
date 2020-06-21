<?php
	/**
	 * 
	 */
	class DB
	{
		public $con;
		public $svname="localhost";
		public $username="root";
		public $pw="";
		public $dbname="watch";
		function __construct(argument)
		{
			$this->con=mysqli_connect($this->svname,$this->username,$this->pw);
			mysqli_select_db($this->con,$this->dbname);
			mysqli_query($this->con , "SET NAMES 'utf8'");
		}
	}
?>