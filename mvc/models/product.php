<?php

/**
 * 
 */
class Product extends DB
{

	// id, name, price , type , manu, img, date

	function getAllProduct()
    {
        $qr="SELECT * FROM product";
        return mysqli_query($this->con,$qr);
    }

    function addProduct($name,$price,$type,$manu,$img)
    {
        $qr="SELECT * FROM product";
        $num=mysqli_num_rows(mysqli_query($this->con,$qr));
        $qr="ALTER TABLE product AUTO_INCREMENT = ". $num;
        mysqli_query($this->con,$qr);
    	date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date=date("Y-m-d");
    	$qr="INSERT INTO product(name,price,type,manu,img,date) values ('$name','$price','$type','$manu','$img','$date')";
    	return mysqli_query($this->con,$qr);
    }

    function removeProduct($id) {
    	$qr="DELETE FROM product WHERE id='$id'";
    	return mysqli_query($this->con,$qr);
    }

    function updateProduct($id,$name,$price,$type,$manu,$img) {
        $qr="UPDATE `product` SET `name` = '$name',price = '$price',type = '$type',manu = '$manu',img = '$img' WHERE `id` = '$id'";
        return mysqli_query($this->con,$qr);
    }

    function getProductbyName($name)
    {
        $qr="SELECT * FROM product WHERE name='$name'";
        return mysqli_query($this->con,$qr);
    }

    function searchProduct($kw)
    {
        $qr="SELECT * FROM product WHERE name LIKE N'%$kw%' OR id LIKE N'%$kw%' OR price LIKE N'%$kw%' OR type LIKE N'%$kw%' OR manu LIKE N'%$kw%' ";
        return mysqli_query($this->con,$qr);
    }

}
?>