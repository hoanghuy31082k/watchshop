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
	<!-- Header-->
	<header class="container-fluid">
		<a class="logo" href="<?php echo BASEURL ?>/home/index">
			<img src="<?php echo BASEURL ?>/public/asset/image/logo.png">
		</a>
		<ul id="header-menu">
			<li><a href="<?php echo BASEURL ?>/home/index">Trang chủ</a></li>
			<li><a href="#section2">Sản phẩm</a></li>
			<li><a href="#section3">Giới thiệu</a></li>
			<li><a href="#section4">Liên lạc</a></li>
			<li><a><i class="fa fa-shopping-cart"></i></a></li>
			<?php if (isset($_SESSION["user"])) {
				if ($_SESSION["role"]==="admin") {
					$url=BASEURL.'/admin';
				}else {
					$url="";
				}
				echo '<li><a class="small" href="'.$url.'">'.$_SESSION["user"].'</a></li>';
				echo '<li><a class="small" href="'.BASEURL.'/home/logout">Đăng xuất</a></li>';
				} else {
					echo '<li><a class="small" href="'.BASEURL.'/home/login">Đăng nhập</a></li>';
					echo '<li><a class="small" href="'.BASEURL.'/home/register">Đăng ký</a></li>';
				} 
			?>
				

		</ul>
	</header>
	<ul id="header-social">
		<li><a href="https://www.facebook.com/" target="blank">Facebook</a></li>
		<li><a href="https://www.instagram.com/" target="blank">Instagram</a></li>
		<li><a href="https://twitter.com/" target="blank">Twitter</a></li>
	</ul>
	<!-- Main -->
	<main id="fullPage">
		<?php require_once "./mvc/views/content/".$data["main"].".php" ?>
	</main>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row footer">
				<div class="col-lg-4 col-md-4">
					<h3>Chính sách</h3>
					<a href="">Đổi trả</a>
					<a href="">Bảo hành</a>
					<a href="">Khuyến mãi</a>
				</div>
				<div class="col-lg-4 col-md-4">
					<h3>Chính sách</h3>
					<a href="">Đổi trả</a>
					<a href="">Bảo hành</a>
					<a href="">Khuyến mãi</a>
				</div>
				<div class="col-lg-4 col-md-4">
					<h3>Thông tin</h3>
					<p>Địa chỉ : 274 An Dương Vương P3, Q5, TPHCM</p>
					<p>Số điện thoại: 0934490271</p>
					<p>Email: huynhhoanghuy3108@gmail.com</p>
				</div>
			</div>
		</div>
		<span>Copyright2020@BSM</span>
	</footer>


	<script type="text/javascript" src="<?php echo BASEURL ?>/public/asset/js/fullpage.js"></script>
	<script type="text/javascript">
		new fullpage('#fullPage',{
			autoScrolling: false,
			navigation : true,
			anchors: ['section1','section2','section3','section4'],
			navigationTooltips: ['Trang chủ','Sản phẩm','Giới thiệu','Liên lạc'],
			scrollingSpeed: 1000,
			responsiveWidth: 0,
			responsiveHeight: 0,
			controlArrows: false,
			slidesNavigation: true,
			fitToSection: false,
		});
	</script>
</body>
</html>
<?php
	$old_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$_SESSION["link"]=$old_link;
?>