<?php
include_once('ketnoi.php');



if(!empty($_POST["txtMaNganh"]) && !empty($_POST["txtTenNganh"]) ) {

	$maNganh = $_POST["txtMaNganh"];
	$tenNganh = $_POST["txtTenNganh"];
} 

if(  isset($_POST["submit"]) ) {
	$sql = "INSERT INTO tbl_nganh value('$maNganh', N'$tenNganh')";
	if( $conn->query($sql) == true)
		header("Location: frm_them_nganh_hoc.php");
	else 
		echo "Lỗi ".$conn->error;

	$conn->close();
}

