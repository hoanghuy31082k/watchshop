<?php
	/**
	 * 
	 */
	class Admin extends Controller
	{
		
		public $product;
		public $user;
		public $manu;
		public $type;
		public $loc="Location: ".BASEURL."/admin/index";
		function __construct()
		{
			$this->product=$this->model("product");
			$this->user=$this->model("user");
			$this->type=$this->model("type");
			$this->manu=$this->model("manu");
		}


		function index()
		{
			if ($_SESSION['role']==="admin") {
				$view=$this->view("admin",[
					"title" => "Trang admin",
					"Products" => $this->product->getAllProduct(),
					"Types" => $this->type->getAllType(),
					"Manus" => $this->manu->getAllManu(),
					"Manu" => $this->manu->getAllManu(),
					"Type" => $this->type->getAllType()
				]);	
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
		}

		function addProduct() {
			if ($_SESSION['role']==="admin") {
				if (isset($_POST['upproduct'])) {
					$name=$_POST['name'];
					$price=$_POST['price'];
					$type=$_POST['type'];
					$manu=$_POST['manu'];
					$target_dir = BASEURL."/public/asset/image/";
					$target_file = $target_dir . basename($_FILES["img"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if(isset($_POST["submit"])) {
					  $check = getimagesize($_FILES["img"]["tmp_name"]);
					  if($check !== false) {
					    $uploadOk = 1;
					  } else {
					    $err= "File is not an image.";
					    $uploadOk = 0;
					  }
					}
					if ($uploadOk===1) {
						$this->product->addProduct($name,$price,$type,$manu,basename($_FILES["img"]["name"]));
						header($this->loc);
					}
				}
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
				
		}

		function removeProduct($id) {
			if ($_SESSION['role']==="admin") {
				
				$this->product->removeProduct($id);
				header($this->loc);
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
			
		}

		function addType() {
				
			if ($_SESSION['role']==="admin") {
				$name=$_POST['name'];
				if (isset($_POST['uptype'])) {
					$this->type->addType($name);
				}
				header($this->loc);
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
		}

		function removeType($id) {
			if ($_SESSION['role']==="admin") {
				$this->type->removeType($id);
				header($this->loc);
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
				
		}

		function addManu() {
			if ($_SESSION['role']==="admin") {
				$name=$_POST['name'];
				$contact=$_POST['contact'];
				if (isset($_POST['upmanu'])) {
					$this->manu->addManu($name,$contact);
				}
				header($this->loc);
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
				
		}

		function removeManu($id) {
			if ($_SESSION['role']==="admin") {
				$this->manu->removeManu($id);
				header($this->loc);
			} else {
				$view=$this->view("/content/access",[
					"title" => "Denies Access",
				]);	
			}
				
		}

		function error() {
			echo "Error";
		}
	}
?>