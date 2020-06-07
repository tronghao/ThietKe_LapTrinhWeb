<?php
include_once('ketnoi.php');

if ( isset($_GET["ma"]) ) {
	$maNganh = $_GET["ma"];
}
$tenNganh = $_POST["txtTenNganh"];

$sql = "update tbl_nganh set tenNganh='$tenNganh'  where maNganh='$maNganh'";
if( $conn->query($sql) == true)
	header("Location: hien-thi-du-lieu.php");
else 
	echo "Lỗi ".$conn->error;