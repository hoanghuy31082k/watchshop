<?php

/**
 * 
 */
class Type extends DB
{

	// id, name

	function getAllType()
    {
        $qr="SELECT * FROM type";
        return mysqli_query($this->con,$qr);
    }

    function addType($name)
    {
        $qr="SELECT * FROM `type`";
        $num=mysqli_num_rows(mysqli_query($this->con,$qr));
        $qr="ALTER TABLE `type` AUTO_INCREMENT = ".$num;
        mysqli_query($this->con,$qr);
    	$qr="INSERT INTO type(name) values ('$name')";
    	return mysqli_query($this->con,$qr);
    }

    function removeType($id) {
    	$qr="DELETE FROM type WHERE id='$id'";
    	return mysqli_query($this->con,$qr);
    }

    function updateManu($id,$name) {
        $qr="UPDATE `type` SET `name` = '$name' WHERE `id` = '$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>