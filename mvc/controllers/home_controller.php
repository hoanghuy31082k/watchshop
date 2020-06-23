<?php
	/**
	 * 
	 */
	class Home extends Controller
	{
		public $model;
		function __construct()
		{
			$this->model=$this->model("product");
		}
		function index()
		{
			$view=$this->view("client",[
				"title" => "Trang chủ",
				"main" => "home",
			]);
		}
		function login()
		{
			$view=$this->view("client",[
				"title" => "Đăng nhập",
				"main" => "login",
			]);
		}
		function register()
		{
			$view=$this->view("client",[
				"title" => "Đăng ký",
				"main" => "register",
			]);
		}
		function error()
		{
			echo "Error";
		}
	}
?>