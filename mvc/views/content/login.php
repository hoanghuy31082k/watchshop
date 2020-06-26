<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $data["title"]; ?></title>
		<meta charset="utf-8">
		<link rel="icon" href="<?php echo BASEURL ?>/public/asset/image/logo-favicon.png">

		<!-- Asset -->
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/asset/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/asset/css/fullpage.css">

		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<header class="login-header">
			<a href="<?php echo $_SESSION['link'] ?>"><i class="fa fa-long-arrow-left"> Quay lại</i></a>
		</header>
		<main class="login-main">
			<div class="row">
				<div class="col-lg-offset-6 col-md-offset-6 col-lg-6 col-md-6">
					<div class="right">
						<h1>Đăng nhập</h1>
						<p style="color: red"><?php echo $data["Error"]; ?></p>
						<form action="<?php echo BASEURL ?>/home/login" method="POST">
							<input type="text" name="username" placeholder="Nhập tài khoản" required>
							<input type="password" name="pw" placeholder="Nhập mật khẩu" required>
							<input type="submit" name="login" value="Đăng nhập">
						</form>
						<a href="<?php echo BASEURL ?>/home/register">Chưa có tài khoản? Đăng ký ngay!</a>
						<div class="footer">
							<ul>
								<li><a href="https://www.facebook.com/" target="blank">Facebook</a></li>
								<li><a href="https://www.instagram.com/" target="blank">Instagram</a></li>
								<li><a href="https://twitter.com/" target="blank">Twitter</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>
<?php
	$old_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$_SESSION["link"]=$old_link;
?>