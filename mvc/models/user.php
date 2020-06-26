<?php
	/**
	 * 
	 */
	class User extends DB
	{
		// id,username,pw,email,phone,address,date,role
		public function Login($uname,$pw) {
			$qr= "SELECT * FROM users WHERE username='$uname' AND pw='$pw'";
			return mysqli_query($this->con,$qr);
		}

		public function checkUser($uname){
			$qr="SELECT * FROM users WHERE username='$uname';";
			return mysqli_query($this->con,$qr);
		}

		public function addUser($uname,$pw,$email,$phone,$address) {
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=date("Y-m-d");
			$qr="INSERT INTO `users`(`username`,`pw`,`email`,`phone`,`address`,`date`,`role`) values ('$uname','$pw','$email','$phone','$address','$date','user')";
			return mysqli_query($this->con,$qr);
		}
	}
?>