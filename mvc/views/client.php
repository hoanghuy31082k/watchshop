<?php
	define("BASEURL", "http://localhost/watchshop")
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data["title"]; ?></title>
	<meta charset="utf-8">

	<!-- Asset -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/asset/css/style.css">
	<script type="text/javascript" src="<?php echo BASEURL ?>/public/asset/js/detectmouseid.js"></script>

	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<!-- Header-->
	<header class="container-fluid">
		<ul id="header-menu">
			<li><a href="<?php echo BASEURL ?>/home/index">Trang chủ</a></li>
			<li><a href="#section_2">Sản phẩm</a></li>
			<li><a href="#section_3">Giới thiệu</a></li>
			<li><a href="#section_4">Liên lạc</a></li>
			<li><a class="small" href="<?php echo BASEURL ?>/home/login">Đăng nhập</a></li>
			<li><a class="small" href="<?php echo BASEURL ?>/home/register">Đăng ký</a></li>
		</ul>
	</header>
	<ul id="header-social">
		<li><a href="https://www.facebook.com/" target="blank">Facebook</a></li>
		<li><a href="https://www.instagram.com/" target="blank">Instagram</a></li>
		<li><a href="https://twitter.com/" target="blank">Twitter</a></li>
	</ul>
	<ul id="header-menu-icon">
		<li><a id="select_1" href="#section_1">1</a></li>
		<li><a id="select_2" href="#section_2">2</a></li>
		<li><a id="select_3" href="#section_3">3</a></li>
		<li><a id="select_4" href="#section_4">4</a></li>
	</ul>

	<!-- Main -->
	<main>
		<?php require_once "./mvc/views/content/".$data["main"].".php" ?>
	</main>

	<!-- Footer -->
	<footer id="section_4">
		
	</footer>
</body>
</html>