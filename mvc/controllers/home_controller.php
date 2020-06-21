<?php
	/**
	 * 
	 */
	class Home extends Controller
	{
		function __construct()
		{
			$model=$this->model("product");
		}
		function index()
		{
			$model=$this->model("product");
			$a=3;
			$view=$this->view("home",["a"=>$a]);
		}
		function cong($a,$b)
		{
			echo $a+$b;
		}
		function error()
		{
			echo "Error";
		}
	}
?>