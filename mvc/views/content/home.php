<section id="section_1" class="section s1 container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="home-banner">
				<h1>
					Lorem Ipsum
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel rutrum enim, pretium sagittis est. Suspendisse felis metus, tincidunt sit amet neque eu, facilisis auctor nisl.

				</p>
				<button onclick="">Check out!</button>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<img src="<?php echo BASEURL ?>/public/asset/image/rolex-banner.png">
		</div>
	</div>
</section>

<section id="section_2" class="section s2">
	<div class="container section2">
		<div class="title">
			<h2>Sản phẩm</h2>
			<a href="<?php echo BASEURL ?>/home/product">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
		</div>
		<div class="product row">
			<?php
			$i=0;
				while ($row = mysqli_fetch_array($data["Products"])) {
					if ($i<8) {
						$name=$row['name'];
						$img=$row['img'];
						$url=BASEURL."/public/asset/image/".$row['img'];
						$url2=BASEURL."/home/product/".str_replace(" ","-",$row['name']);
						echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">';
						echo	'<div class="product-item">';
						echo	'<a href=""><i class="fa fa-cart-plus"></i></a>';
						echo	'<a href="'.$url2.'"></a>';
						echo	'<img src="'.$url.'" alt="'.$img.'">';
						echo	'<p class="price">'.$name.'</p>';
						echo	'<p>'.$row["price"].' đ</p>';
						echo	'</div>';
						echo '</div>';
					} else {
						break;
					}
					$i++;
				}
			?>
			

		</div>
	</div>
</section>
<section id="section_3" class="section s3">
	<div class="container">
		<div class="about-us row">
			<h2 class="title">Giới thiệu</h2>
			<div class="slide">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?php echo BASEURL ?>/public/asset/image/model1.jpg" alt="model1">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="slide">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?php echo BASEURL ?>/public/asset/image/model2.jpg" alt="model2">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="slide">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?php echo BASEURL ?>/public/asset/image/model3.jpg" alt="model3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text">
					<h3>Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section_4" class="section s4">
	<div class="container contact">
		<div class="row">
			<div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
				<h2>Liên lạc</h2>
				<i>Hãy nhập thông tin để không bỏ lỡ những khuyến mãi từ chúng tôi!</i>
				<form action="" method="POST">
					<input type="text" name="email" placeholder="Nhập họ tên">
					<input type="email" name="email" placeholder="Nhập email">
					<input type="text" name="text" placeholder="Nhập số điện thoại">
					<input type="submit" name="submit" value="Nhận khuyến mãi">
				</form>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6688952902186!2d106.67992501525548!3d10.759981062438188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c81c64183%3A0xd3109d7a7a8f753c!2zMjczIEFuIETGsMahbmcgVsawxqFuZywgUGjGsOG7nW5nIDMsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1593099456449!5m2!1sen!2s" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</section>