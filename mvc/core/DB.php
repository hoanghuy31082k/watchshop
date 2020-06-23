<?php
	/**
	 * 
	 */
	class DB
	{
		public $con;
		protected $svname="localhost";
		protected $username="root";
		protected $pw="";
		protected $dbname="watch";
		function __construct()
		{
			$this->con=mysqli_connect($this->svname,$this->username,$this->pw);
			mysqli_select_db($this->con,$this->dbname);
			mysqli_query($this->con , "SET NAMES 'utf8'");
		}
	}
?>