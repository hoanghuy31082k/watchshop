<?php
	$row=mysqli_fetch_array($data["Product"]);
	$url=BASEURL."/public/asset/image/".$row['img'];
?>

<section class="product-detail">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-mg-6">
				<img src="<?php echo $url ?>">
			</div>
			<div class="col-lg-6 col-mg-6">
				<h1><?php echo $row['name'];?></h1>
				<ul>
					<li><p>Giá: <?php echo $row['price'];?></p></li>
					<li><p>Thể loại: <?php echo $row['type'];?></p></li>
					<li><p>Hãng: <?php echo $row['manu'];?></p></li>
				</ul>
				<a>Thêm vào giỏ</a>
			</div>
		</div>
	</div>
</section>