<?php

/**
 * 
 */
class Manu extends DB
{

	// id, name,contact

	function getAllManu()
    {
        $qr="SELECT * FROM manu";
        return mysqli_query($this->con,$qr);
    }

    function addManu($name,$contact)
    {
        $qr="SELECT * FROM `manu`";
        $num=mysqli_num_rows(mysqli_query($this->con,$qr));
        $qr="ALTER TABLE `manu` AUTO_INCREMENT = ".$num;
        mysqli_query($this->con,$qr);
    	$qr="INSERT INTO manu(name,contact) values ('$name','$contact')";
    	return mysqli_query($this->con,$qr);
    }

    function removeManu($id) {
    	$qr="DELETE FROM manu WHERE id='$id'";
    	return mysqli_query($this->con,$qr);
    }

    function updateManu($id,$name,$contact) {
        $qr="UPDATE `manu` SET `name` = '$name',contact = '$contact' WHERE `id` = '$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>