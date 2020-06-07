<?php
include_once('ketnoi.php');


$maNganh = $_POST["slTenNganh"];
$tenLop = $_POST["txtTenLop"];
$maLop = $_POST["txtMaLop"];

$sql = "update tbl_lop set maNganh='$maNganh', tenLop ='$tenLop'  where maLop='$maLop'";
if( $conn->query($sql) == true)
	header("Location: lop.php");
else 
	echo "Lỗi ".$conn->error;