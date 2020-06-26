<?php
	/**
	 * 
	 */
	class Home extends Controller
	{
		public $product;
		public $user;
		public $manu;
		public $type;
		function __construct()
		{
			$this->product=$this->model("product");
			$this->user=$this->model("user");
			$this->type=$this->model("type");
			$this->manu=$this->model("manu");
		}
		function index()
		{

			$view=$this->view("client",[
				"title" => "Trang chủ",
				"main" => "home",
				"Products" => $this->product->getAllProduct(),
			]);
		}

		function product($name="") {
			if ($name!=="") {
				$name=str_replace("-"," ",$name);
				$view=$this->view("client",[
					"title" => $name,
					"main" => "product-detail",
					"Product" => $this->product->getProductbyName($name)
				]);
			} else {
				$view=$this->view("client",[
					"title" => "Sản phẩm",
					"main" => "product",
					"Products" => $this->product->getAllProduct()
				]);
			}
		}
		function login()
		{
			$err="";
			if (isset($_POST["login"])) {
				$uname=$_POST["username"];
				$pw=$_POST["pw"];
				$row=mysqli_fetch_array($this->user->Login($uname,$pw));
				if ($row) {
					$_SESSION["user"]= $uname;
					$_SESSION["role"]=$row['role'];
					$loc="Location: ".BASEURL."/home/index";
					header($loc);
				} else {
					$err="Thông tin đăng nhập không chính xác!";
				}
			};
			$view=$this->view("/content/login",[
				"title" => "Đăng nhập",
				"Error" => $err,
			]);
		}
		function register()
		{	
			$err="";
			$success="";
			if (isset($_POST["register"])) {
				$uname=$_POST["username"];
				$pw=$_POST["pw"];
				$repw=$_POST["re-pw"];
				$email=$_POST["email"];
				$phone=$_POST["phone"];
				$address=$_POST["address"];
				if ($pw === $repw) {
					if (mysqli_fetch_array($this->user->checkUser($uname))) {
						$err= "Tài khoản đã tồn tại!";
					} else {
						$this->user->addUser($uname,$pw,$email,$phone,$address);
						$success = "Đăng ký thành công!";
					}
				} else {
					$err = "Mật khẩu nhập lại không đúng!";
				}
			}
			$view=$this->view("/content/register",[
				"title" => "Đăng ký",
				"Error" => $err,
				"Success" => $success,
			]);
		}

		function timkiem() {
			$kw=$_POST['kw'];
			$rs=$this->product->searchProduct($kw);
			echo json_encode($rs);
			die();
		}

		function logout() {
			unset($_SESSION['user']);
			unset($_SESSION['role']);
			$loc="Location: ".BASEURL."/home/index";
			header($loc);
		}
		function error()
		{
			echo "Error";
		}
	}
?>