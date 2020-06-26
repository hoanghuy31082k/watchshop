<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data["title"]; ?></title>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo BASEURL ?>/public/asset/image/logo-favicon.png">

	<!-- Asset -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/asset/css/admin.css">

	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<img src="<?php echo BASEURL ?>/public/asset/image/logo.png">
			<ul>
				<li><a href="#section_1">Tổng quan</a></li>
				<li><a href="#section_2">Quản lý đồng hồ</a></li>
				<li><a href="#section_3">Quản lý loại</a></li>
				<li><a href="#section_4">Quản lý nhà sản xuất</a></li>
				<li><a href="<?php echo BASEURL ?>">Quay lại trang mua hàng</a></li>
				<li><a href="<?php echo BASEURL ?>/home/logout">Đăng xuất</a></li>
			</ul>
		</div>
		<div class="main-content">
			<section id="section_1">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="analyst">
							
						</div>
					</div>
				</div>
			</section>
			<section id="section_2">
				<h2>Quản lý đồng hồ</h2>
				<form action="<?php echo BASEURL ?>/admin/addProduct" method="POST" enctype='multipart/form-data'>
					<input type="text" name="name" placeholder="Nhập tên sản phẩm">
					<input type="text" name="price" placeholder="Nhập giá sản phẩm">
					<label>Chọn loại:</label>
					<select name="type">
						<?php
							while($row=mysqli_fetch_array($data["Types"])){
								$name=$row['name'];
								echo "<option>$name</option>";
							}
						?>
					</select>
					<label>Chọn nhà sản xuất:</label>
					<select name="manu">
						<?php
							while($row=mysqli_fetch_array($data["Manus"])){
								$name=$row['name'];
								echo "<option>$name</option>";
							}
						?>
					</select>
					<input type="file" name="img">
					<input type="submit" name="upproduct" value="Thêm sản phẩm">
				</form>
				<table>
					<thead>
						<th>ID</th>
						<th>Tên đồng hồ</th>
						<th>Giá</th>
						<th>Loại</th>
						<th>Nhà sản xuất</th>
						<th>Ảnh</th>
						<th>Ngày thêm</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							while($row=mysqli_fetch_array($data["Products"])){
								$product_id=$row['id'];
								$product_price=$row['price'];
								$product_name=$row['name'];
								$product_manu=$row['manu'];
								$product_type=$row['type'];
								$product_date=$row['date'];
								$product_img=BASEURL."/public/asset/image/".$row['img'];
								$product_url=BASEURL."/admin/removeProduct/".$product_id;
								echo "<tr>";
								echo "<td>".$product_id."</td>";
								echo "<td>".$product_name."</td>";
								echo "<td>".$product_price."</td>";
								echo "<td>".$product_type."</td>";
								echo "<td>".$product_manu."</td>";
								echo '<td><img src="'.$product_img.'"></td>';
								echo "<td>".$product_date."</td>";
								echo '<td><a href="'.$product_url.'"><i class="fa fa-minus-circle"></i></a></td>';
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</section>
			<section id="section_3">
				<h2>Quản lý loại</h2>
				<form action="<?php echo BASEURL ?>/admin/addType" method="POST" enctype='multipart/form-data'>
					<input type="text" name="name" placeholder="Nhập tên loại">
					<input type="submit" name="uptype" value="Thêm loại">
				</form>
				<table>
					<thead>
						<th>ID</th>
						<th>Tên loại</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							while($row=mysqli_fetch_array($data["Type"])){
								$type_id=$row['id'];
								$type_name=$row['name'];
								$type_url=BASEURL."/admin/removeType/".$type_id;
								echo "<tr>";
									echo "<td>$type_id</td>";
									echo "<td>$type_name</td>";
									echo '<td><a href="'.$type_url.'"><i class="fa fa-minus-circle"></i></a></td>';
								echo "</tr>";
							}
						?>
					</tbody>
					
				</table>
			</section>
			<section id="section_4">
				<h2>Quản lý nhà sản xuất</h2>
				<form action="<?php echo BASEURL ?>/admin/addManu" method="POST" enctype='multipart/form-data'>
					<input type="text" name="name" placeholder="Nhập tên nhà sản xuất">
					<input type="text" name="contact" placeholder="Nhập thông tin liên lạc">
					<input type="submit" name="upmanu" value="Thêm nhà sản xuất">
				</form>
				<table>
					<thead>
						<th>ID</th>
						<th>Tên nhà sản xuất</th>
						<th>Liên lạc</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							while($row=mysqli_fetch_array($data["Manu"])){
								$url=BASEURL."/admin/removeManu/".$row['id'];
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo '<td><a href="'.$url.'"><i class="fa fa-minus-circle"></i></a></td>';
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</section>
		</div>
	</div>
</body>
</html>