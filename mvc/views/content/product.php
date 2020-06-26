<section class="container product-section">
	<h1>Sản phẩm</h1>
	<input type="text" name="kw" id="search">
	<div id="result" class="row product">
		<?php
				while ($row = mysqli_fetch_array($data["Products"])) {
						$name=$row['name'];
						$img=$row['img'];
						$url=BASEURL."/public/asset/image/".$row['img'];
						$url2=BASEURL."/home/product/".str_replace(" ","-",$row['name']);
						echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
						echo	'<div class="product-item">';
						echo	'<a href=""><i class="fa fa-cart-plus"></i></a>';
						echo	'<a href="'.$url2.'"></a>';
						echo	'<img src="'.$url.'" alt="'.$img.'">';
						echo	'<p class="price">'.$name.'</p>';
						echo	'<p>'.$row["price"].' đ</p>';
						echo	'</div>';
						echo '</div>';
				}
			?>

		
	</div>
</section>
<script type="text/javascript" src="<?php echo BASEURL ?>/public/asset/js/ajax.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#search').keyup(() =>{
			var kw=$("#search").val();
			$.ajax({
				url : "/watchshop/home/timkiem",
				type :"post",
				data : {
					kw : kw,
				},
				success : function (data) {
					$("#result").html('');
					console.log(data);
				}
			});
		});

	});
</script>