<?php
	/**
	 * 
	 */
	class Route
	{
		protected $controller = "home";
		protected $action = "index";
		protected $param = [];

		function __construct()
		{
			$url =$this -> parseURL();
			if ($url!="") {
				if (file_exists("./mvc/controllers/".$url[0]."_controller.php")) {
					$this->controller = $url[0];
					unset($url[0]);
				}
				require_once "./mvc/controllers/".$this->controller."_controller.php";
				$this->controller = new $this->controller;

				if (isset($url[1])) {
					if (method_exists($this ->controller, $url[1])) {
						$this->action = $url[1];
						
					} else {
						$this->action = "error";
					}
					unset($url[1]);
				}

				$this->param = $url?array_values($url):[];

				
			}
			call_user_func_array([$this->controller,$this->action], $this->param);
		}

		public function parseURL()
		{
			if (isset($_GET['url'])) {
				return explode("/",filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
			}
		}
	}
?>