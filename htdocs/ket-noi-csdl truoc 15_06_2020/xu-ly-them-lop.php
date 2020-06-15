<?php
include_once('ketnoi.php');



if(!empty($_POST["slTenNganh"]) && !empty($_POST["txtMaLop"])  && !empty($_POST["txtTenLop"])) {

	$maLop = $_POST["txtMaLop"];
	$tenLop = $_POST["txtTenLop"];
	$maNganh = $_POST["slTenNganh"];
} 

if(  isset($_POST["submit"]) ) {
	$sql = "INSERT INTO tbl_lop value('$maLop', N'$tenLop', '$maNganh')";
	if( $conn->query($sql) == true)
		header("Location: lop.php");
	else 
		echo "Lỗi ".$conn->error;

	$conn->close();
}
